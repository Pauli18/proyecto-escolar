<?php
class conex{
    public static function conectar(): PDO{
    define( 'servidor',   'localhost');
    define( 'nombre', 'fulldrive' );
    define( 'usuario', 'root' );
    define( 'password', '' );
    $opciones = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
    try{ $conexion = new PDO( 'mysql:host=' . servidor . ';dbname=' . nombre, usuario, password, $opciones );
        return $conexion;
    }
    catch (PDOException $e){die('Error de conexión: ' . $e->getMessage());}
}   
}

