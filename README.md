# curso-introduccion-php
# Sintaxis de php
    <?php 
        codigo;
    ?>

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor está configurado a solo interpretar archivos PHP. Solo las partes dentro de <?php ?> van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un ; (punto y coma).

# Comentarios

     /**
        * Comentarios de varias  
        * líneas para
        * palabra
        */

# Composer
Un gestor de dependencias a través del cual puedes descargar librerias de toda la comunidad PHP

https://getcomposer.org/

https://packagist.org/

Iniciar un proyecto
> composer init 

# Composer/Autoload
El autoload contiene:
* files.- Cargar archivos con helpers.
* classmap.- Cargamos carpetas con algunas clases.
* psr-0.- Se tiene que poner todas las rutas de las carpetas.
* psr-4(recomendado).- Se hace énfasis solo a la carpeta principal.


# Comandos de Composer

//Si tienes el paquete agregado a tu composer.json

    composer install

//si no lo tienes configurado en tu json

    composer require phpunit/phpunit

//Si deseas removerlo

    composer remove phpunit/phpunit

//para agregar composer a tu proyecto

    composer dump
