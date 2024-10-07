# Step 1 | Usamos una imagen de php
FROM php:8.2-fpm

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# Instalar Node.js y npm
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

# Dirección donde vamos a trabajar
WORKDIR /app

# Copiamos los archivos del proyecto
COPY . /app

# Instlamos dependencias de Composer
RUN composer install

# Instalamos dependencias de Node JS
RUN npm ci

# Cambiar permisos de storage y bootstrap/cache
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# Correr las migraciones
RUN php artisan migrate

# Build de la app
RUN npm run build

# Exponemos el puerto 8000
EXPOSE 8000

# Corremos el proyecto
CMD php artisan serve --host=0.0.0.0 --port=8000