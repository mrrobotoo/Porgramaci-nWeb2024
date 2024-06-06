<?php 
class BD{
    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia) ){

            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=172.16.10.187;dbname=aplicacioncrud', 'root', '', $opciones);
            echo "CONECTADO..";

        }

        return self::$instancia;
    }
}
?>