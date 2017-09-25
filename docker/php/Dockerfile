FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    nano \
    wget \
    libmcrypt-dev \
    mysql-client \
    && docker-php-ext-install mcrypt pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

COPY .bash_aliases /root/.bash_aliases
COPY .bashrc /root/.bashrc

RUN usermod -u 1000 www-data

WORKDIR /var/www
