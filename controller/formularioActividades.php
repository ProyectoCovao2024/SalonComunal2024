<?php 


// la  comunicaciòn entre la vista y el modelo

require("../../../model/formularioActividades.php");

$formularioActividad = new formularioActividades_model();
$matrizHistorial = $formularioActividad->getformularioActividades();


?>