<?php 

require("../../../model/formularioReservas.php");

/*
$formularioReservas = new Reserva_model();
$datos = $formularioReservas->RegistrarReservas();
*/

class controller_Reservas{
    public function validacionPOST():bool{
        $accion = new reservas_model();
        $v = $accion ->validarDatos(
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
        
        return $v;
    }
    public function INSERT($dato){
        $accion = new reservas_model();
        $accion ->insertSQL($dato);
    }

}

$controller = new controller_Reservas();
$controllerI = new controller_Reservas();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $val = $controller-> validacionPOST();
    if(!$val){
        $controllerI ->INSERT(true);
    }else{
        echo "controller Error";
    }
}

/*
$formularioReservaciones = new reservas_model();

if($_SERVER['REQUEST_METHOD']== "POST"){

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


}

*/

?>