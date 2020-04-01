<?php

class Conexion{
    
    private static $conexion;
    
    public static function AbrirConexion(){
        //Revisar si la conexion fue exitosa
        if(!isset(self::$conexion))
        {
            try{
                //Toma el codigo del archivo que mandamos llamar
                include_once 'config.inc.php'; 
                self::$conexion = new PDO("mysql:host=".Datos::getNombreServidor().";dbname=".Datos::getNombreBD().";",Datos::getNombreUsuario() , Datos::getPassword());
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion->exec("SET CHARACTER SET utf8");
            } catch (PDOException $ex) {
                print "Error: ".$ex->getMessage()."<br>";
                //termiar la conexion en cualquier tiempo de abrirla
                die();
            }
        }
    }
    
    public static function CerrarConexion()
    {
        //Revisamos si la conexion esta presente
        if(isset(self::$conexion))
        {
            //liberar la memoria destruyendo la conexion
            self::$conexion = null; 
        }
    }
    
    public static function getConexion() {
        return self::$conexion;
    }
}
