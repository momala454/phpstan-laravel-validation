FROM php:8.3-cli-alpine

RUN apk add --no-cache --update git unzip bash $PHPIZE_DEPS \
    && pecl install uopz \
    && docker-php-ext-enable uopz \
    && apk del $PHPIZE_DEPS

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions \
    && install-php-extensions intl bcmath pdo_mysql gmp ftp

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /app
