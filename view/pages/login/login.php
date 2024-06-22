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
<title>Login</title>
</head>
<body>

    <?php
    require(__DIR__."../../../../includes/header.php");
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