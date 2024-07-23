<?php
require_once("../model/formularioActividades.php");

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo_actividad'];
    $nombre = $_POST['nombre_actividad'];
    $monetizacion = $_POST['tipR'];

    // Crear una instancia del modelo
    $formularioActividad = new formularioActividades_model();

    // Llamar al método para crear una actividad
    if ($formularioActividad->crearActividad($codigo, $nombre, $monetizacion)) {
        $mensaje = "Actividad creada exitosamente.";
    } else {
        $mensaje = "Error al crear la actividad.";
    }

    // Cargar la vista con el mensaje
    require_once("../../../views/resultado.php");
} else {
    // Cargar la vista del formulario si no se envió el formulario
    require_once("../../../views/formulario_actividad.php");
}
?>
