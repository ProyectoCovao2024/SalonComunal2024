<?php 

class Provincias_model{
    private $dbConnect;
    private $provincias;

    function __construct(){
        require_once("../../../model/conexion.php");
        $this ->dbConnect =ConectarDB::conexion();
        $this ->provincia = array();
    }

    function getProvincias(){
        $consulta = "SELECT `codigoProvincia`, `nombreProvincia` FROM `provincia` ";
        $query = mysqli_query($this->dbConnect,$consulta);
        while($fila = $query->fetch_assoc()){
            $this->provincias[] = $fila;
        }
        return $this->provincias;
    }

}

?>