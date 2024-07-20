<?php 
require ("../../../includes/url.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="<?php echo urlLocal?>/public/build/assets/image/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/postIngreso/postIngreso.css">
    <title>Post Ingreso</title>
</head>
<body>
<?php
    require ('../../../includes/config/header2.php')
?>
<h1>Bienvenido</h1>
<p>Nombre del Usuario</p>
<div class="box">
<div class="cardContainer">
        <div class="card">
            <div class="cardUp">
                <img src="<?php echo urlLocal?>/public/build/assets/image/postIngreso/actividades.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="<?php echo urlLocal?>/view/pages/formActividades/actividades.php">Actividades</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="<?php echo urlLocal?>/public/build/assets/image/postIngreso/miembros.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="#">Miembros</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="<?php echo urlLocal?>/public/build/assets/image/postIngreso/publicaciones.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="#">Publicaciones</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="cardUp">
                <img src="<?php echo urlLocal?>/public/build/assets/image/postIngreso/reservas.jpg" alt="">
            </div>
            <div class="cardDown">
                <p>
                    <a href="<?php echo urlLocal?>/view/pages/historialdeReservas/historialReservas.php">Reservas</a>
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