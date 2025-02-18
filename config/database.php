<?php

require 'vendor/autoload.php';
require 'config/config.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

try {
    // Configuración de la base de datos (MySQL en este caso)
    $capsule->addConnection([
        'driver'    => 'mysql',  // O 'sqlite', 'pgsql', 'sqlsrv'
        'host'      => HOST,
        'database'  => DB_DATABASE,
        'username'  => DB_USER,
        'password'  => DB_PASS,
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    // Hacer accesible Eloquent de forma global
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
} catch (Exception $e) {
    die("Error de conexión: " . $e->getMessage());
}
