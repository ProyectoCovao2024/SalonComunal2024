<?php

require("../model/login_model.php");

$loginModel = new Login_model();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correoElectronico = $_POST['correoelectronico'];
    $contrasena = $_POST['contrasena'];
    $loginModel->login($correoElectronico, $contrasena);
}

?>
