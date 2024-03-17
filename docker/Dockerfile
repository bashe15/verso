FROM php:8.2-apache

# Copy virtual host configuration into container
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable rewrite mode for Apache
RUN a2enmod rewrite

# Install necessary packages and PHP extensions
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        wget \
        git \
        unzip \
        autoconf \
        make \
        gcc \
        pkg-config \
        libssl-dev \
    && docker-php-ext-install zip pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis

# Copy the Composer installation script
COPY ./install-composer.sh ./

# Cleanup packages and install Composer
RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/* \
    && sh ./install-composer.sh \
    && rm ./install-composer.sh

# Set Composer environment variable
ENV COMPOSER_ALLOW_SUPERUSER 1

# Change the working directory
WORKDIR /var/www

# Change the owner and permissions of the container document root
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Start Apache in the foreground
CMD ["apache2-foreground"]
