<?php

class reservas_model{

    private $dbConnect;
    private $actividadesForm;
    private $cedula;
    private $nombre;
    private $apellidos;
    private $correo;
    private $telefono;
    private $edad;
    private $provincia;
    private $canton;
    private $distrito;
    private $direccion;
    private $fecha;
    private $horaInicio;
    private $horaFinal;
    private $tipoActividad;
    private $cantidad;
    private $costoT;
    private $costoR;
    private $costoD;
    private $costoL;

    function __construct(){
        require_once "../model/conexion.php";
        $this ->dbConnect =ConectarDB::conexion();
    }

    function validarDatos($ced,$nom,$ape,$mail,$tel,$edad,$prov,$cant,$dist,$direc,$fec,$hoi,$hof,$tipoa,$cantp,$costo,$costor,$costod,$costol):bool{
        if(!empty($ced) && !$ced == " " && isset($ced) &&
            !empty($nom) && !$nom == " " && isset($nom) &&
            !empty($ape) && !$ape == " " && isset($ape) &&
            !empty($mail) && !$mail == " " && isset($mail) &&
            !empty($tel) && !$tel == " " && isset($tel) &&
            !empty($edad) && !$edad == " " && isset($edad) &&
            !empty($prov) && !$prov == " " && isset($prov) &&
            !empty($cant) && !$cant == " " && isset($cant) &&
            !empty($dist) && !$dist == " " && isset($dist) &&
            !empty($direc) && !$direc == " " && isset($direc) &&
            !empty($fec) && !$fec == " " && isset($fec) &&
            !empty($hoi) && !$hoi == " " && isset($hoi) &&
            !empty($hof) && !$hof == " " && isset($hof) &&
            !empty($tipoa) && !$tipoa == " " && isset($tipoa) &&
            !empty($cantp) && !$cantp == " " && isset($cantp) &&
            !empty($costo) && !$costo == " " && isset($costo) &&
            !empty($costor) && !$costor == " " && isset($costor) &&
            !empty($costod) && !$costod == " " && isset($costod) &&
            !empty($costol) && !$costol == " " && isset($costol)){

                $ced = trim(ltrim(rtrim($ced)));
                $nom = trim(ltrim(rtrim($nom)));
                $ape = trim(ltrim(rtrim($ape)));
                $mail = trim(ltrim(rtrim($mail)));
                $tel = trim(ltrim(rtrim($tel)));
                $edad = trim(ltrim(rtrim($edad)));
                $prov = trim(ltrim(rtrim($prov)));
                $cant = trim(ltrim(rtrim($cant)));
                $dist = trim(ltrim(rtrim($dist)));
                $direc = trim(ltrim(rtrim($direc)));
                $fec = trim(ltrim(rtrim($fec)));
                $hoi = trim(ltrim(rtrim($hoi)));
                $hof = trim(ltrim(rtrim($hof)));
                $tipoa = trim(ltrim(rtrim($tipoa)));
                $cantp = trim(ltrim(rtrim($cantp)));
                $costo = trim(ltrim(rtrim($costo)));
                $costor = trim(ltrim(rtrim($costor)));
                $costod = trim(ltrim(rtrim($costod)));
                $costol = trim(ltrim(rtrim($costol)));

                $this->cedula = $ced;
                $this->nombre = $nom;
                $this->apellidos = $ape;
                $this->correo = $mail;
                $this->telefono = $tel;
                $this->edad = $edad;
                $this-> provincia = $prov;
                $this-> canton = $cant;
                $this-> distrito = $dist;
                $this-> direccion = $direc;
                $this-> fecha = $fec;
                $this->horaInicio = $hoi;
                $this-> horaFinal = $hof;
                $this-> tipoActividad = $tipoa;
                $this-> cantidad = $cantp;
                $this-> costoT = $costo;
                $this-> costoR = $costor;
                $this-> costoD = $costod;
                $this-> costoL = $costol;

                return true;
            }
            else{
                //TODO: Por el momento funciona. Necesita reparaciones
                
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
                return false;
                exit();              
            }
    }

    function insertSQL($dat){
        if($dat == true){
            echo "Funcion de Insert";
        }
        else{
            return false;
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