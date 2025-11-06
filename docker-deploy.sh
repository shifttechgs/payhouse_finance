#!/bin/bash

# PayHouse Finance Docker Deployment Script
# This script helps you deploy and manage the Docker environment

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Function to check if Docker is installed
check_docker() {
    if ! command -v docker &> /dev/null; then
        print_error "Docker is not installed. Please install Docker first."
        exit 1
    fi

    if ! command -v docker-compose &> /dev/null; then
        print_error "Docker Compose is not installed. Please install Docker Compose first."
        exit 1
    fi

    print_success "Docker and Docker Compose are installed"
}

# Function to check if .env file exists
check_env() {
    if [ ! -f .env ]; then
        print_warning ".env file not found"
        print_info "Creating .env from .env.docker template..."
        cp .env.docker .env
        print_warning "Please edit .env file and add your database credentials and APP_KEY"
        print_info "You can generate APP_KEY with: docker-compose run --rm app php artisan key:generate --show"
        exit 0
    fi

    # Check if APP_KEY is set
    if ! grep -q "APP_KEY=base64:" .env; then
        print_warning "APP_KEY not set in .env file"
        print_info "Generating APP_KEY..."

        # Build the app container if not exists
        docker-compose build app

        # Generate key
        KEY=$(docker-compose run --rm app php artisan key:generate --show)

        # Update .env file
        sed -i "s/APP_KEY=.*/APP_KEY=$KEY/" .env
        print_success "APP_KEY generated and added to .env"
    fi
}

# Function to build containers
build() {
    print_info "Building Docker images..."
    docker-compose build
    print_success "Docker images built successfully"
}

# Function to start containers
start() {
    print_info "Starting Docker containers..."
    docker-compose up -d
    print_success "Docker containers started"

    # Wait a bit for services to be ready
    print_info "Waiting for services to be ready..."
    sleep 10

    # Show status
    docker-compose ps
}

# Function to stop containers
stop() {
    print_info "Stopping Docker containers..."
    docker-compose down
    print_success "Docker containers stopped"
}

# Function to restart containers
restart() {
    print_info "Restarting Docker containers..."
    docker-compose restart
    print_success "Docker containers restarted"
}

# Function to run migrations
migrate() {
    print_info "Running database migrations..."
    docker-compose exec app php artisan migrate --force
    print_success "Migrations completed"
}

# Function to seed database
seed() {
    print_info "Seeding database..."
    docker-compose exec app php artisan db:seed --force
    print_success "Database seeded"
}

# Function to clear cache
clear_cache() {
    print_info "Clearing application cache..."
    docker-compose exec app php artisan optimize:clear
    docker-compose exec app php artisan config:clear
    docker-compose exec app php artisan cache:clear
    docker-compose exec app php artisan route:clear
    docker-compose exec app php artisan view:clear
    print_success "Cache cleared"
}

# Function to optimize application
optimize() {
    print_info "Optimizing application..."
    docker-compose exec app php artisan config:cache
    docker-compose exec app php artisan route:cache
    docker-compose exec app php artisan view:cache
    print_success "Application optimized"
}

# Function to show logs
logs() {
    if [ -z "$1" ]; then
        docker-compose logs -f
    else
        docker-compose logs -f "$1"
    fi
}

# Function to backup database
backup() {
    BACKUP_FILE="backup_$(date +%Y%m%d_%H%M%S).sql"
    print_info "Creating database backup: $BACKUP_FILE"
    docker-compose exec mysql mysqldump -u root -p"${DB_ROOT_PASSWORD}" "${DB_DATABASE}" > "$BACKUP_FILE"
    print_success "Database backed up to $BACKUP_FILE"
}

# Function to deploy (full deployment)
deploy() {
    print_info "Starting full deployment..."

    check_docker
    check_env
    build
    start

    print_info "Waiting for database to be ready..."
    sleep 15

    migrate
    clear_cache
    optimize

    print_success "Deployment completed successfully!"
    print_info "Application is running at: http://localhost:8080"
}

# Function to show status
status() {
    print_info "Docker containers status:"
    docker-compose ps
}

# Function to show help
show_help() {
    cat << EOF
PayHouse Finance Docker Deployment Script

Usage: ./docker-deploy.sh [command]

Commands:
    deploy          Full deployment (build, start, migrate, optimize)
    build           Build Docker images
    start           Start Docker containers
    stop            Stop Docker containers
    restart         Restart Docker containers
    migrate         Run database migrations
    seed            Seed the database
    clear           Clear application cache
    optimize        Optimize application (cache configs, routes, views)
    logs [service]  Show logs (optionally for specific service)
    backup          Backup database
    status          Show container status
    help            Show this help message

Examples:
    ./docker-deploy.sh deploy           # Full deployment
    ./docker-deploy.sh start            # Start containers
    ./docker-deploy.sh logs app         # Show app logs
    ./docker-deploy.sh migrate          # Run migrations

EOF
}

# Main script logic
case "$1" in
    deploy)
        deploy
        ;;
    build)
        check_docker
        build
        ;;
    start)
        check_docker
        start
        ;;
    stop)
        stop
        ;;
    restart)
        restart
        ;;
    migrate)
        migrate
        ;;
    seed)
        seed
        ;;
    clear)
        clear_cache
        ;;
    optimize)
        optimize
        ;;
    logs)
        logs "$2"
        ;;
    backup)
        backup
        ;;
    status)
        status
        ;;
    help|--help|-h)
        show_help
        ;;
    *)
        print_error "Invalid command: $1"
        echo ""
        show_help
        exit 1
        ;;
esac
