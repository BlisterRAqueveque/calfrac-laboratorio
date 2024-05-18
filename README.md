# Proyecto Laboratorio - Calfrac
En este repositorio se desarrolla un sistema para la compañía Calfrac que utiliza la tecnología Laravel v9, Vite y TaildwindCSS; PHP v8.0.30 (Laragon)

---------

## Índice
- [Introducción y lógica del Sistema](#introducción-y-lógica-del-sistema)
- [Guía de Instalación](#guía-de-instalación)

-------------

## Introducción y lógica del Sistema
Son formularios denominados "Solicitudes" donde al momento de realizar uno requiere de diferentes datos específicos. Estos formularios, se solicitan para poder realizar cementaciones que ingresan en el pozo, y necesitan características como el tipo de lodo, la densidad, temperatura, etc.

Hasta el momento, el cliente necesita que se realicen tres tipos de Solicitudes => Solicitud de Fractura, Solicitud de Lechada y por último la Solicitud de Lodo. Estos dos últimos, se engloban en "Solicitudes de Cementación".

Estas solicitudes, luego de cargarse en el sistema, se les debe asignar un Ensayo, salvo a la "Solicitud de Fractura".
Un Ensayo, basicamente es un formulario donde van cargando los diferentes resultados que se están generando en el laboratorio en base a la solicitud previamente cargada.
Una vez que se completa el Ensayo, se genera un reporte, y la Solicitud queda finalizada con su Ensayo correspondiente.


## Guía de Instalación
- (1) La primera vez que se clona el repositorio, se debe de ejecutar los siguientes comandos en la consola (Siempre dentro de la carpeta).

    composer install

    npm install


- (2) Correr XAMPP o Laragon, depende el apache que tengan.

- (3) Cuando se instalen las dependencias necesarias, se debe generar la migración de la base de datos. El siguiente comando se ejecutará en la terminal.

    php artisan migrate

- (4) La base de datos desde un inicio está vacía, para ello, se requiere tener copia de la base de datos de producción o solicitarlo a algún compañero que esté trabajando con este sistema.

Las tablas más importantes que se deben agregar antes de utilizar el sistema, son las siguientes:

    - grupos
    - permisos
    - users
    - rel_permisos_user

El sistema iniciará correctamente, pero si se desea realizar cargas de solicitudes o ensayos, se necesita agregar los datos de la tabla clientes, yacimientos, etc.

- (5) Iniciar el proyecto

    php artisan serve

    npm run dev
