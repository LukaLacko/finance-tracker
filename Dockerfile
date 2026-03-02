FROM php:8.4-cli

# System packages + PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libpq-dev \
    && docker-php-ext-install \
        gd \
        pdo \
        pdo_pgsql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install \
    --optimize-autoloader \
    --no-dev \
    --no-interaction

# Laravel permissions
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000