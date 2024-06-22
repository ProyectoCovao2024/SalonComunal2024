<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/SalonComunal2024/public/build/assets/image/logo.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/galeria/galeria.css">
    <script defer src="http://localhost/SalonComunal2024/public/build/JavaScript/galeria.js"></script>
    <title>Document</title>
</head>

<body >
<?php
    require ('../../../includes/header.php')
?>
    <div class="sliderImage">
        <h1>Salon Comunal</h1>
        <div class="container">
            <div class="ring">
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
            </div>
        </div>
        <h1>Exterior</h1>
        <div class="container">
            <div class="ring">
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
            </div>
        </div>
        <h1>Interior</h1>
        <div class="container">
            <div class="ring">
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
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