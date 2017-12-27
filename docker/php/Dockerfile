FROM php:7.1-fpm
MAINTAINER crazy.beard <info@crazybeard.ru>
RUN apt-get update && apt-get install -y \
      curl \
      wget \
      git \
      mc \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libmcrypt-dev \
      libpng12-dev \
      && docker-php-ext-install -j$(nproc) iconv mcrypt mbstring pdo_mysql zip \
      && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
      && docker-php-ext-install -j$(nproc) gd
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && cd /root \
    && git clone https://github.com/crazy-beard/Gitify.git Gitify \
    && cd Gitify \
    && composer install \
    && chmod +x Gitify \
    && cd /usr/bin \
    && echo '#!/bin/sh' > Gitify \
    && echo '/root/Gitify/Gitify $1 $2 $3 $4' >> Gitify \
    && chmod +x Gitify
WORKDIR /var/www
CMD ["php-fpm"]
