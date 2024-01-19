FROM php:7.4-fpm


# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip


# Install bc-math
RUN docker-php-ext-install bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Other PHP extensions can be installed here as needed
# Set working directory
WORKDIR /app