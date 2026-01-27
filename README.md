<h1 align="center">API RESTFUL - Bestiario de rol clásico</h1>

## Descripción
Esta API RESTful es una práctica de Laravel 12 para la asignatura de PHP/DAW. Permite gestionar un bestiario de criaturas del rol clásico con operaciones CRUD (crear, leer, actualizar y eliminar criaturas) y autenticación mediante ``Laravel Sanctum (token based)``.

## Tecnologías usadas
<table align="center">
<tr>
<td align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" width="160" height="160" />
  <br>
  <strong>Laravel 12</strong>
</td>
<td align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original.svg" width="160" height="160" />
  <br>
  <strong>Postman</strong>
</td>
</tr>
</table>

## Requisitos previos
1. Servidor Apache
2. Php versión ``8.3 o superior``
3. MySQL versión ``8.0``

## Instalación
1. Clone el repositorio:
   ```bash
   git clone https://github.com/cjag99/bestiaryAPI.git
   ```
2. Instale dependencias:
   ```bash
   composer install
   ```
3. Crea el fichero ``.env`` con el siguiente comando:
   ```bash
   cp .env.example .env
   ```
5. Cambie las variables de entorno de conexión a base de datos del fichero ``.env`` siguiendo los ejemplos de ``.env.example``:
   ```.env
   DB_CONNECTION=mysql
   DB_HOST=your_host
   DB_PORT=your_port
   DB_DATABASE=your_database
   DB_USERNAME=your_usernamme
   DB_PASSWORD=your_password
   ```
