FROM php:apache

RUN docker-php-ext-install mysqli

EXPOSE 80