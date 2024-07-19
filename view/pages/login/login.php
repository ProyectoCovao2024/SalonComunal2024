<?php 
require ("../../../includes/url.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/login/loginStyle.css">
<link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
<link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="icon" href="../../../public/build/assets/image/logo.ico" type="image/png">
<title>Login</title>
</head>
<body>

    <?php
    require(__DIR__."../../../../includes/header.php");
    ?>

    <?php

            // // Conexión a la base de datos (simulada)
            // $conn = new mysqli("localhost", "root", "", "mi_base_de_datos");

            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     $usuario = $_POST['usuario'];
            //     $password = $_POST['password'];

            //     // Consultar si el usuario existe
            //     $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
            //     $result = $conn->query($sql);

            //     if ($result->num_rows > 0) {
            //         // Usuario encontrado
            //         $row = $result->fetch_assoc();
            //         if ($row['contraseña'] == $password) {
            //             // Contraseña correcta - Redirigir a otra página
            //             header("Location: pagina_principal.php");
            //             exit();
            //         } else {
            //             // Contraseña incorrecta
            //             echo "<p class='error-message yellow'>Contraseña incorrecta.</p>";
            //         }
            //     } else {
            //         // Usuario no encontrado
            //         echo "<p class='error-message red'>Usuario no encontrado.</p>";
            //     }
            // }
    ?>


    <main>
        <div class="contenedor__todo">
            <div class="formu">
                <form class="formu_login" method="post">
                    <div class="img"><i class='bx bx-user-circle'></i></div>
                    <input type="text" id="email" placeholder="Correo Electrónico" name="usuario">
                    <input type="password" id="password" placeholder="Contraseña" name="password">
                    <button name="btnIngresar" value="Iniciar Sesion">Inciar sesión</button>
                </form>
            </div>
              
            <div class="card">
                <div class="card_login">
                    <h3>Bienv<span>enido</span></h3>
                    <p>¡Nos alegra verte de nuevo! Gracias por regresar a nuestra plataforma. Esperamos que encuentres todo lo que necesitas y que tu experiencia sea agradable. Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos. ¡Disfruta tu visita!</p>
                    <p class="contact"><i class='bx bx-envelope'></i> example<span>@gmail.com</span></p>
                </div>
                </div>
            </div>
    </main> 
     
    <footer class="footer">
        <?php
    require(__DIR__."../../../../includes/footer.php")
    ?>
    </footer>

</body>
</html>