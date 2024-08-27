<?php 

require_once "../../../model/historialReservas.php";

//*Clase para el controlador

class controller_ReservasHistorial{
    public function cargarHistorialPendiente(){
        $historial = new historialReservas_model();
        $historial -> getHistorialReservasP();
    }
    public function cargarHistorialAprovado(){
        $historial = new historialReservas_model();
        $historial -> getHistorialReservasA();
    }
    public function cargarHistorialRechazado(){
        $historial = new historialReservas_model();
        $historial -> getHistorialReservasR();
    }

}

$historialR = new controller_ReservasHistorial();


/*
$historialReserva = new historialReservas_model();
$matrizHistorial = $historialReserva->getHistorialReservas();

*/

?>