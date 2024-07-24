<?php
require("../../../model/formularioActividades.php");

$formularioActividad = new formularioActividades_model();

$listaActividades = $formularioActividad->getMonetizaciones();

$formularioActividades = $formularioActividad->getFormularioActividades();
/*
// Obtener las opciones de monetización desde la base de datos
$monetizaciones = $formularioActividad->getMonetizaciones();
var_dump($monetizaciones); // Depuración

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigoActividad = $_POST['codigo_actividad'];
    $nombreActividad = $_POST['nombre_actividad'];
    $codigoTipodeMonetizacion = $_POST['tipR'];

    if (!empty($codigoActividad) && !empty($nombreActividad) && !empty($codigoTipodeMonetizacion)) {
        try {
            // Validar si el valor de `codigoTipodeMonetizacion` existe en la tabla `tipodemonetizacion`
            if ($formularioActividad->validarMonetizacion($codigoTipodeMonetizacion)) {
                $formularioActividad->crearActividad($codigoActividad, $nombreActividad, $codigoTipodeMonetizacion);
                echo "Actividad creada con éxito.";
            } else {
                echo "El valor de monetización no es válido.";
            }
        } catch (Exception $e) {
            echo "Error al crear la actividad: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}

// Incluir la vista y pasar los datos de monetizaciones
include("../../../view/pages/formActividades/actividades.php");*/
?>
