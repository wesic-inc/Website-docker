FROM php:7.0-apache

MAINTAINER Soufian, Louis, Sylvain, Pierre <saittirite@myges.fr>

RUN apt-get update \
 && docker-php-ext-install pdo pdo_mysql 

WORKDIR /var/www
