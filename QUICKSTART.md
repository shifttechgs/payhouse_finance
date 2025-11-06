# 🚀 Quick Start Guide - PayHouse Finance Docker Deployment

Get your PayHouse Finance application running in Docker in just a few minutes!

## Prerequisites

- Docker Engine 20.10+ installed
- Docker Compose 2.0+ installed
- 2GB RAM available
- 5GB disk space available

## 📝 Step 1: Configure Environment

Create your environment file from the template:

```bash
cp .env.docker .env
```

Edit the `.env` file and set strong passwords:

```bash
nano .env  # or use your preferred editor
```

Update these values:
```env
DB_ROOT_PASSWORD=your_secure_root_password_here
DB_DATABASE=payhouse
DB_USERNAME=payhouse_user
DB_PASSWORD=your_secure_password_here
```

## 🔑 Step 2: Generate Application Key

Generate your Laravel application key:

```bash
docker-compose run --rm app php artisan key:generate --show
```

Copy the output (something like `base64:xxxxx...`) and add it to your `.env` file:

```env
APP_KEY=base64:your_generated_key_here
```

## 🏗️ Step 3: Deploy with One Command

### Option A: Using the Deployment Script (Recommended)

```bash
chmod +x docker-deploy.sh
./docker-deploy.sh deploy
```

### Option B: Using Make

```bash
make deploy
```

### Option C: Manual Deployment

```bash
# Build images
docker-compose build

# Start containers
docker-compose up -d

# Wait for services to be ready (30 seconds)
sleep 30

# Run migrations
docker-compose exec app php artisan migrate --force

# Optimize application
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
```

## ✅ Step 4: Verify Installation

Check that all containers are running:

```bash
docker-compose ps
```

Or use the health check script:

```bash
chmod +x docker-health-check.sh
./docker-health-check.sh
```

Visit your application:
```
http://localhost:8080
```

## 🎯 Common Commands

### Container Management
```bash
# View logs
docker-compose logs -f

# Stop containers
docker-compose down

# Restart containers
docker-compose restart

# Check status
docker-compose ps
```

### Using Make (Shorthand Commands)
```bash
make help      # Show all available commands
make logs      # View logs
make status    # Check container status
make migrate   # Run migrations
make clear     # Clear cache
make backup    # Backup database
```

### Laravel Commands
```bash
# Clear cache
docker-compose exec app php artisan cache:clear

# Run migrations
docker-compose exec app php artisan migrate

# Access container shell
docker-compose exec app /bin/sh

# Run artisan commands
docker-compose exec app php artisan [command]
```

## 🔧 Troubleshooting

### Containers won't start
```bash
# Check logs
docker-compose logs

# Remove and recreate
docker-compose down -v
docker-compose up -d
```

### Port already in use
Edit `docker-compose.yml` and change the port mapping:
```yaml
ports:
  - "8080:80"  # Change 8080 to another available port
```

### Permission errors
```bash
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chmod -R 775 /var/www/html/storage
```

### Database connection errors
```bash
# Wait for MySQL to be ready
sleep 30

# Then try migrations again
docker-compose exec app php artisan migrate --force
```

## 📚 Next Steps

- Read the full [Docker README](DOCKER_README.md) for detailed documentation
- Configure SSL/TLS for production
- Set up automated backups
- Configure monitoring and logging
- Review security best practices

## 🆘 Need Help?

Run the health check to diagnose issues:
```bash
./docker-health-check.sh
```

Check logs for specific services:
```bash
docker-compose logs app
docker-compose logs mysql
docker-compose logs redis
```

## 🎉 Success!

Your PayHouse Finance application is now running in Docker!

- **Application**: http://localhost:8080
- **MySQL**: localhost:3307
- **Redis**: localhost:6380

Happy deploying! 🚀
