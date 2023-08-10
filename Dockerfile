FROM php:8.1.0-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add bash

WORKDIR /var/www
