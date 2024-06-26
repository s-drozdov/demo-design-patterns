FROM php:8.3-fpm as base

# linux
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    wget \
    openssh-client \
    openssh-server \
    libaio1 \
    libldap2-dev \
    libzip-dev \
    libpq-dev \
    libssh2-1-dev \
    libpng-dev \
    libssh2-1 \
    libicu-dev \
    && service ssh start \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone \
    && ln -s /usr/local/bin/php /usr/bin/php

#extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip

ARG PUID
ARG PGID
ARG SSH_KEY

RUN groupmod -o -g $PGID www-data && \
    usermod -o -u $PUID -g www-data www-data && \
    usermod -md /home/www-data www-data

RUN mkdir -p /home/www-data/.composer \
    && mkdir -p /home/www-data/.ssh \
    && chown -R www-data:www-data /home/www-data

# SSH
RUN touch /home/www-data/.ssh/id_rsa
RUN echo "$SSH_KEY" | tr -d '\r' > /home/www-data/.ssh/id_rsa
RUN if [ ! -z "$SSH_KEY" ]; then \
  touch /home/www-data/.ssh/known_hosts \
;fi
RUN chown -R www-data:www-data /home/www-data/.ssh \
    && chmod 600 /home/www-data/.ssh/id_rsa

# Composer
COPY --from=composer/composer:latest-bin /composer /usr/local/bin/composer

USER www-data

ARG APP_NAME
WORKDIR /var/www/$APP_NAME

FROM base as dev
USER root
# xdedug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && rm -rf /tmp/pear

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

USER www-data
