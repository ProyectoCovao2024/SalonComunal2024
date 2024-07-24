<?php 

require("../../../model/formularioReservas.php");

$formularioReservas = new Reserva_model();
$datos = $formularioReservas->RegistrarReservas();


?>