# ----------------------------------------
# Stage 0: PHP + Composer + Laravel dependencies
# ----------------------------------------
    FROM php:8.4-cli

    # Instalacija sistema paketa i PHP ekstenzija
    RUN apt-get update && apt-get install -y \
        git \
        curl \
        unzip \
        zip \
        libzip-dev \
        libpng-dev \
        libpq-dev \
        libonig-dev \
        && docker-php-ext-install \
            gd \
            pdo \
            pdo_pgsql \
            zip \
            bcmath \
            mbstring \
            sodium \
            opcache
    
    # Instalacija Composer-a
    COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
    
    # Set radnog foldera
    WORKDIR /app
    
    # Kopiranje Laravel projekta
    COPY . .
    
    # Instalacija PHP dependencija
    RUN composer install \
        --optimize-autoloader \
        --no-dev \
        --no-interaction
    
    # Podešavanje permisija za Laravel storage i cache
    RUN chmod -R 775 storage bootstrap/cache
    
    # Eksponovanje porta
    EXPOSE 8000
    
    # Start Laravel servera
    CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]