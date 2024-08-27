<?php 

class historialReservas_model{

    private $dbConnect; //Variable que va a almacenar la conexion a la base de datos
    function __construct(){
        require_once "../../../model/conexion.php";
        $this ->dbConnect =ConectarDB::conexion(); //Esta variable llamada dbConnect va a ser igual a la clase, y posteriormente llamara a la funcion estatica Conexion
    }

    function getHistorialReservasP(){ 
        $consulta = "
        SELECT * 
        FROM `reserva`
        INNER JOIN `persona`
        ON `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `telefonopersona`
        ON `telefonopersona`.`cedulaPersona(FK)` = `persona`.`cedulaPersona` 
        AND `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `actividades`
        on `actividades`.`codigoActividad` = `reserva`.`codigoActividadFK`
        WHERE `reserva`.`codigoTipoEstado(FK)` = 1
        ";
        $query = mysqli_query($this->dbConnect,$consulta);
        //$fritsline ='<a href="#openModal"></a>';

        while($fila = mysqli_fetch_assoc($query)){
            echo 
            "
            <div class='datos'>
            <ul>
            <li>
            <a href='#openModal' id='ModalInfo' value='".$fila['cedulaPersona']."'>".$fila['cedulaPersona']." ".$fila['nombrePersona']." ".$fila['apellidosPersona']." ".$fila['telefonoPersona']."  ".$fila['tipoActividad']."</a>
            </li>
            </ul>
            </div>
            <div class='botones'>
            <button type='submit' value = '".$fila['cedulaPersona']."' name='aprov' id ='aprov'>Aceptar</button>
            <button type='submit' value = '".$fila['cedulaPersona']."' name='rechaz' id ='rechaz'>Rechazar</button>
            </div>
            ";
        }

    }

    function getHistorialReservasA(){ 
        $consulta = "
        SELECT * 
        FROM `reserva`
        INNER JOIN `persona`
        ON `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `telefonopersona`
        ON `telefonopersona`.`cedulaPersona(FK)` = `persona`.`cedulaPersona` 
        AND `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `actividades`
        on `actividades`.`codigoActividad` = `reserva`.`codigoActividadFK`
        WHERE `reserva`.`codigoTipoEstado(FK)` = 2
        ";
        $query = mysqli_query($this->dbConnect,$consulta);
        //$fritsline ='<a href="#openModal"></a>';

        while($fila = mysqli_fetch_assoc($query)){
            echo 
            "
            <div class='datos'>
            <ul>
            <li>
            <a href='#openModal'>".$fila['cedulaPersona']." ".$fila['nombrePersona']." ".$fila['apellidosPersona']." ".$fila['telefonoPersona']." ".$fila['tipoActividad']."</a>
            </li>
            </ul>
            </div>
            ";
        }

    }

    function getHistorialReservasR(){ 
        $consulta = "
        SELECT * 
        FROM `reserva`
        INNER JOIN `persona`
        ON `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `telefonopersona`
        ON `telefonopersona`.`cedulaPersona(FK)` = `persona`.`cedulaPersona` 
        AND `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
        INNER JOIN `actividades`
        on `actividades`.`codigoActividad` = `reserva`.`codigoActividadFK`
        WHERE `reserva`.`codigoTipoEstado(FK)` = 3
        ";
        $query = mysqli_query($this->dbConnect,$consulta);
        //$fritsline ='<a href="#openModal"></a>';

        while($fila = mysqli_fetch_assoc($query)){
            echo 
            "
            <div class='datos'>
            <ul>
            <li>
            <a href='#openModal' >".$fila['cedulaPersona']." ".$fila['nombrePersona']." ".$fila['apellidosPersona']." ".$fila['telefonoPersona']." ".$fila['tipoActividad']."</a>
            </li>
            </ul>
            </div>
            ";
        }
    }
}

/*!

Crear 3 funciones que llamen a las reservas dependiento de su estado
Crear un selector de estados reservas
Crear un switch en la pagina historial reservas para distribuir los datos

!Consulta para el modal/////////////

SELECT * 
FROM `reserva`
INNER JOIN `persona`
ON `reserva`.`cedulaPersonaFK` = `persona`.`cedulaPersona`
INNER JOIN `telefonopersona`
ON `telefonopersona`.`cedulaPersona(FK)` = `persona`.`cedulaPersona`
WHERE `reserva`.`cedulaPersonaFK` = 118070555 
AND `persona`.`cedulaPersona` = 118070555


////////////////////////////////////



Para la seleccion dependeiendo del tipo de estado, se puede usar un switch case o un if
 ! Info de los que se debe de imprimir
 * 
    <a href="#openModal"></a>

    <div class="botones">
        <button>Aceptar</button>
        <button>Rechazar</button>
    </div>
 * 
 * 
 * 
 * 
 */

?>