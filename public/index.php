<?php 
require ("../includes/url.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/index/indexStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio</title>
</head>

<body>

    <?php
    require(__DIR__."../../includes/header.php");
    ?>

    <section class="home" id="home" style="background:url(../public/build/assets/image/backgroundgif.gif)">
        <div class="home-content">
            <h3>¡Bienvenido!</h3>
            <h1>Salón Comunal</h1>
            <h3>Desarrollo <span class="infinite-text"></span></h3>
            <p>Nos complace recibir su visita a nuestra página web. Aquí podrá conocer más sobre nuestras instalaciones
                y servicios, así como realizar reservas de manera fácil y rápida. Nuestro salón está diseñado para
                satisfacer sus necesidades y ofrecerle un espacio ideal para sus eventos y actividades.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-gmail'></i></a>
            </div>
            <!-- <a href="" class="btn">Historia</a> -->
        </div>
        <div class="home-img">
            <img src="../public/build/assets/image/background1.jpeg" alt="">
        </div>
    </section>

    <section class="explora container">
        <h2>NUESTRO <span>PROPÓSITO</span></h2>
        <div class="explor-content">
            <div class="explor-1 bg-1">
                <h3>Misión</h3>
                <p>Conozca nuestra misión y el propósito que nos impulsa.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
            <div class="explor-1 bg-2">
                <h3>Valores</h3>
                <p>Conozca nuestros valores y los principios que nos guían.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
            <div class="explor-1 bg-3">
                <h3>Objetivos</h3>
                <p>Conozca nuestros objetivos y nuestras metas a futuro.</p>
                <a class="btn" href="#">Saber más</a>
            </div>
        </div>
    </section>

    <!-- <section class="gallery-content">
       
    </section> -->

    <!-- <section class="aboutt" id="about" style ="background:url(../public/build/assets/image/backgroundgif.gif)">

            <div class="about-content">
            <h2 class="heading">Funda<span>dores</span></h2>
            <h2></h2>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut illum repellendus excepturi <br>
            error omnis commodi blanditiis voluptatum numquam eos fugiat aut dicta, saepe sed iure <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut illum repellendus excepturi <br>
            error omnis commodi blanditiis voluptatum numquam eos fugiat aut dicta, saepe sed iure <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut illum repellendus excepturi <br>
            error omnis commodi blanditiis voluptatum numquam eos fugiat aut dicta, saepe sed iure <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut illum repellendus excepturi <br>
            error omnis commodi blanditiis voluptatum numquam eos fugiat aut dicta, saepe sed iure <br>
        </p>
    </div>
    <div class="about-img">
        <img src="../public/build/assets/image/Background2.jpeg" alt="" style="border-radius: 15%;">
    </div>
    </section>   -->

    <?php
        require(__DIR__."../../includes/slider.php")
        ?>

    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">Bene<span>ficios</span></h2>
            <h2>Beneficios relevantes</h2>
            <p>
                1. La Asociación vela por los intereses y los derechos de la comunidad.<br>
                2. Ofrece un espacio para grupos de interés social como lo son: INAMU, alcohólicos Anónimos, Grupos de
                Adulto mayor, Alanón, Scouts, etc.<br>
                3. Ofrece espacio para grupos de capacitación: odontología, cómputo, acondicionamiento físico, etc.<br>
                4. Se hace responsable del mantenimiento de las zonas verdes y áreas comunitarias como lo son el parque
                infantil, la cancha multiusos, salón comunal, área de máquinas, etc.<br>
            </p>
            <a href="#" class="btn" id="openModalBtnBenf">Saber más</a>
        </div>
        <div class="about-img">
            <img src="../public/build/assets/image/Benef.png" alt="">
        </div>

        <div id="BenefModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Bene<span>ficios</span></h2>
                <h2>Información adicional</h2>
                <p>
                    1. La Asociación vela por los intereses y los derechos de la comunidad.<br>
                    2. Ofrece un espacio para grupos de interés social como lo son: INAMU, alcohólicos Anónimos, Grupos
                    de
                    Adulto mayor, Alanón, Scouts, etc.<br>
                    3. Ofrece espacio para grupos de capacitación: odontología, cómputo, acondicionamiento físico,
                    etc.<br>
                    4. Se hace responsable del mantenimiento de las zonas verdes y áreas comunitarias como lo son el
                    parque
                    infantil, la cancha multiusos, salón comunal, área de máquinas, etc.<br>
                    5. Ejerce una función de cooperación que contribuye a que las Municipalidades se mantengan
                    trabajando
                    por el beneficio de la comunidad en situaciones muy específicas.<br>
                    6. La Junta directiva cuenta con un plan de trabajo para cada período que incluye un fondo de
                    solidaridad en caso de emergencias o ayuda comunal a los vecinos.<br>
                    7. En casos específicos y siempre que lo permita la agenda y los compromisos adquiridos, se
                    facilitan
                    las instalaciones para te de canastilla o novenarios.<br>
                    8. También en caso de reuniones comunitarias con el cuerpo de policía se cuenta con la
                    disponibilidad de
                    espacio.
                </p>
            </div>
            <div class="about-img">
                <img src="../public/build/assets/image/Benef.png" alt="">
            </div>
        </div>
    </section>

    <footer class="footer">
        <?php
    require(__DIR__."../../includes/footer.php")
    ?>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="http://localhost/SalonComunal2024/public/build/JavaScript/indexscript.js"></script>
    <script>
        /*Swiper*/

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1201: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 2,
                },
                763: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                }
            }
        });
    </script>
</body>

</html>