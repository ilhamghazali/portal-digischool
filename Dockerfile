FROM telkomindonesia/alpine:php-7.1-nginx-novol
MAINTAINER Rifqie Fahmi Ilman <rifqie.fahmi@gmail.com>

WORKDIR /var/www/data/html

USER root

COPY .docker/php.ini /usr/local/docker/etc/php7/php.ini
COPY .docker/default.conf /usr/local/docker/etc/nginx/conf.d/default.conf

USER user

COPY . .
