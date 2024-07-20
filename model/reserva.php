<?php
class Reserva_model{

    private $db;
    private $Reservar;




    public function __construct(private int $codigoReserva, private date $fechaInicio, private time $horaInicio, private time $horaFinalizacion, private int $cantidaddePersonas, private int $codigoTipoReserva){
}

public function getCodigoReserva() : int {
    return $this->codigoReserva;
}

public function setCodigoReserva(int $codigoReserva) {
    $this->codigoReserva = $codigoReserva;
}

public function getFechaInicio() : date {
    return $this->fechaInicio;
}

public function setFechaInicio(date $fechaInicio) {
    $this->fechaInicio = $fechaInicio;
}

public function getHoraInicio() : time {
    return $this->horaInicio;
}

public function setHoraInicio(time $horaInicio) {
    $this->horaInicio = $horaInicio;
}

public function getHoraFinalizacion() : time {
    return $this->horaFinalización;
}

public function setHoraFinalizacion(time $horaFinalizacion) {
    $this->horaFinalizacion = $horaFinalizacion;
}

public function getCantidadDePersonas() : int {
    return $this->cantidaddePersonas;
}

public function setCantidadDePersonas(string $cantidaddePersonas) {
    $this->cantidaddePersonas = $cantidaddePersonas;
}

public function getCodigoTipoReserva() : int {
    return $this->codigoTipoReserva;
}

public function setCodigoTipoReserva(int $codigoTipoReserva) {
    $this->codigoTipoReserva = $codigoTipoReserva;
}

public function crearReserva(){
    
}
}





?>