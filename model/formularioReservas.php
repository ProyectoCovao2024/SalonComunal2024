<?php

class reservas_model
{

    private $dbConnect;
    private $actividadesForm;
    private $estadoReserva = 1;

    function __construct()
    {
        require_once "../model/conexion.php";
        $this->dbConnect = ConectarDB::conexion();
    }
    function insertSQL($dat, $ced, $nom, $ape, $mail, $tel, $edad, $prov, $cant, $dist, $direc, $fec, $hoi, $hof, $tipoa, $cantp, $costo, $costor, $costod, $costol)
    {
        if ($dat == true) {
            //TODO: Comprobar = ✔
            $connect = $this->dbConnect;

            //!Validar que exita una sola reservacion por persona
            $consultaVal = "SELECT `cedulaPersona` FROM `persona` WHERE `cedulaPersona` = " . $ced . "";
            $ejectVal = mysqli_query($connect, $consultaVal);
            $val = mysqli_num_rows($ejectVal);

            if ($val == 0) {
                //!Seccion de Insert para Personas
                $consultaP = "INSERT INTO `persona`(`cedulaPersona`, `nombrePersona`, `apellidosPersona`, `direccionExactaPersona`, `correoElectronicoPersona`, `codigoProvincia(FK)`, `edad`, `costodeposito`, `costoLimpieza`, `costoRenta`, `costoTotal`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                $resultP = mysqli_prepare($connect, $consultaP);
                $ejectP = mysqli_stmt_bind_param($resultP, 'issssiiiiii', $ced, $nom, $ape, $direc, $mail, $prov, $edad, $costod, $costol, $consultaR, $costo);
                //!Seccion de Insert para Telefono Personas
                $consultaR = "INSERT INTO `telefonopersona`(`telefonoPersona`, `cedulaPersona(FK)`) VALUES(?,?)";
                $resultR = mysqli_prepare($connect, $consultaR);
                $ejectR = mysqli_stmt_bind_param($resultR, 'ii', $tel, $ced);
                //!Seccionde Insert para Reservas
                $consulta = "INSERT INTO `reserva`(`fechaInicio`, `horaInicio`, `horaFinalizacion`, `cantidaddePersonas`, `codigoTipoEstado(FK)`, `codigoActividadFK`, `cedulaPersonaFK`) VALUES (?,?,?,?,?,?,?)";
                $result = mysqli_prepare($connect, $consulta);
                $eject = mysqli_stmt_bind_param($result, 'sssiiii', $fec, $hoi, $hof, $cantp, $this->estadoReserva, $tipoa, $ced);
                //!Ejecucion de los eject
                $ejectP = mysqli_stmt_execute($resultP);
                $eject = mysqli_stmt_execute($result);
                $ejectR = mysqli_stmt_execute($resultR);
                //!Validacion de todos los INSERTS
                if (!$eject && !$ejectP && !$ejectR) {
                    header('Refresh: 6; url=http://localhost/SalonComunal2024/view/pages/formReservas/form-reservaciones.php');
                    echo '
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script type="text/Javascript">
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Hubo un Error, Por Favor vuelva a intentarlo",
                        showConfirmButton: false
                    });
                </script>
                ';
                    exit();
                } else {
                    header('Refresh: 6; url=http://localhost/SalonComunal2024/view/pages/formReservas/form-reservaciones.php');
                    echo '
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script type="text/Javascript">
                    Swal.fire({
                        icon: "success",
                        text: "Solicitud Enviada",
                        showConfirmButton: false
                    });
                </script>
                ';
                    exit();
                    //!Funcion de envio de un correo Electronico
                    mail($mail,"Reservacion Creada","Su reservacion ha sido creda con exito, Este atento a una pronta respuesta por parte del salon comunal");
                }
            } else {
                header('Refresh: 6; url=http://localhost/SalonComunal2024/view/pages/formReservas/form-reservaciones.php');
                echo '
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script type="text/Javascript">
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Espacios Incompleto",
                    showConfirmButton: false
                });
            </script>
            ';
                exit();
            }
        } else {
            header('Refresh: 6; url=http://localhost/SalonComunal2024/view/pages/formReservas/form-reservaciones.php');
            echo '
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/Javascript">
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Ya existe una reserva a su nombre",
                showConfirmButton: false
            });
        </script>
        ';
        }

    }

}


/*
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

    $insertarpersona = "INSERT INTO `persona` (cedulaPersona, nombrePersona, apellidosPersona, direccionExactaPersona, correoElectronicoPersona, edad, costodeposito, costoLimpieza, costoRenta, costoTotal) VALUES ('$cedula', '$nombre', '$apellidos', '$direccion', '$correo', '$edad', '$costoD', '$costoL', '$costoR', '$costoT')";
    $result_insertar = mysqli_query($dbConnect, $insertarPersona);
    
    $insertarReserva = "INSERT INTO `reserva` (fechaInicio, horaInicio, horaFinalizacion, cantidaddePersonas) VALUES ('$fecha', '$horaInicio', '$horaFinal', '$cantidad')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);

    $insertarActividad = "INSERT INTO `actividades` (tipoActividad) VALUES ('$tipoActividad')";
    $result_insertar = mysqli_query($dbConnect, $insertarReserva);
}

if(isset($_POST["registrarR"])){
    RegistrarReserva();
}
}
*/




?>