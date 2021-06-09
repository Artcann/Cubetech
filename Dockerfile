FROM php:7.4.9-apache

COPY . /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html && a2enmod rewrite