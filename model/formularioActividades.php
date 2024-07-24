<?php

class formularioActividades_model {
    
    private $dbConnect;
    private $formularioActividades;
    private $listActividades;

    function __construct() {
        require_once("conexion.php");
        $this->dbConnect = ConectarDB::conexion();
        $this->formularioActividades = array();
    }

    function getformularioActividades() {
        $consulta = "SELECT actividades.codigoActividad, actividades.tipoActividad,actividades.codigoTipodeMonetizacion,tipodemonetizacion.TipodeMonetizacion
        FROM `actividades`
        inner join `tipodemonetizacion`
        ON tipodemonetizacion.codigoTipodeMonetizacion = actividades. codigoTipodeMonetizacion 
        ";
        $query = mysqli_query($this->dbConnect, $consulta);
        while ($fila = $query->fetch_assoc()) {
            $this->formularioActividades[] = $fila;
        }
        return $this->formularioActividades;
    }

    // Método para crear una nueva actividad
    public function crearActividad($tipoActividad, $codigoTipodeMonetizacion) {
        // Ajuste en el nombre de las columnas en la consulta
        $query = "INSERT INTO `actividades` (`tipoActividad`, `codigoTipodeMonetizacion`) VALUES (?, ?)";
        $stmt = $this->dbConnect->prepare($query);
    
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->dbConnect->error);
        }
    
        // Verifica que $codigoTipodeMonetizacion es un entero
        $codigoTipodeMonetizacion = (int)$codigoTipodeMonetizacion;
    
        // El primer parámetro es el tipo de actividad (cadena) y el segundo es el código de monetización (entero)
        $stmt->bind_param("si", $tipoActividad, $codigoTipodeMonetizacion);
    
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Error al crear la actividad: " . $stmt->error);
        }
    }
    
    

     public function getMonetizaciones() {
        $consulta = "SELECT * FROM `tipodemonetizacion`";
        $query = mysqli_query($this->dbConnect, $consulta);
        if (!$query) {
            die('Error en la consulta: ' . mysqli_error($this->dbConnect));
        }
        $this->listActividades = array();
        while ($fila = $query->fetch_assoc()) {
            $this->listActividades[] = $fila;
        }
        //var_dump($this->listActividades); // Depuración
        return $this->listActividades;
     }

    public function validarMonetizacion($codigoTipodeMonetizacion) {
        $consulta = "SELECT COUNT(*) as count FROM `tipodemonetizacion` WHERE `codigoTipodeMonetizacion` = ?";
        $stmt = $this->dbConnect->prepare($consulta);
        $stmt->bind_param("i", $codigoTipodeMonetizacion);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row['count'] > 0;
    }
}

?>
 