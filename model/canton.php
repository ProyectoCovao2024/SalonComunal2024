<?php 

class Canton_model{

    private $dbConnect;
    private $cantones;

    function __construct(){
        require "../../../model/conexion.php";
        $this ->dbConnect = ConectarDB::conexion();
        }

    function getCantones(int $idProvincia){
        $consulta = "SELECT `codigoCanton`, `nombreCanton` FROM `canton` WHERE `codigoProvincia(FK)` = $idProvincia ORDER BY `nombreCanton` ASC" ;
        $query = mysqli_query($this->dbConnect,$consulta);
        $lineaHTML = "<option value=''>Seleccione una opcione</option>";
        while($fila = $query->fetch_assoc()){
            $lineaHTML .= "<option value='".$fila["codigoCanton"]."'>".$fila["nombreCanton"]. "</option>";
        }
        $this -> cantones = json_encode($lineaHTML,JSON_UNESCAPED_UNICODE);
        return $this->cantones;
    }
}

?>