# PayHouse Finance - Docker Deployment Guide

This guide will help you deploy the PayHouse Finance application using Docker for production environments.

## 🐳 Overview

The Docker setup includes:
- **Application Container**: Laravel application with PHP 8.2-FPM + Nginx
- **MySQL Container**: MySQL 8.0 database
- **Redis Container**: Redis 7 for caching and sessions
- **Queue Worker Container**: Laravel queue processor
- **Scheduler Container**: Laravel task scheduler

## 🚀 Port Configuration

Since ports 80, 443, 8443, and 8081 are already in use, the following alternative ports are configured:

- **HTTP**: `8080` (mapped to container port 80)
- **MySQL**: `3307` (mapped to container port 3306)
- **Redis**: `6380` (mapped to container port 6379)

Access your application at: `http://localhost:8080`

## 📋 Prerequisites

- Docker Engine 20.10 or higher
- Docker Compose 2.0 or higher
- At least 2GB of free RAM
- At least 5GB of free disk space

## 🛠️ Initial Setup

### 1. Environment Configuration

Create your environment file:

```bash
cp .env.docker .env
```

Edit `.env` and update the following variables:

```env
# Database credentials
DB_ROOT_PASSWORD=your_secure_root_password_here
DB_DATABASE=payhouse
DB_USERNAME=payhouse_user
DB_PASSWORD=your_secure_password_here

# Redis password (optional but recommended)
REDIS_PASSWORD=your_redis_password_here
```

### 2. Generate Application Key

Before building, generate your Laravel application key:

```bash
# Generate key
docker-compose run --rm app php artisan key:generate --show
```

Copy the generated key and add it to your `.env` file:

```env
APP_KEY=base64:your_generated_key_here
```

### 3. Build and Start Containers

Build the Docker images:

```bash
docker-compose build
```

Start all services:

```bash
docker-compose up -d
```

### 4. Run Database Migrations

```bash
docker-compose exec app php artisan migrate --force
```

### 5. Verify Installation

Check if all containers are running:

```bash
docker-compose ps
```

Visit `http://localhost:8080` in your browser.

## 🔧 Common Commands

### Container Management

```bash
# Start all services
docker-compose up -d

# Stop all services
docker-compose down

# Restart all services
docker-compose restart

# View logs
docker-compose logs -f

# View specific service logs
docker-compose logs -f app
docker-compose logs -f mysql
docker-compose logs -f redis
```

### Application Commands

```bash
# Run artisan commands
docker-compose exec app php artisan [command]

# Clear cache
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan route:clear

# Run migrations
docker-compose exec app php artisan migrate

# Seed database
docker-compose exec app php artisan db:seed

# Create a new user (if applicable)
docker-compose exec app php artisan tinker
```

### Composer & NPM

```bash
# Install composer dependencies
docker-compose exec app composer install

# Update composer dependencies
docker-compose exec app composer update

# Install NPM dependencies (if needed)
docker-compose run --rm app npm install

# Build assets (if needed)
docker-compose run --rm app npm run build
```

### Database Management

```bash
# Access MySQL shell
docker-compose exec mysql mysql -u payhouse_user -p payhouse

# Backup database
docker-compose exec mysql mysqldump -u payhouse_user -p payhouse > backup.sql

# Restore database
docker-compose exec -T mysql mysql -u payhouse_user -p payhouse < backup.sql

# Access Redis CLI
docker-compose exec redis redis-cli
```

## 📁 Directory Structure

```
.
├── docker/
│   ├── nginx/
│   │   ├── nginx.conf          # Main Nginx configuration
│   │   └── default.conf        # Site configuration
│   ├── php/
│   │   ├── php.ini             # PHP configuration
│   │   └── php-fpm.conf        # PHP-FPM pool configuration
│   ├── supervisor/
│   │   └── supervisord.conf    # Supervisor configuration
│   ├── mysql/
│   │   └── my.cnf              # MySQL configuration
│   └── entrypoint.sh           # Container startup script
├── Dockerfile                   # Application Docker image
├── docker-compose.yml          # Docker Compose configuration
├── .dockerignore               # Docker build exclusions
└── .env.docker                 # Environment template
```

