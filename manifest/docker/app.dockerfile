FROM php:8.0-fpm

# Install composer
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
