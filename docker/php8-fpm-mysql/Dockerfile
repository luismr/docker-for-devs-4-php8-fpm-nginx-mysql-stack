FROM php:8.0-fpm-alpine

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apk update && apk upgrade