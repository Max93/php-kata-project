FROM php:7.1-fpm

ARG gd=0
ARG mysql=1

RUN mkdir -p /usr/local/bin

RUN apt-get update && apt-get install -y \
        libicu-dev \
    && docker-php-ext-install \
        intl \
        opcache \
    && docker-php-ext-enable \
        intl \
        opcache

# Install db extensions
RUN if [ "$mysql" -eq "1" ]; then \
        docker-php-ext-install pdo pdo_mysql \
    ;fi

# Install gd extensions
RUN if [ "$gd" -eq "1" ]; then \
        apt-get install -y \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            libpng12-dev \
        && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
        && docker-php-ext-install -j$(nproc) gd \
    ;fi


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install useful tools for composer
RUN apt-get install -y git unzip

WORKDIR /var/www/app
CMD ["php-fpm"]