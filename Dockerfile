FROM mtakashimori/laravel:latest as web

COPY docker/php.ini /etc/php7/php.ini

EXPOSE 80