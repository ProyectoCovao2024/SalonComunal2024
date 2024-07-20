<?php 

require("../../../model/formularioActividades.php");

$formularioActividad = new formularioActividades_model();
$matrizHistorial = $formularioActividad->getformularioActividades();


?>