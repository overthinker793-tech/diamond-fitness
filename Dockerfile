# PHP runtime with Apache web server
FROM php:8.3-apache

# Install PHP extensions for MySQL access and enable Apache URL rewriting
RUN docker-php-ext-install mysqli pdo_mysql \
    && a2enmod rewrite

WORKDIR /var/www/html
COPY . /var/www/html/

# Keep the source owned by Apache's default web user
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
