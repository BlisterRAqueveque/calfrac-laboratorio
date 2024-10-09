# Proyecto Laboratorio - Calfrac

En este repositorio se desarrolla un sistema para la compañía Calfrac que utiliza la tecnología Laravel v9, Vite y TailwindCSS; PHP v8.0.30 (Laragon)

<div>
    <img src="./public/img/laravel-logo.svg" width="35" />
    <img src="./public/img/tailwind-logo.png" width="60" />
    <img src="./public/img/php-logo.png" width="60"/>
</div>

---

## Dependencias utilizadas

A continuación se detallan las dependencias clave utilizadas en el proyecto, junto con su versión, instalación y funcionalidad:

| **Librería**                       | **Versión** | **Instalación**                         | **Funcionalidad**                                                                          |
| ---------------------------------- | ----------- | --------------------------------------- | ------------------------------------------------------------------------------------------ |
| **ApexCharts**                     | ^3.53.0     | `npm install apexcharts`                | Gráficos interactivos y personalizables.                                                   |
| **Chart.js**                       | ^4.4.4      | `npm install chart.js`                  | Gráficos simples y responsivos con varias opciones de visualización.                       |
| **chartjs-plugin-datalabels**      | ^2.2.0      | `npm install chartjs-plugin-datalabels` | Plugin para mostrar etiquetas dentro de los gráficos de Chart.js.                          |
| **DataTables (datatables.net-dt)** | ^2.1.2      | `npm install datatables.net-dt`         | Crear tablas dinámicas e interactivas con paginación, búsqueda y ordenación.               |
| **dom-to-image-more**              | ^3.4.3      | `npm install dom-to-image-more`         | Convierte nodos DOM en imágenes, con soporte para nodos SVG y características adicionales. |
| **ECharts**                        | ^5.5.1      | `npm install echarts`                   | Gráficos altamente personalizables con grandes volúmenes de datos.                         |
| **html-to-image**                  | ^1.11.11    | `npm install html-to-image`             | Convierte HTML en imágenes (PNG, JPEG, SVG).                                               |
| **html2canvas**                    | ^1.4.1      | `npm install html2canvas`               | Captura capturas de pantalla de páginas web y exporta a imágenes.                          |
| **SweetAlert2**                    | ^11.10.6    | `npm install sweetalert2`               | Muestra alertas emergentes con un diseño moderno y personalizable.                         |
| **Virtual Select Plugin**          | ^1.0.42     | `npm install virtual-select-plugin`     | Selectores de opción múltiples con mejor rendimiento para grandes conjuntos de datos.      |
| **Tailwind CSS**                   | ^3.4.1      | `npm install -D tailwindcss`            | Framework de CSS utilitario para el diseño rápido de interfaces responsivas.               |

## Índice

