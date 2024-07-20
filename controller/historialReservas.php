<?php 

require("../../../model/historialReservas.php");

$historialReserva = new historialReservas_model();
$matrizHistorial = $historialReserva->getHistorialReservas();


?>