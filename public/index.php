<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/build/css/index/indexStyle.css">
    <link rel="stylesheet" href="../public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="../public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio</title>
</head>
<body>
    
    <?php
    require(__DIR__."../../includes/header.php");
    ?>
    a
    
    <section class="home" id="home" style="background:url(../public/build/assets/image/backgroundgif.gif)">
        <div class="home-content">
            <h3>¡Bienvenido!</h3>
            <h1>Salon Comunal</h1>
            <h3>Desarrollo <span>Integral</span></h3>
            <p>Nos complace recibir su visita a nuestra página web. Aquí podrá conocer más sobre nuestras instalaciones
                y servicios, así como realizar reservas de manera fácil y rápida. Nuestro salón está diseñado para
                satisfacer sus necesidades y ofrecerle un espacio ideal para sus eventos y actividades.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-gmail'></i></a>
            </div>
            <a href="" class="btn">Historia</a>
        </div>
        <div class="home-img">
            <img src="../public/build/assets/image/background1.jpeg" alt="">
        </div>
    </section>

    <section class="explora container">
        <h2>NUESTRO <span>PROPÓSITO</span></h2>
        <div class="explor-content">
            <div class="explor-1 bg-1">
                <img src="" alt="">
                <h3>Misión</h3>
                <p>Conozca nuestra misión y el propósito que nos impulsa.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
            <div class="explor-1 bg-2">
                <img src="" alt="">
                <h3>Valores</h3>
                <p>Conozca nuestros valores y los principios que nos guían.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
            <div class="explor-1 bg-3">
                <img src="" alt="">
                <h3>Objetivos</h3>
                <p>Conozca nuestros objetivos y nuestras metas a futuro.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
        </div>
    </section>

    <section class="fundadores container">
        <div class="fund-content">
            <div class="fund-1">
                <img src="" alt="">
                <h3>Fundador <span>Name</span></h3>
                <p>Detalles del fundador</p>
            </div>
            <div class="fund-1">
                <img src="" alt="">
                <h3></h3>
                <p></p>
            </div>
            <div class="fund-1">
                <img src="" alt="">
                <h3></h3>
                <p></p>
            </div>
        </div>
    </section>


    <section class="about" id="about">

        <div class="about-content">
            <h2 class="heading">Bene<span>ficios</span></h2>
            <h2>Beneficios revelantes</h2>
            <p>
                1. La Asociación vela por los intereses y los derechos de la comunidad.<br>
                2. Ofrece un espacio para grupos de interés social como lo son: INAMU, alcohólicos Anónimos, Grupos de
                Adulto mayor, Alanón, Scouts, etc.<br>
                3. Ofrece espacio para grupos de capacitación: odontología, computo, acondicionamiento físico, etc.<br>
                4. Se hace responsable del mantenimiento de las zonas verdes y áreas comunitarias como lo son el parque
                infantil, la cancha multiusos, salón comunal, área de máquinas, etc.<br>
                5. Ejerce una función de cooperación que contribuye a que las Municipalidades se mantengan trabajando
                por el beneficio de la comunidad en situaciones muy específicas.<br>
                6. La Junta directiva cuenta con un plan de trabajo para cada período que incluye un fondo de
                solidaridad en caso de emergencias o ayuda comunal a los vecinos.<br>
                7. En casos específicos y siempre que lo permita la agenda y los compromisos adquiridos, se facilitan
                las instalaciones para te de canastilla o novenarios.<br>
                8. También en caso de reuniones comunitarias con el cuerpo de policía se cuenta con la disponibilidad de
                espacio.
            </p>
        </div>
        <div class="about-img">
            <img src="../public/build/assets/image/Benef.png" alt="">
        </div>
    </section>

    <footer class="footer">
    <?php
    require(__DIR__."../../includes/footer.php")
    ?>
    </footer>

    <script src="../public/build/JavaScript/indexscript.js"></script>
 
</body>

</html>