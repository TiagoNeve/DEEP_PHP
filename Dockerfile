FROM php:8.0.3-apache

RUN "apt-get update && apt-get install vim"

COPY php/ /var/www/html
