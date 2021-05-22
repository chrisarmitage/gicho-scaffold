FROM php:8.0-fpm

# Install additional dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
