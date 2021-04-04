FROM php:8.0.3-apache

CMD ["apt-get update && apt-get install vim -y"]

COPY php/ /var/www/html
