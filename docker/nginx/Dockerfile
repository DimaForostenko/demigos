# Use the official Nginx image as the base image
FROM nginx:1.23.2-alpine

# Copy the default.conf from the current directory to /etc/nginx/conf.d/
COPY default.conf /etc/nginx/conf.d/

# Update packages and install bash
RUN apk update && apk upgrade && apk add --no-cache bash

# Set upstream conf and remove the default conf
ARG PHP_UPSTREAM_CONTAINER=php
ARG PHP_UPSTREAM_PORT=9000
RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/upstream.conf

# Expose port 80
EXPOSE 80