- [Introducción y lógica del Sistema](#introducción-y-lógica-del-sistema)
- [Guía de Instalación](#guía-de-instalación)

---

## Introducción y lógica del Sistema

Son formularios denominados "Solicitudes" donde al momento de realizar uno requiere de diferentes datos específicos. Estos formularios, se solicitan para poder realizar cementaciones que ingresan en el pozo, y necesitan características como el tipo de lodo, la densidad, temperatura, etc.

Hasta el momento, el cliente necesita que se realicen tres tipos de Solicitudes => Solicitud de Fractura, Solicitud de Lechada y por último la Solicitud de Lodo. Estos dos últimos, se engloban en "Solicitudes de Cementación".

Estas solicitudes, luego de cargarse en el sistema, se les debe asignar un Ensayo, salvo a la "Solicitud de Fractura".
Un Ensayo, basicamente es un formulario donde van cargando los diferentes resultados que se están generando en el laboratorio en base a la solicitud previamente cargada.
Una vez que se completa el Ensayo, se genera un reporte, y la Solicitud queda finalizada con su Ensayo correspondiente.

## Guía de Instalación

- Clonar el repositorio

```bash
git clone https://github.com/BlisterRAqueveque/calfrac-laboratorio.git
```

- La primera vez que se clona el repositorio, se debe de ejecutar los siguientes comandos en la consola (Siempre dentro de la carpeta).

```
 composer install
```

```
npm install
```

- Correr XAMPP o Laragon, depende el apache que tengan.

- (3) Cuando se instalen las dependencias necesarias, se debe generar la migración de la base de datos. El siguiente comando se ejecutará en la terminal.

```
php artisan migrate
```

- La base de datos desde un inicio está vacía, para ello, se requiere tener copia de la base de datos de producción o solicitarlo a algún compañero que esté trabajando con este sistema.

Las tablas más importantes que se deben agregar antes de utilizar el sistema, son las siguientes:

    - grupos
    - permisos
    - users
    - rel_permisos_user

El sistema iniciará correctamente, pero si se desea realizar cargas de solicitudes o ensayos, se necesita agregar los datos de la tabla clientes, yacimientos, etc.

- Iniciar el proyecto

```
php artisan serve
```

```
npm run dev
```

## De local a producción

- Cambiar, en el .env, la variable APP_ENV

  - Trabajar en un ambiente local

  ```bash
  APP_ENV=local
  ```

  - Tirar a producción

  ```bash
  APP_ENV=production
  # Adicional:
  APP_URL=https://requestUri$
  ```

## Build producción

### 1. Crear las variables de entorno

### 2. Clonar el proyecto en el ambiente donde será desplegado

### 3. En la raíz del proyecto:

```bash
docker compose up --build
```

### 4. El proyecto se va a levantar en local, puerto 81:

[http://localhost:81](http://localhost:81/)

### 5. En la primera instancia, importar el DUMP de la base de datos:

- Primero localizamos el contenedor de la base de datos:

```bash
docker ps
```

- Vamos a ver algo como lo siguiente:
  | **CONTAINER ID** | **IMAGE** | **COMMAND** | **CREATED** | **STATUS** | **PORTS** | **NAMES** |
  |------------------|------------------------------|-----------------------------|---------------------|---------------|--------------------------------------------------------------------------|-------------------------------------|
  | 782ed6e92849 | calfrac-laboratorio-app | "docker-php-entrypoint…" | About an hour ago | Up 6 seconds | 8000/tcp, 9000/tcp | calfrac-laboratorio-app-1 |
  | 8b8616bdcca5 | mysql:8.0.39 | "docker-entrypoint.s…" | About an hour ago | Up 8 seconds | 3306/tcp, 33060/tcp | calfrac-laboratorio-db-1 |
  | 0f140416f1b8 | nginx:alpine | "/docker-entrypoint.…" | 17 hours ago | Up 5 seconds | 0.0.0.0:81->80/tcp, [::]:81->80/tcp, 0.0.0.0:444->443/tcp, [::]:444->443/tcp | calfrac-laboratorio-server-1 |
- El contenedor sobre el que tenemos que exportar el DUMP es de MySql, con ID 8b8616bdcca5 (el ID cambia cada vez que se genera un contenedor nuevo).
- Donde tengamos el dump.sql, corremos el siguiente comando:

```bash
docker cp ./dump.sql <mysql_container_id>:/dump.sql
# La sintaxis es [docker_host]:[local_host]
```

- Luego, nos metemos en la consola del docker, para comenzar a volcar la base de datos:

```bash
docker exec -it <mysql_container_id> bash
```

- Dentro del contenedor, entrar a mysql:

```bash
mysql -u root -p [password_from_.env]
# Recordar que la contraseña es la misma que está especificada en el .env del proyecto
```

- Por ultimo, volcar el DUMP

```bash
source /dump.sql
# Recordar que es el nombre del file
```

---
<div style="text-align: center;">
    <h1>Para desplegar este sistema, usamos Docker.</h1>
    <img src="./public/img/docker-logo.png" alt="Docker Logo" />
</div>

## Instalar docker desktop:
[Guía instalación Windows](https://docs.docker.com/desktop/install/windows-install/)

Guía instalación distro Linux: [Ubuntu](https://docs.docker.com/desktop/install/linux/ubuntu/) | [Debian](https://docs.docker.com/desktop/install/linux/debian/) | [Fedora](https://docs.docker.com/desktop/install/linux/fedora/) | [Arch](https://docs.docker.com/desktop/install/linux/archlinux/)

## Algunos comandos utiles son:

```bash
# Levanta el contenedor, flag d para detachar la instancia
docker-compose up -d

# Buildear la app desde 0
docker-compose up -build

# Bajar el contenedor
docker-compose down

# Elimina contenedores detenidos
docker container prune

# Elimina imagenes no utilizadas
docker image prune

# Elimina recursos no utilizados
docker system prune

# Ver los contenedores levantados
docker ps

# Ver todos los contenedores (los detenidos también)
docker ps -a

# Detener un contenedor específico
docker stop <container_id>
```
