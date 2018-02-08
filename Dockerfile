FROM php:7.2.1-apache

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev

RUN docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd opcache pdo pdo_mysql

RUN a2enmod rewrite

RUN apt-get install -y nmap mysql-client dnsutils git iputils-ping

RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer

RUN apt-get install -y unzip

RUN curl https://drupalconsole.com/installer -L -o drupal.phar

RUN mv drupal.phar /usr/bin/drupal && chmod +x /usr/bin/drupal