## 🔐 Security Best Practices

### 1. Strong Passwords

Always use strong, unique passwords for:
- Database root user
- Database application user
- Redis (if password-protected)

### 2. Environment Variables

Never commit `.env` file to version control. Use `.env.example` or `.env.docker` as templates.

### 3. SSL/TLS

For production, configure SSL/TLS:

1. Add SSL certificates to `docker/nginx/ssl/`
2. Update `docker/nginx/default.conf` to enable HTTPS
3. Update port mapping in `docker-compose.yml`

### 4. Firewall

Configure your firewall to only allow necessary ports:

```bash
# Allow only HTTP port
sudo ufw allow 8080/tcp

# Block direct access to MySQL and Redis from outside
sudo ufw deny 3307/tcp
sudo ufw deny 6380/tcp
```

## 🚦 Health Checks

All services have health checks configured:

```bash
# Check service health
docker-compose ps

# Manual health check
curl http://localhost:8080/health
```

## 📊 Monitoring and Logs

### View Logs

```bash
# All services
docker-compose logs -f

# Specific service
docker-compose logs -f app

# Last 100 lines
docker-compose logs --tail=100 app
```

### Log Files Location

Inside containers:
- Nginx: `/var/log/nginx/`
- PHP-FPM: `/var/log/php-fpm-error.log`
- Supervisor: `/var/log/supervisor/`
- Laravel: `/var/www/html/storage/logs/`

## 🔄 Updates and Maintenance

### Update Application Code

```bash
# Pull latest code
git pull origin main

# Rebuild containers
docker-compose build

# Restart services
docker-compose up -d

# Run migrations
docker-compose exec app php artisan migrate --force

# Clear cache
docker-compose exec app php artisan optimize:clear
docker-compose exec app php artisan optimize
```

### Backup Strategy

```bash
# Database backup
docker-compose exec mysql mysqldump -u payhouse_user -p payhouse > backup_$(date +%Y%m%d).sql

# Application files backup
tar -czf app_backup_$(date +%Y%m%d).tar.gz storage/ .env

# Volume backup
docker run --rm -v payhouse_mysql_data:/data -v $(pwd):/backup alpine tar czf /backup/mysql_data_$(date +%Y%m%d).tar.gz /data
```

## 🐛 Troubleshooting

### Container Won't Start

```bash
# Check logs
docker-compose logs app

# Check if ports are in use
netstat -tulpn | grep 8080

# Remove and recreate containers
docker-compose down -v
docker-compose up -d
```

### Permission Issues

```bash
# Fix storage permissions
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chmod -R 775 /var/www/html/storage
```

### Database Connection Issues

```bash
# Check if MySQL is running
docker-compose ps mysql

# Test connection
docker-compose exec app php artisan tinker
# Then run: DB::connection()->getPdo();
```

### Clear All Cache

```bash
docker-compose exec app php artisan optimize:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
```

## 🗑️ Cleanup

### Stop and Remove Containers

```bash
# Stop containers
docker-compose down

# Remove containers and volumes
docker-compose down -v

# Remove images
docker-compose down --rmi all
```

### Clean Docker System

```bash
# Remove unused images, containers, networks
docker system prune -a

# Remove all volumes (CAUTION: This will delete all data)
docker volume prune
```

## 📞 Support

For issues or questions, please refer to:
- Laravel Documentation: https://laravel.com/docs
- Docker Documentation: https://docs.docker.com

## 📝 Notes

- The application is configured for production use with caching enabled
- Queue workers automatically restart on failure
- Scheduler runs every minute
- Health checks ensure service availability
- All logs are accessible via Docker logs or within containers
