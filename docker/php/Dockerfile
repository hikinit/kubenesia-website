FROM php:7.2-fpm-alpine
LABEL maintainer="saya@rifqi.id"

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
COPY --from=composer:2 /usr/bin/composer /usr/bin/

# CodeIgniter PHP extensions
RUN install-php-extensions intl
