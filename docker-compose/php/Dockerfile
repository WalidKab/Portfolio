FROM devilbox/php-fpm:8.0-mods

# Install system dependencies
RUN apt-get update && apt-get install -y \
    zip \
    vim \
    unzip \
    git \
    curl \
    nano

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www
