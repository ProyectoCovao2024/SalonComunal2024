<?php

class Login_model {
    
    private $dbConnect;
    private $user;

    function __construct() {
        require_once("conexion.php");
        $this->dbConnect = ConectarDB::conexion();
        $this->user = array();
    }

    public function validarCorreoElectronico($correoElectronico) {
        // Expresión regular básica para validar un correo electrónico
        if (filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
            // Verifica que el dominio sea gmail.com o hotmail.com
            $dominio = substr(strrchr($correoElectronico, "@"), 1);
            return in_array($dominio, ['gmail.com', 'hotmail.com']);
        }
        return false;
    }

    public function validarUsuario($correoElectronico, $contrasena) {
        if (!$this->validarCorreoElectronico($correoElectronico)) {
            return false; // Correo electrónico no válido
        }

        $consulta = "SELECT * FROM cuenta WHERE correoElectronico = ? AND contrasena = ?";
        $stmt = $this->dbConnect->prepare($consulta);
        $stmt->bind_param("ss", $correoElectronico, $contrasena);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerUsuario($correoElectronico) {
        $consulta = "SELECT * FROM cuenta WHERE correoElectronico = ?";
        $stmt = $this->dbConnect->prepare($consulta);
        $stmt->bind_param("s", $correoElectronico);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $this->user = $result->fetch_assoc();
            return $this->user;
        } else {
            throw new Exception("Usuario no encontrado.");
        }
    }

    public function login($correoElectronico, $contrasena) {
        session_start();
        if ($this->validarUsuario($correoElectronico, $contrasena)) {
            $usuario = $this->obtenerUsuario($correoElectronico);
            $_SESSION['usuario'] = $usuario;
            header("Location: http://localhost/salonCOMUNAL2024/view/pages/postIngreso/postIngreso.php");
            exit();
        } else {
            $_SESSION['error'] = "credenciales_incorrectas";
            header("Location: https://localhost/salonComunal2024/view/pages/login/login.php");
            exit();
        }
    }
}

?>

