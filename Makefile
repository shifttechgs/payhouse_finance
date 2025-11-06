.PHONY: help build up down restart logs status deploy migrate seed clear optimize backup

# Default target
.DEFAULT_GOAL := help

# Colors
BLUE := \033[0;34m
GREEN := \033[0;32m
YELLOW := \033[1;33m
NC := \033[0m # No Color

help: ## Show this help message
	@echo "$(BLUE)PayHouse Finance - Docker Commands$(NC)"
	@echo ""
	@echo "$(GREEN)Usage:$(NC) make [target]"
	@echo ""
	@echo "$(YELLOW)Available targets:$(NC)"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  $(BLUE)%-15s$(NC) %s\n", $$1, $$2}'

deploy: ## Full deployment (build, start, migrate, optimize)
	@echo "$(GREEN)Starting full deployment...$(NC)"
	@./docker-deploy.sh deploy

build: ## Build Docker images
	@echo "$(GREEN)Building Docker images...$(NC)"
	@docker-compose build

up: ## Start Docker containers
	@echo "$(GREEN)Starting Docker containers...$(NC)"
	@docker-compose up -d
	@docker-compose ps

down: ## Stop Docker containers
	@echo "$(YELLOW)Stopping Docker containers...$(NC)"
	@docker-compose down

restart: ## Restart Docker containers
	@echo "$(YELLOW)Restarting Docker containers...$(NC)"
	@docker-compose restart
	@docker-compose ps

logs: ## Show logs from all containers
	@docker-compose logs -f

logs-app: ## Show logs from app container
	@docker-compose logs -f app

logs-mysql: ## Show logs from MySQL container
	@docker-compose logs -f mysql

logs-redis: ## Show logs from Redis container
	@docker-compose logs -f redis

status: ## Show container status
	@docker-compose ps

migrate: ## Run database migrations
	@echo "$(GREEN)Running migrations...$(NC)"
	@docker-compose exec app php artisan migrate --force

migrate-fresh: ## Fresh migration (drop all tables and re-migrate)
	@echo "$(YELLOW)Running fresh migrations (WARNING: This will drop all tables)...$(NC)"
	@docker-compose exec app php artisan migrate:fresh --force

seed: ## Seed the database
	@echo "$(GREEN)Seeding database...$(NC)"
	@docker-compose exec app php artisan db:seed --force

clear: ## Clear all cache
	@echo "$(GREEN)Clearing cache...$(NC)"
	@docker-compose exec app php artisan optimize:clear
	@docker-compose exec app php artisan config:clear
	@docker-compose exec app php artisan cache:clear
	@docker-compose exec app php artisan route:clear
	@docker-compose exec app php artisan view:clear

optimize: ## Optimize application (cache configs, routes, views)
	@echo "$(GREEN)Optimizing application...$(NC)"
	@docker-compose exec app php artisan config:cache
	@docker-compose exec app php artisan route:cache
	@docker-compose exec app php artisan view:cache

backup: ## Backup database
	@./docker-deploy.sh backup

shell: ## Access app container shell
	@docker-compose exec app /bin/sh

shell-mysql: ## Access MySQL shell
	@docker-compose exec mysql mysql -u root -p

shell-redis: ## Access Redis CLI
	@docker-compose exec redis redis-cli

composer-install: ## Install composer dependencies
	@docker-compose exec app composer install

composer-update: ## Update composer dependencies
	@docker-compose exec app composer update

npm-install: ## Install NPM dependencies
	@docker-compose run --rm app npm install

npm-build: ## Build frontend assets
	@docker-compose run --rm app npm run build

test: ## Run tests
	@docker-compose exec app php artisan test

clean: ## Remove all containers, volumes, and images
	@echo "$(YELLOW)WARNING: This will remove all containers, volumes, and images!$(NC)"
	@read -p "Are you sure? [y/N] " -n 1 -r; \
	echo; \
	if [[ $$REPLY =~ ^[Yy]$$ ]]; then \
		docker-compose down -v --rmi all; \
		echo "$(GREEN)Cleanup completed$(NC)"; \
	fi

ps: ## Show running containers
	@docker-compose ps

top: ## Display running processes in containers
	@docker-compose top
