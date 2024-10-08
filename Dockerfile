# Step 1 | Usamos una imagen de PHP con FPM (FastCGI Process Manager)
FROM php:8.2-fpm

# Instalar dependencias necesarias para PHP, como extensiones y herramientas para compilar otras dependencias
# Herramientas para compilar dependencias
# Para la manipulación de imágenes PNG
# Para la manipulación de imágenes JPEG
# Para trabajar con fuentes FreeType
# Necesario para trabajar con regex en PHP
# Para trabajar con archivos ZIP
# Herramienta para comprimir/descomprimir
# Herramienta para descomprimir
# Herramienta de control de versiones
# Herramienta para realizar solicitudes HTTP
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

# Instalar Node.js y npm (gestor de paquetes de Node.js)
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar extensiones de PHP necesarias para trabajar con bases de datos y otras funciones
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer, el gestor de dependencias de PHP
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

# Dirección donde vamos a trabajar (puedes quitar el WORKDIR si prefieres que se copie todo en la raíz del contenedor)
# Si no configuras WORKDIR, los archivos se copiarán directamente en la raíz del contenedor (en /)
WORKDIR /var/www/

# Copiar todo el contenido del contexto de construcción (directorio local) al directorio raíz del contenedor
# Aquí copiamos el contenido de la carpeta donde está el Dockerfile al directorio raíz (/) del contenedor
COPY . /var/www/

# Instalamos dependencias de Composer (para PHP)
RUN composer install

# Instalamos dependencias de Node.js con npm
RUN npm ci

# Cambiar permisos de directorios necesarios (por ejemplo, para storage y cache en aplicaciones Laravel)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Compilamos la aplicación (si es necesario, dependiendo de tu aplicación)
# RUN npm run build

COPY wait-for-it.sh /usr/local/bin/wait-for-it.sh
RUN chmod +x /usr/local/bin/wait-for-it.sh

# Exponemos el puerto 8000, el cual es usado por PHP-FPM
EXPOSE 8000

# Comando que arranca PHP-FPM, el cual es un servidor FastCGI para PHP
CMD [ "php-fpm" ]
