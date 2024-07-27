<?php


require "../../../model/distritos.php";


$distrito = new Distritos_model();
$listaDistritos = $distrito->getDistritos($_POST['codDistrito']);


?>