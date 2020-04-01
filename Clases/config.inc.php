<?php

class Datos{
private static $nombreServidor = 'localhost';
private static $nombreUsuario = 'root';
private static $password='';
private static $NombreBD='tastywings';

static function getNombreServidor() {
    return self::$nombreServidor;
}

static function getNombreUsuario() {
    return self::$nombreUsuario;
}

static function getPassword() {
    return self::$password;
}

static function getNombreBD() {
    return self::$NombreBD;
}

}
