<?php 


//*Clase para el controlador

class controller_ReservasHistorial2{

    //*Variables a almacenar para el modal y recuperarlo desde la pag de historial reservas

    public function aceptarReservacion($cedulaPersona){
        $connect = mysqli_connect('localhost','root','','saloncomunal2024');
        $consulta = "UPDATE `reserva` SET `codigoTipoEstado(FK)`= 2 WHERE `cedulaPersonaFK`= ?";
        $query = mysqli_prepare($connect,$consulta);
        $eject = mysqli_stmt_bind_param($query,'i',$cedulaPersona);
        if(!$eject){
            echo "Hubo un error, por favor refresce la pagina";
        }else{
            $eject = mysqli_stmt_execute($query);
        }
    }

    public function rechazarReservacion($cedulaPersona){
        $correoPersona="";
        $connect = mysqli_connect('localhost','root','','saloncomunal2024');
        $consulta = "UPDATE `reserva` SET `codigoTipoEstado(FK)`= 3 WHERE `cedulaPersonaFK`= ?";
        $consultaCorreo = "SELECT `correoElectronicoPersona` from `persona` WHERE `cedulaPersona` = ?";
        $query = mysqli_prepare($connect,$consulta);
        $eject = mysqli_stmt_bind_param($query,'i',$cedulaPersona);
        if(!$eject){
            echo "Hubo un error, por favor refresce la pagina";
        }else{
            $eject = mysqli_stmt_execute($query);
            $queryCorreo  =mysqli_query($connect,$consultaCorreo);
            while($dato = mysqli_fetch_assoc($queryCorreo)){
                $correoPersona = $dato;
            }
            mail($correoPersona,"Reservacion Rechazada","Su reservacion ha sido Rechazada,Por favor comuníquese con salon comunal para obtener mas informacion");

        }
    }

    public function cargarDatosModal($cedModal){
        $cedModal = (int)$cedModal;
        $conexion = mysqli_connect('localhost','root','','saloncomunal2024');
        $consulta = "
        SELECT * 
        FROM reserva
        INNER JOIN persona
        ON reserva.`cedulaPersonaFK` = persona.`cedulaPersona`
        INNER JOIN telefonopersona
        ON telefonopersona.`cedulaPersona(FK)` = persona.`cedulaPersona` 
        AND reserva.`cedulaPersonaFK` = persona.`cedulaPersona`
        INNER JOIN actividades
        on actividades.`codigoActividad` = reserva.`codigoActividadFK`
        INNER JOIN provincia
        on provincia.`codigoProvincia` = persona.`codigoProvincia(FK)`
        WHERE reserva.`cedulaPersonaFK` = ".$cedModal."
        ";
        $exect = mysqli_query($conexion,$consulta);
        //$query = mysqli_prepare($conexion,$consulta);
        //$eject = mysqli_stmt_bind_param($query, 'i', $cedModal);
        //if(!$eject){
        //    echo "Hubo un error, por favor refresce la pagina";
        //}else{
        //    $eject = mysqli_stmt_execute($query);
            while($dato = mysqli_fetch_assoc($exect)){
                echo
                '
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Reservacion</h2>
                    <div class="formContainer">
                        <form action="../../../controller/historialReservas3.php" method="POST">
                            <fieldset>
                                <div class="groupInfo">
                                    <label for="cedula">Cedula</label>
                                    <label for="nombre">Nombre</label>
                                    <input type="numbre" name="cedula" id="cedula" readonly value = '.$dato['cedulaPersona'].'>
                                    <input type="text" name="nombre" id="nombre" value = '.$dato['nombrePersona'].'>
                                    <label for="apellidos">Apellidos</label>
                                    <label for="correo">Correo Electronico</label>
                                    <input type="text" name="apellidos" id="apellidos" value = '.$dato['apellidosPersona'].'>
                                    <input type="text" name="correo" id="correo" value = '.$dato['correoElectronicoPersona'].'>
                                    <label for="telefono">Telefono</label><br>
                                    <input type="number" name="telefono" id="telefono" value = '.$dato['telefonoPersona'].'>
                                    <br>
                                </div>
                                <div class="groupInfo">
                                <label for="edad">Edad</label>
                                    <label for="provincia">Provincia</label>
                                    <input type="text" name="edad" id="edad" value = '.$dato['edad'].'>
                                    <input type="text" name="provincia" id="provincia" value='.$dato['codigoProvincia(FK)'].'>
                                    <label for="direccion">Direccion Exacta</label><br>
                                    <input type="text" name="direccion" id="direccion" value = '.$dato['direccionExactaPersona'].'>
                                    <br>
                                </div>
                                <div class="groupInfo">
                                <label for="fechaReservacion">Fecha Reservacion</label>
                                    <label for="horaInicio">Hora de Inicio</label>
                                    <input type="date" name="fechaReservacion" id="fechaReservacion" value = '.$dato['fechaInicio'].'>
                                    <input type="time" name="horaInicio" id="horaInicio" value = '.$dato['horaInicio'].'>
                                    <label for="horaFinal">Hora de Finalizacion</label>
                                    <label for="tipoActividad">Tipo de actividad</label>
                                    <input type="time" name="horaFinal" id="horaFinal"value = '.$dato['horaFinalizacion'].'>
                                    <input type="text" name="tipoActividad" id="tipoActividad" value = '.$dato['codigoActividad'].'>
                                    <label for="cantidadPersonas">Cantidad de Personas</label><br>
                                    <input type="number" name="cantidadPersonas" id="cantidadPersonas" value = '.$dato['cantidaddePersonas'].'>
                                    <br>
                                </div>
                                <div class="groupInfo">
                                <label for="costoTotal">Costo Total</label>
                                    <label for="costoRenta">Costo de la Renta</label>
                                    <input type="number" name="costoTotal" id="costoTotal" value = '.$dato['costoTotal'].'>
                                    <input type="number" name="costoRenta" id="costoRenta" value = '.$dato['costoRenta'].'>
                                    <label for="costoDeposito">Costo del deposito</label>
                                    <label for="costoLimpieza">Costo de Limpieza</label>
                                    <input type="number" name="costoDeposito" id="costoDeposito" value = '.$dato['costodeposito'].'>
                                    <input type="number" name="costoLimpieza" id="costoLimpieza" value = '.$dato['costoLimpieza'].'>
                                    <br>
                                </div>
                                <div class="buttoms">
                                    <button type="submit" name="update" id="update" >Modificar</button>
                                    <button type="submit" name="delete" id="delete">Eliminar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                ';
            }
        //}
    }

