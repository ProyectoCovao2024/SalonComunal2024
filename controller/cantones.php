<?php


require "../../../model/canton.php";


$canton = new Canton_model();
$listaCantones = $canton->getCantones($_POST['codProvincia']);


?>