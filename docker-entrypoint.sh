#!/bin/sh
set -e

php /var/www/html/artisan migrate --force

exec php-fpm
