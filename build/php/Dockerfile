FROM php:8.1-fpm

# Install dependencies
RUN apt-get update -y && apt-get upgrade -y && \
    apt-get install -y libsqlite3-dev && \
    docker-php-ext-install pdo pdo_sqlite

# Cpoy the application files
COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /usr/share/nginx/html