FROM php:8.3-fpm

# Install dependencies (e.g., extensions for Laravel)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set working directory inside the container
WORKDIR /var/www/html

# Install Composer (PHP dependency manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy your Laravel application into the container
COPY . /var/www/html

# Ensure permissions
RUN chown -R www-data:www-data /var/www/html

# Set the appropriate permissions for storage and cache
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache
