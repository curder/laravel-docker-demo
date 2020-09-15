FROM php:7.4-fpm-alpine

ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN mkdir -p /var/www/codes

RUN chown laravel:laravel /var/www/codes

WORKDIR /var/www/codes

RUN docker-php-ext-install pdo pdo_mysql
