# Catalog App (Laravel) - Rutas y controladores para CRUD

## Descripción
Aplicación en Laravel para gestionar un catálogo de **Productos** (CRUD completo: Crear, Leer, Actualizar, Eliminar) usando Eloquent ORM, migraciones, vistas Blade y control de versiones en GitHub.

## Requisitos previos
- PHP >= 8.1
- Composer
- MySQL / MariaDB (o SQLite)
- Laravel 12 (probada en Laravel 12)
- Git

## Instalación (local)
1. Clona el repositorio:
   ```bash
   git clone https://github.com/TU_USUARIO/catalog-app.git
   cd catalog-app

## Instalar dependencias 
-composer install

## Ejecuta migraciones y seeders
-php artisan migrate
-php artisan db:seed --class=ProductSeeder

## Crear storage link para subir imágenes:
-php artisan storage:link

## Levantar el servidor local 
-php artisan serve

## Uso
-Accede a /products para ver el listado.
-Crear, editar y eliminar productos desde la UI.
