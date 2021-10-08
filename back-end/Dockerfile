FROM php:7.2-apache as chatlead_api

COPY ./apache/php.ini /usr/local/etc/php/php.ini
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./ /var/www/html/


RUN apt-get -y update
RUN curl -L -C - --progress-bar -o /usr/local/bin/composer https://getcomposer.org/composer.phar
RUN chmod 755 /usr/local/bin/composer

#install some base extensions
RUN apt-get update && apt-get upgrade -y && apt-get install -y zlib1g-dev
RUN docker-php-ext-install zip

RUN apt-get update && \
    docker-php-ext-install pdo_mysql mysqli && \
    apt-get -qq -y install curl
RUN pecl install xdebug-2.9.6 && docker-php-ext-enable xdebug
RUN a2enmod rewrite
VOLUME /var/www/html/
WORKDIR /var/www/html/
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]