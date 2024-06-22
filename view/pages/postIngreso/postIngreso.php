<?php 
require ("../../../includes/url.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/postIngreso/postIngreso.css">
    <title>Document</title>
=======
    <link rel="icon" type="image/x-icon" href="http://localhost/SalonComunal2024/public/build/assets/image/logo.ico">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/postIngreso/postIngreso.css">
    <title>Post Ingreso</title>
>>>>>>> 35eaf86e3e19fceac730bcec0df3c9d6bee16ca1
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<?php
    require ('../../../includes/header.php')
?>
<div class="box">
<div class="cardContainer">
        <div class="card">
            <div class="cardUp">
                <img src="http://localhost/SalonComunal2024/public/build/assets/image/postIngreso/actividades.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="/SalonComunal2024/view/pages/formActividades/actividades.php">Actividades</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="http://localhost/SalonComunal2024/public/build/assets/image/postIngreso/miembros.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="">Miembros</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="http://localhost/SalonComunal2024/public/build/assets/image/postIngreso/publicaciones.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="#">Publicaciones</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="http://localhost/SalonComunal2024/public/build/assets/image/postIngreso/reservas.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="/SalonComunal2024/view/pages/historialdeReservas/historialReservas.php">Reservas</a>
                </p>
            </div>
        </div>
    </div>
</div>
    <footer>
        <?php
            require ('../../../includes/footer.php')
        ?>
    </footer>
</body>
</html>
</body>
</html>