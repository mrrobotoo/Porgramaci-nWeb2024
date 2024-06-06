<?php 
class BD{
    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia) ){

            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacioncrud', 'root', '', $opciones);
            
            $server="localhost";
            $user="root";
            $pass="";
            $db="aplicacioncrud";

            $conexion = new mysqli($server, $user, $pass, $db);

            if($conexion->connect_errno){
                die("Conexion fallida".$conexion->connect_errno);
            }else{
                //echo "CONECTADO..";
            }
         

        }

        return self::$instancia;
    }
}
?>