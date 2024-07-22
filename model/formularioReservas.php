<?php
class Reserva_model{
    $cedula = $_POST["ced"];
    $nombre = $_POST["nom"];
    $apellidos = $_POST["ape"];
    $correo = $_POST["mail"];
    $telefono = $_POST["tel"];
    $edad = $_POST["eda"];
    $provincia = $_POST["prov"];
    $canton = $_POST["can"];
    $distrito = $_POST["dis"];
    $direccion = $_POST["dire"];
    $fecha = $_POST["fec"];
    $horaInicio = $_POST["hoi"];
    $horaFinal = $_POST["hof"];
    $tipoActividad = $_POST["tipA"];
    $cantidad = $_POST["canP"];
    $costoT = $_POST["cosT"];
    $costoR = $_POST["cos"];
    $costoD = $_POST["cosD"];
    $costoL = $_POST["cosL"];

    
    private $dbConnect; //Variable que va a almacenar la conexion a la base de datos
    function __construct(){
        require_once("../../../model/conexion.php");
        $this ->dbConnect =ConectarDB::conexion(); //Esta variable llamada dbConnect va a ser igual a la clase, y posteriormente llamara a la funcion estatica Conexion
    }

function RegistrarReserva(){

    $insertarpersona = "INSERT INTO `persona` (cedulaPersona, nombrePersona, apellidosPersona, direccionExactaPersona, correoElectronicoPersona, codigoProvincia, edad, costodeposito, costoLimpieza, costoRenta, costoTotal) VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$correo', '$provincia', '$edad', '$costoD', '$costoL', '$costoR', '$costoT')";
    $result_insertar = mysqli_query($dbConnect, $insertarPersona);
    
    $insertarReserva = "INSERT INTO `reserva` (fechaInicio, horaInicio, horaFinalizacion, cantidaddePersonas) VALUES ('$fecha', '$horaInicio', '$horaFinal', '$cantidad')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);

    $tipoE = "INSERT INTO `persona` (cedulaPersona, nombrePersona, apellidosPersona, direccionExactaPersona, correoElectronicoPersona, codigoProvincia, edad, costodeposito, costoLimpieza, costoRenta, costoTotal) VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$correo', '$provincia', '$edad', '$costoD', '$costoL', '$costoR', '$costoT')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);

    $insertarReserva = "INSERT INTO `persona` (cedulaPersona, nombrePersona, apellidosPersona, direccionExactaPersona, correoElectronicoPersona, codigoProvincia, edad, costodeposito, costoLimpieza, costoRenta, costoTotal) VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$correo', '$provincia', '$edad', '$costoD', '$costoL', '$costoR', '$costoT')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);

    $insertarReserva = "INSERT INTO `persona` (cedulaPersona, nombrePersona, apellidosPersona, direccionExactaPersona, correoElectronicoPersona, codigoProvincia, edad, costodeposito, costoLimpieza, costoRenta, costoTotal) VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$correo', '$provincia', '$edad', '$costoD', '$costoL', '$costoR', '$costoT')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);
}

if(isset($_POST["registrarR"])){
    RegistrarAutos();
}
}





?>