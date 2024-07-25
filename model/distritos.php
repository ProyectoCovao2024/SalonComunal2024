<?php 

class Distritos_model{

    private $dbConnect;
    private $distritos;

    function __construct(){
        require "../../../model/conexion.php";
        $this ->dbConnect = ConectarDB::conexion();
        }

    function getCantones(int $idCanton){
        $consulta = "SELECT `codigoDistrito`, `nombreDistrito` FROM `distrito` WHERE `codigoCanton` = $idCanton ORDER BY `nombreDistrito` ASC" ;
        $query = mysqli_query($this->dbConnect,$consulta);
        $lineaHTML = "<option value=''>Seleccione una opcione</option>";
        while($fila = $query->fetch_assoc()){
            $lineaHTML .= "<option value='".$fila["codigoDistrito"]."'>".$fila["nombreDistrito"]. "</option>";
        }
        $this -> distritos = json_encode($lineaHTML,JSON_UNESCAPED_UNICODE);
        return $this->distritos;
    }
}

?>