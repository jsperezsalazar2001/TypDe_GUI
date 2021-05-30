FROM ubuntu:16.04

RUN apt-get update && \
  apt-get install -y software-properties-common && \
  add-apt-repository ppa:deadsnakes/ppa
RUN apt-get update

RUN apt-get install -y build-essential python3 python3-dev python3-pip python3-venv
RUN apt-get install -y git

# update pip
RUN python3 -m pip install pip --upgrade
RUN python3 -m pip install wheel
RUN python3 -m pip install numpy
RUN python3 -m pip install simpy

FROM php:7.2-apache-stretch
RUN apt-get update -y && \
    apt-get install -y openssl zip unzip git
RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html
COPY ./public/.htaccess /var/www/html/.htaccess
WORKDIR /var/www/html
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

RUN php artisan key:generate
RUN chmod -R 777 storage
RUN chmod -R 777 public/python
RUN a2enmod rewrite
RUN service apache2 restart