<?php 
    require "../../../model/provincias.php";

    $provincia = new Provincias_model();
    $listaProvincias = $provincia->getProvincias();


?>