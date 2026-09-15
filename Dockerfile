FROM php:8.3-cli-alpine

RUN apk add --no-cache \
    git \
    unzip \
    icu-dev \
    postgresql-dev \
    libzip-dev \
    oniguruma-dev

RUN docker-php-ext-install \
    intl \
    pdo \
    pdo_pgsql \
    zip \
    opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN composer install \
    --no-interaction \
    --prefer-dist \
    --no-progress \
    --no-scripts

COPY . .

RUN mkdir -p var/cache var/log \
    && chown -R www-data:www-data var

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]