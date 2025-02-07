FROM php:7.4-fpm

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html
COPY site/ . 