<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="http://localhost/SalonComunal2024/public/build/css/historialDeReservas/historialReservas.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <script defer src="http://localhost/SalonComunal2024/public/build/JavaScript/headerscript.js"></script>
    <title>Historial Reservas</title>
</head>

<body>
    <?php
    require ('../../../includes/header.php')
        ?>
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button id="accordion-button-one" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Resevaciones Pendientes
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="boxreservas" style="overflow: scroll;">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    <a href="#openModal">Cedula Nombre Direccion Fecha Hora Actividad</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                    <div class="boxreservas">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    nombre nombre nombre nombre nombre nombre nombre
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                    <div class="boxreservas">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    Cedula Nombre nombre nombre nombre nombre nombre
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                    <div class="boxreservas">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    nombre nombre nombre nombre nombre nombre nombre
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                    <div class="boxreservas">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    nombre nombre nombre nombre nombre nombre nombre
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                    <div class="boxreservas">
                                        <div class="datos">
                                            <ul>
                                                <li>
                                                    nombre nombre nombre nombre nombre nombre nombre
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="botones">
                                            <button>Aceptar</button>
                                            <button>Rechazar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button id="accordion-button-two" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Resevaciones Aprovadas
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the second item's accordion body. Let's imagine this being
                                    filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button id="accordion-button-three" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    Resevaciones Rechazadas
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the third item's accordion body. Nothing more exciting
                                    happening here in terms of content, but just filling up the
                                    space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world
                                    application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Reservacion</h2>
                    <div class="formContainer">
                        <form action="#">
                            <fieldset>
                                <legend>Informacion</legend>
                                <div class="group1">
                                    <div class="spaceForm">
                                    <label for="">Cedula</label>
                                    </div>
                                    <div class="spaceForm">

                                    </div>
                                    <div class="spaceForm">
                                        
                                    </div>
                                    
                                    <label for="">Nombre</label><br>
                                    <label for="">Apellidos</label>
                                    <label for="">Correo Electronico</label><br>
                                    <label for="">Telefono</label><br>
                                    <br>
                                </div>
                                <div class="group2">

                                </div>
                                <div class="group3">

                                </div>
                                <div class="group4">

                                </div>
                                <div class="buttoms"></div>
                            </fieldset>
                        </form>
                    </div>
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