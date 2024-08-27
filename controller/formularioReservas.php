<?php 

require_once "../model/formularioReservas.php";

/*
$formularioReservas = new Reserva_model();
$datos = $formularioReservas->RegistrarReservas();
*/

class controller_Reservas{
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
    public function validacionPOST($ced,$nom,$ape,$mail,$tel,$edad,$prov,$cant,$dist,$direc,$fec,$hoi,$hof,$tipoa,$cantp,$costo,$costor,$costod,$costol){
        if(!empty($ced)  && isset($ced) &&
        !empty($nom) && isset($nom) &&
        !empty($ape) && isset($ape) &&
        !empty($mail) && isset($mail) &&
        !empty($tel) && isset($tel) &&
        !empty($edad) && isset($edad) &&
        !empty($prov) && isset($prov) &&
        !empty($cant) && isset($cant) &&
        !empty($dist) && isset($dist) &&
        !empty($direc) && isset($direc) &&
        !empty($fec) && isset($fec) &&
        !empty($hoi) && isset($hoi) &&
        !empty($hof) && isset($hof) &&
        !empty($tipoa) && isset($tipoa) &&
        !empty($cantp) && isset($cantp) &&
        !empty($costo) && isset($costo) &&
        !empty($costor) && isset($costor) &&
        !empty($costod) && isset($costod) &&
        !empty($costol) && isset($costol)){

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
            exit();              
        }
    }
    public function INSERT($dato){
        $accion = new reservas_model();
        $accion ->insertSQL($dato, $this->cedula,
        $this->nombre,
        $this->apellidos,
        $this->correo,
        $this->telefono,
        $this->edad,
        $this-> provincia,
        $this-> canton,
        $this-> distrito,
        $this-> direccion,
        $this-> fecha,
        $this->horaInicio,
        $this-> horaFinal,
        $this-> tipoActividad,
        $this-> cantidad,
        $this-> costoT,
        $this-> costoR,
        $this-> costoD,
        $this-> costoL);
    }

}

$controller = new controller_Reservas();
//$controllerI = new controller_Reservas();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $val = $controller -> validacionPOST(
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
    if($val){
        $controller ->INSERT($val);
    }
}

?>