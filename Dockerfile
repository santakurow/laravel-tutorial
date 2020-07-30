FROM php:7.4.8-fpm-alpine
WORKDIR /var/www/html
RUN docker-php-ext-install bcmath pdo pdo_mysql