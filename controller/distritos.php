<?php


require "../../../model/distritos.php";


$canton = new Distritos_model();
$listaDistritos = $canton->getCantones($_POST['codDistrito']);


?>