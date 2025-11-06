#!/bin/bash
set -e

echo "Starting PayHouse Finance application..."

# Function to wait for a service to be ready
wait_for_service() {
    local host=$1
    local port=$2
    local service=$3
    local max_attempts=30
    local attempt=1

    echo "Waiting for $service to be ready..."
    while ! nc -z "$host" "$port" >/dev/null 2>&1; do
        if [ $attempt -ge $max_attempts ]; then
            echo "ERROR: $service is not available after $max_attempts attempts"
            exit 1
        fi
        echo "Attempt $attempt/$max_attempts: $service not ready yet..."
        sleep 2
        attempt=$((attempt + 1))
    done
    echo "$service is ready!"
}

# Wait for MySQL if using MySQL
if [ "$DB_CONNECTION" = "mysql" ]; then
    wait_for_service "$DB_HOST" "$DB_PORT" "MySQL"
fi

# Wait for Redis if using Redis
if [ -n "$REDIS_HOST" ]; then
    wait_for_service "$REDIS_HOST" "${REDIS_PORT:-6379}" "Redis"
fi

# Ensure proper permissions
echo "Setting up permissions..."
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

# Create necessary directories if they don't exist
mkdir -p /var/www/html/storage/framework/{sessions,views,cache}
mkdir -p /var/www/html/storage/logs
chown -R www-data:www-data /var/www/html/storage
chmod -R 775 /var/www/html/storage

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force --no-interaction || {
    echo "WARNING: Migration failed. If this is the first run, the database might not be ready."
    echo "You can manually run: docker-compose exec app php artisan migrate"
}

# Clear and cache configuration
echo "Optimizing application..."
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if it doesn't exist
if [ ! -L /var/www/html/public/storage ]; then
    echo "Creating storage link..."
    php artisan storage:link
fi

echo "Application setup completed!"

# Execute the main command
exec "$@"
