<?php
require_once(__DIR__ . "/../model/formularioActividades.php");
$formularioActividad = new formularioActividades_model();

$listaActividades = $formularioActividad->getformularioActividades();
$listaActividades = $formularioActividad->getMonetizaciones();

$formularioActividades = $formularioActividad->getFormularioActividades();
/*
// Obtener las opciones de monetización desde la base de datos
$monetizaciones = $formularioActividad->getMonetizaciones();
var_dump($monetizaciones); // Depuración
>>>>>>> d079a8c38f4bb80282792be12de0e3c47f62c0ee




/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $tipoActividad = isset($_POST['nombre_actividad']) ? $_POST['nombre_actividad'] : null;
    $codigoTipodeMonetizacion = isset($_POST['tipR']) ? $_POST['tipR'] : null;

    // Verifica que los campos no estén vacíos
    if (!empty($tipoActividad) && !empty($codigoTipodeMonetizacion)) {
        try {
            // Llama al método para crear la actividad en el modelo
            $resultado = $formularioActividad->crearActividad($tipoActividad, $codigoTipodeMonetizacion);
            if ($resultado) {
                echo "Actividad creada con éxito.";
            }
        } catch (Exception $e) {
            echo "Error al crear la actividad: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}*/