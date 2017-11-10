FROM php:7.0-apache

LABEL maintainer="Soufian, Louis, Sylvain, Pierre <saittirite@myges.fr>"

RUN apt-get update \
 && docker-php-ext-install pdo pdo_mysql
RUN rm -rf /tmp/* /var/cache/apt/* 
