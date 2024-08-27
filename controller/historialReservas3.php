<?php 

function actualizarDatos($nom, $ape, $correo, $tel, $edad, $prov, $direc, $fecha, $hi, $hf, $act, $cantP, $costT, $costR, $costD, $costL,$ced){
    /*
    INNER JOIN UPDATE
    */
    $conexion = mysqli_connect('localhost','root','','saloncomunal2024');
    $consulta = 
    "UPDATE persona
    INNER JOIN reserva
    ON reserva.`cedulaPersonaFK` = persona.`cedulaPersona`
    INNER JOIN telefonoPersona
    ON telefonoPersona.`cedulaPersona(FK)` = persona.`cedulaPersona`
    SET persona.`nombrePersona`= ?, persona.`apellidosPersona`= ?, persona.`correoElectronicoPersona`= ?, telefonoPersona.`telefonoPersona`= ?, persona.`edad`= ?,
        persona.`codigoProvincia(FK)`= ?, persona.`direccionExactaPersona` = ?, reserva.`fechaInicio` = ?, reserva.`horaInicio` = ?, reserva.`horaFinalizacion`= ?, reserva.`codigoActividadFK` = ?,
        reserva.`cantidaddePersonas` = ?, persona.`costoTotal` = ?, persona.`costoRenta` = ?, persona.`costodeposito` = ?, persona.`costoLimpieza` = ?
    WHERE persona.`cedulaPersona` = ?";
        /*'UPDATE reserva, persona, telefonoPersona
    SET persona.`nombrePersona`= ?, persona.`apellidosPersona`= ?, persona.`correoElectronicoPersona`= ?, telefonoPersona.`telefonoPersona`= ?, persona.`edad`= ?,
        persona.`codigoProvincia(FK)`= ?, persona.`direccionExactaPersona` = ?, reserva.`fechaInicio` = ?, reserva.`horaInicio` = ?, reserva.`horaFinalizacion`= ?, reserva.`codigoActividadFK` = ?,
        reserva.`cantidaddePersonas` = ?, reserva.`costoTotal` = ?, reserva.`costoRenta` = ?, reserva.`costodeposito` = ?, reserva.`costoLimpieza` = ?
    FROM reserva INNER JOIN persona
    ON reserva.`cedulaPersonaFK` = persona.`cedulaPersona`
    INNER JOIN telefonoPersona
    ON telefonoPersona.`cedulaPersona(FK)` = persona.`cedulaPersona`
    WHERE persona.`cedulaPersona` = ?';*/

    $query = mysqli_prepare($conexion, $consulta);
    $exect = mysqli_stmt_bind_param($query,'sssiiissiiiiiiiii', $nom, $ape, $correo, $tel, $edad, $prov, $direc, $fecha, $hi, $hf, $act, $cantP, $costT, $costR, $costD, $costL, $ced);
    $exect = mysqli_stmt_execute($query);
    if(!$exect){
        echo "Hubo un error, por favor refresce la pagina";
    }
    else{
        header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/historialdeReservas/historialReservas.php');
        echo '
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/Javascript">
        Swal.fire({
            icon: "success",
            title: "Actualizado",
            text: "Datos Actualizadas",
            showConfirmButton: false
        });
    </script>
    '; 
    }
}

function eliminarDatosReserva($ced){
    $conexion = mysqli_connect('localhost','root','','saloncomunal2024');
    $consulta = 'DELETE FROM `persona` WHERE `cedulaPersona`= ? ';
    $query = mysqli_prepare($conexion,$consulta);
    $exect = mysqli_stmt_bind_param($query,'i',$ced);
    if(!$exect){
        echo "Hubo un error, por favor refresce la pagina";
    }
    else{
        $exect = mysqli_stmt_execute($query);
        header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/historialdeReservas/historialReservas.php');
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
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete'])){
        eliminarDatosReserva($_POST['cedula']);
    }
    elseif(isset($_POST['update'])){
        actualizarDatos($_POST['nombre'],$_POST['apellidos'],$_POST['correo'],$_POST['telefono'],$_POST['edad'],$_POST['provincia'],$_POST['direccion'],$_POST['fechaReservacion'],$_POST['horaInicio'],$_POST['horaFinal'],$_POST['tipoActividad'],$_POST['cantidadPersonas'],$_POST['costoTotal'],$_POST['costoRenta'],$_POST['costoDeposito'],$_POST['costoLimpieza'],$_POST['cedula']);
    }
}





?>