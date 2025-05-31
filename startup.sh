#!/bin/bash

echo "Startup ejecutado correctamente" > /home/site/wwwroot/public/debug.txt

cd /home/site/wwwroot

if [ ! -d "vendor" ]; then
  composer install --no-dev --prefer-dist --optimize-autoloader
fi

if grep -q "^APP_KEY=$" .env; then
  php artisan key:generate
fi

php artisan config:clear
php artisan route:clear

cd public
php -S 0.0.0.0:8080 index.php
