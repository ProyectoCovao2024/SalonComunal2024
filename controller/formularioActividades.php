<?php
require_once(__DIR__ . "/../model/formularioActividades.php");
$formularioActividad = new formularioActividades_model();

$listaActividades = $formularioActividad->getformularioActividades();
$listaActividades = $formularioActividad->getMonetizaciones();

$formularioActividades = $formularioActividad->getFormularioActividades();

// Verifica si la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $tipoActividad = isset($_POST['nombre_actividad']) ? $_POST['nombre_actividad'] : null;
    $codigoTipodeMonetizacion = isset($_POST['tipR']) ? $_POST['tipR'] : null;
    $accion = isset($_POST['action']) ? $_POST['action'] : null;

    $tipoActividad = trim(ltrim(rtrim($tipoActividad)));

    // Verifica que los campos no estén vacíos
    if (!empty($tipoActividad) && !empty($codigoTipodeMonetizacion) && $tipoActividad != '') {
        try {
            if ($accion === 'add') {
                // Verifica si la actividad ya existe
                if ($formularioActividad->actividadExiste($tipoActividad)) {
                    echo "Ya existe una actividad con ese nombre.";
                } else {
                    // Llama al método para crear la actividad en el modelo
                    $resultado = $formularioActividad->crearActividad($tipoActividad, $codigoTipodeMonetizacion);
                    if ($resultado) {
                        echo "Actividad creada con éxito.";
                    }
                }
            } elseif ($accion === 'delete') {
                // Llama al método para eliminar la actividad en el modelo
                $resultado = $formularioActividad->eliminarActividad($tipoActividad);
                if ($resultado === true) {
                    echo "Actividad eliminada con éxito.";
                } else {
                    echo $resultado; // Mostrar el mensaje de que la actividad no existe
                }
            }
        } catch (Exception $e) {
            echo "Error al procesar la solicitud: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}

?>