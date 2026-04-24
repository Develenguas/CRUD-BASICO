CRUD BASICO

Aplicacion web que implementa las operaciones fundamentales de un sistema CRUD (Create, Read, Update, Delete) utilizando PHP y MySQL. Este proyecto esta pensado como practica para entender la interaccion entre frontend, backend y base de datos.

Caracteristicas

Crear registros
Listar registros
Editar registros
Eliminar registros
Conexion a base de datos MySQL
Uso de formularios HTML y procesamiento con PHP

Tecnologias utilizadas

PHP
MySQL
HTML5
CSS (opcional)
XAMPP / WAMP / Laragon

Estructura del proyecto

CRUD-BASICO/
conexion.php
index.php
agregar.php
editar.php
eliminar.php
database.sql

Instalacion y uso

Clonar el repositorio
git clone https://github.com/Develenguas/CRUD-BASICO.git
Mover el proyecto
Colocar la carpeta en htdocs (XAMPP) o www (WAMP)
Crear la base de datos
Abrir phpMyAdmin e importar el archivo database.sql
Configurar conexion
Editar conexion.php con los datos:
$host = "localhost";
$user = "root";
$password = "";
$db = "nombre_db";
Ejecutar en el navegador
http://localhost/CRUD-BASICO

Objetivo del proyecto

Este proyecto sirve como base para entender el funcionamiento de un CRUD en aplicaciones web, practicar el manejo de formularios con PHP y trabajar con bases de datos MySQL.

Posibles mejoras

Validacion de datos
Uso de prepared statements (PDO o MySQLi)
Integracion con Bootstrap
Busqueda y paginacion
Sistema de login con sesiones

Autor

Salvador Luengas
https://github.com/Develenguas

Licencia

Uso libre para fines educativos