<?php 

class ConectarDB{
    public static function conexion(){
        require("./datosBD.php");
        try{
            $conexion = mysqli_connect(HOST,USER,PASSWORD,DB);
            mysqli_select_db($conexion,DB) or die ("No se ha encontrado la base de datos");
            mysqli_set_charset($conexion,'utf8');

        }
        catch(Exception $e){
            die("Error".$e->getMessage());
        }

        return $conexion;
    }
}

?>