    public function actualizarDatos(){
        //UPDATE `reserva` SET `codigoReservas`='[value-1]',`fechaInicio`='[value-2]',`horaInicio`='[value-3]',`horaFinalizacion`='[value-4]',`cantidaddePersonas`='[value-5]',`codigoTipoEstado(FK)`='[value-6]',`codigoActividadFK`='[value-7]',`cedulaPersonaFK`='[value-8]' WHERE 1
        //UPDATE `persona` SET `cedulaPersona`='[value-1]',`nombrePersona`='[value-2]',`apellidosPersona`='[value-3]',`direccionExactaPersona`='[value-4]',`correoElectronicoPersona`='[value-5]',`codigoProvincia(FK)`='[value-6]',`edad`='[value-7]',`costodeposito`='[value-8]',`costoLimpieza`='[value-9]',`costoRenta`='[value-10]',`costoTotal`='[value-11]' WHERE 1
        //UPDATE `telefonopersona` SET `codigoTelefonoPersona`='[value-1]',`telefonoPersona`='[value-2]',`cedulaPersona(FK)`='[value-3]' WHERE 1
    }

    public function eliminarDatosReserva($ced){
        $conexion = mysqli_connect('localhost','root','','saloncomunal2024');
        $consulta = 'DELETE FROM `persona` WHERE `cedulaPersona`= ? ';
        $query = mysqli_prepare($conexion,$consulta);
        $exect = mysqli_stmt_bind_param($query,'i',$ced);
        if(!$exect){
            echo "Hubo un error, por favor refresce la pagina";
        }
        else{
            $exect = mysqli_stmt_execute($query);
        }
    }
}

$historialR = new controller_ReservasHistorial2();

//!Apartado para la validacion de los btns de aceptar o rechazar
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['estatus'] == 2){
        $historialR -> aceptarReservacion($_POST['cedulaR']);
    }
    elseif($_POST['estatus'] == 3){
        $historialR -> rechazarReservacion($_POST['cedulaR']);
    }
    elseif($_POST['estatus'] == 'modal'){
        $historialR -> cargarDatosModal($_POST['cedulaR']);
    }
}


/*
$historialReserva = new historialReservas_model();
$matrizHistorial = $historialReserva->getHistorialReservas();

*/

?>