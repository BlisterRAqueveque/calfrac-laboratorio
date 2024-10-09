#!/bin/bash

# Ejecutar migraciones
php artisan migrate

# Iniciar el servidor Laravel
php artisan serve --port=8000 &

# Iniciar php-fpm en primer plano
php-fpm -F