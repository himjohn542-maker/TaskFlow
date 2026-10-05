FROM php:8.2-cli

# Install system packages & PostgreSQL extension drivers needed by Laravel
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Download official Composer executable
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set active container directory
WORKDIR /var/www/html

# Copy repository files into the container
COPY . .

# Install PHP dependencies for production
RUN composer install --no-dev --optimize-autoloader

# Expose server port
EXPOSE 10000

# Execute database migrations and launch Laravel app server
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}