<?php

class BD{

    private static $instancia=NULL;

    public static function crearInstancia(){

        if(!isset(self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
            //Creamos la instancia de la conexión
            self::$instancia = new PDO('mysql:host=localhost:3306;dbname=jugadores','root','',$opcionesPDO);
           
        }
        return self::$instancia;
    }
}


?>