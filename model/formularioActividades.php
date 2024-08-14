<?php

class formularioActividades_model
{

    private $dbConnect;
    private $formularioActividades;
    private $listActividades;

    function __construct()
    {
        require_once ("conexion.php");
        $this->dbConnect = ConectarDB::conexion();
        $this->formularioActividades = array();
    }

    function getformularioActividades()
    {
        $this->formularioActividades = [];
        $consulta = "SELECT actividades.tipoActividad, actividades.codigoTipodeMonetizacion, tipodemonetizacion.TipodeMonetizacion
                     FROM `actividades`
                     INNER JOIN `tipodemonetizacion`
                     ON tipodemonetizacion.codigoTipodeMonetizacion = actividades.codigoTipodeMonetizacion";
        $query = mysqli_query($this->dbConnect, $consulta);
        while ($fila = $query->fetch_assoc()) {
            // Convertir el tipo de actividad a mayúsculas
            $fila['tipoActividad'] = strtoupper($fila['tipoActividad']);
            $this->formularioActividades[] = $fila;
        }
        return $this->formularioActividades;
    }


    public function actividadExiste($tipoActividad)
    {
        $query = "SELECT COUNT(*) as count FROM `actividades` WHERE LOWER(`tipoActividad`) = LOWER(?)";
        $stmt = $this->dbConnect->prepare($query);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->dbConnect->error);
        }

        $stmt->bind_param("s", $tipoActividad);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row['count'] > 0;
    }

    // Método para crear una nueva actividad
    public function crearActividad($tipoActividad, $codigoTipodeMonetizacion)
    {
        // Convertir el nombre de la actividad a mayúsculas
        $tipoActividad = strtoupper($tipoActividad);

        // Verificar que $tipoActividad no contiene números ni signos
        if (preg_match('/[^A-Z\s]/', $tipoActividad)) {
            throw new Exception("El nombre de la actividad solo puede contener letras y espacios.");
        }

        // Ajuste en el nombre de las columnas en la consulta
        $query = "INSERT INTO `actividades` (`tipoActividad`, `codigoTipodeMonetizacion`) VALUES (?, ?)";
        $stmt = $this->dbConnect->prepare($query);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->dbConnect->error);
        }

        // Verifica que $codigoTipodeMonetizacion es un entero
        $codigoTipodeMonetizacion = (int) $codigoTipodeMonetizacion;

        // El primer parámetro es el tipo de actividad (cadena) y el segundo es el código de monetización (entero)
        $stmt->bind_param("si", $tipoActividad, $codigoTipodeMonetizacion);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Error al crear la actividad: " . $stmt->error);
        }
    }



    public function getMonetizaciones()
    {
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

    public function validarMonetizacion($codigoTipodeMonetizacion)
    {
        $consulta = "SELECT COUNT(*) as count FROM `tipodemonetizacion` WHERE `codigoTipodeMonetizacion` = ?";
        $stmt = $this->dbConnect->prepare($consulta);
        $stmt->bind_param("i", $codigoTipodeMonetizacion);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row['count'] > 0;
    }

    public function eliminarActividad($tipoActividad)
    {
        // Convertir el nombre de la actividad a mayúsculas
        $tipoActividad = strtoupper($tipoActividad);

        $existe = $this->actividadExiste($tipoActividad);
        if (!$existe) {

            return "La actividad no existe!";

        }

        // Ajuste en el nombre de las columnas en la consulta
        $query = "DELETE FROM `actividades` WHERE `tipoActividad` = ?";
        $stmt = $this->dbConnect->prepare($query);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->dbConnect->error);
        }

        $stmt->bind_param("s", $tipoActividad);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Error al eliminar la actividad: " . $stmt->error);
        }
    }

    public function actualizarActividad($tipoActividadAntiguo, $tipoActividadNuevo, $codigoTipodeMonetizacion)
    {
        // Convertir los nombres de las actividades a mayúsculas
        $tipoActividadAntiguo = strtoupper($tipoActividadAntiguo);
        $tipoActividadNuevo = strtoupper($tipoActividadNuevo);

        // Verifica que la actividad antigua existe antes de actualizar
        $existe = $this->actividadExiste($tipoActividadAntiguo);
        if (!$existe) {
            throw new Exception("La actividad antigua no existe. No se puede actualizar.");
        }

        // Ajuste en el nombre de las columnas en la consulta
        $query = "UPDATE `actividades` SET `tipoActividad` = ?, `codigoTipodeMonetizacion` = ? WHERE `tipoActividad` = ?";
        $stmt = $this->dbConnect->prepare($query);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->dbConnect->error);
        }

        // Verifica que $codigoTipodeMonetizacion es un entero
        $codigoTipodeMonetizacion = (int) $codigoTipodeMonetizacion;

        // El primer parámetro es el nuevo tipo de actividad (cadena), el segundo es el código de monetización (entero) y el tercero es el tipo de actividad antiguo (cadena)
        $stmt->bind_param("sis", $tipoActividadNuevo, $codigoTipodeMonetizacion, $tipoActividadAntiguo);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Error al actualizar la actividad: " . $stmt->error);
        }
    }



}


?>