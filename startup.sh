#!/bin/bash

echo "🔧 Iniciando script de arranque personalizado de Laravel..."

# Ir al directorio de la app
cd /home/site/wwwroot

# Instalar dependencias si no existe la carpeta vendor/
if [ ! -d "vendor" ]; then
  echo "📦 Ejecutando composer install..."
  composer install --no-dev --prefer-dist --optimize-autoloader
else
  echo "📦 Dependencias ya instaladas."
fi

# Asegurar que se haya generado APP_KEY
if grep -q "^APP_KEY=$" .env; then
  echo "⚠️ APP_KEY no está configurado. Generando clave..."
  php artisan key:generate
else
  echo "✅ APP_KEY ya presente en .env"
fi

# Limpiar y cachear configuración y rutas
php artisan config:clear
php artisan route:clear

# Cambiar a carpeta public y lanzar el servidor embebido en puerto 8080
cd public
echo "🚀 Lanzando servidor PHP desde /public en el puerto 8080..."
php -S 0.0.0.0:8080 index.php
