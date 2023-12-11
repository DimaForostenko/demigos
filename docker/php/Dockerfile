FROM php:8.1.0-fpm-alpine


# Install packages
RUN apk add --no-cache curl git build-base zlib-dev oniguruma-dev autoconf bash 
RUN apk add --update linux-headers  


# Retrieve the script used to install PHP extensions from the source container.
COPY --from=mlocati/php-extension-installer:2.1.10 /usr/bin/install-php-extensions /usr/local/bin/


# mysql
RUN apk add --no-cache libpq-dev && docker-php-ext-install pdo pdo_mysql

RUN set -o errexit -o nounset -o pipefail -o xtrace; 
# Configure non-root user.
RUN apk --no-cache add shadow && \
    groupmod -o -g 1000 www-data && \
    usermod -o -u 1000 -g www-data www-data

USER "1000:1000"
# Sourse code
   
COPY ./ /var/www 
WORKDIR /var/www/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
 
EXPOSE 9000

CMD [ "php-fpm" ]