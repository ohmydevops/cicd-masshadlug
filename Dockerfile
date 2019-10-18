FROM php:7.3-fpm-alpine

RUN apk add --update --no-cache \
    curl \
    && curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer 

RUN mkdir /cicd-project

COPY ./ /cicd-project

WORKDIR /cicd-project

RUN composer install

RUN cp .env.example .env

RUN php artisan key:generate

EXPOSE 8000

CMD ["/usr/local/bin/php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]