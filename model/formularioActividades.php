<?php 

class formularioActividades_model{

    private $dbConnect; //Variable que va a almacenar la conexion a la base de datos
    private $formularioActividades; //Array el cual va a almacenar todos los elementos obtenidos de la consulta de sql
    function __construct(){
        require_once("../../../model/conexion.php");
        $this ->dbConnect =ConectarDB::conexion(); //Esta variable llamada dbConnect va a ser igual a la clase, y posteriormente llamara a la funcion estatica Conexion
        $this ->formularioActividades = array(); //Variable utilizada como array para almacenar los datos entrantes de la consuta de sql
    }

    function getformularioActividades(){ 
        $consulta = "SELECT * FROM `persona`";
        $query = mysqli_query($this->dbConnect,$consulta);
        while($fila = $query->fetch_assoc()){
            $this->formularioActividades[] = $fila;
        }
        return $this->formularioActividades;
    }
}

?>