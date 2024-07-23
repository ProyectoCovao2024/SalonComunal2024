<?php 

class formularioActividades_model {

    private $dbConnect;

    function __construct(){
        require_once("conexion.php");
        $this->dbConnect = ConectarDB::conexion();
    }

    public function crearActividad($codigo, $nombre, $monetizacion) {
        $query = "INSERT INTO actividades (codigoActividad, nombreActividad, tipoActividad) VALUES (?, ?, ?)";

        $stmt = $this->dbConnect->prepare($query);
        $stmt->bind_param("sss", $codigo, $nombre, $monetizacion);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    function getformularioActividades(){ 
        $consulta = "SELECT * FROM actividades";
        $query = mysqli_query($this->dbConnect, $consulta);
        $formularioActividades = [];
        while ($fila = $query->fetch_assoc()) {
            $formularioActividades[] = $fila;
        }
        return $formularioActividades;
    }
}
?>
