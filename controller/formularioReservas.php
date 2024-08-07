<?php 

require "../model/formularioReservas.php";

/*
$formularioReservas = new Reserva_model();
$datos = $formularioReservas->RegistrarReservas();
*/

$formularioReservaciones = new reservas_model();
$formularioReservaciones = $formularioReservaciones ->validarDatos(
    $_POST["ced"],
    $_POST["nom"],
    $_POST["ape"],
    $_POST["mail"],
    $_POST["tel"],
    $_POST["eda"],
    $_POST["prov"],
    $_POST["can"],
    $_POST["dis"],
    $_POST["dire"],
    $_POST["fec"],
    $_POST["hoi"],
    $_POST["hof"],
    $_POST["tipA"],
    $_POST["canP"],
    $_POST["cosT"],
    $_POST["cos"],
    $_POST["cosD"],
    $_POST["cosL"],
);


?>