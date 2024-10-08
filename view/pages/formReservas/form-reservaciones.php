<?php 
require ("../../../includes/url.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/formReservas/form-reservaciones.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
    <link rel="icon" type="image/x-icon" href="<?php echo urlLocal?>/public/build/assets/image/logo.ico">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script defer src="<?php echo urlLocal?>/public/build/JavaScript/provincias.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script defer src="<?php echo urlLocal?>/public/build/JavaScript/validacionesReservas.js"></script>
    <title>Formulario de Reservas</title>
</head>

<body>
    <header>
        <?php
            require("../../../includes/header.php");
        ?>

        <?php
            require("../../../controller/provincias.php");
        ?>


    </header>
    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-10 col-md-11 col-lg-11 col-xl-12 col-xxl-12">
                <div class="formBox">
                    <form action="../../../controller/formularioReservas.php" method="post" id="formReserva">
                        <div class="titulo mb-5">
                            <h1>Reservaciones</h1>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-4 col-sm-6">
                                <label for="ced" class="form-label">Cédula</label>
                                <input type="number" class="form-control form-control-lg mb-3 mt-3" id="ced" name="ced" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="nom" class="form-label">Nombre</label>
                                <input type="text" class="form-control form-control-lg mb-3 mt-3" id="nom" name="nom" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="ape" class="form-label">Apellidos</label>
                                <input type="text" class="form-control form-control-lg mb-3 mt-3" id="ape" name="ape" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <label for="mail" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control form-control-lg mb-3 mt-3" id="mail"
                                    name="mail" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="tel" class="form-label">Teléfono</label>
                                <input type="number" class="form-control form-control-lg mb-3 mt-3" id="tel" name="tel" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="eda" class="form-label">Edad</label>
                                <input type="number" class="form-control form-control-lg mb-3 mt-3" id="eda" name="eda" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="prov" class="form-label">Provincia</label>
                                <select name="prov" id="prov" class="form-select mb-4">
                                    <option value="" hidden>Selecciona una opción</option>
                                    <?php 
                                    foreach($listaProvincias as $row){ ?>
                                        <option value="<?php echo $row["codigoProvincia"]?>"><?php echo $row["nombreProvincia"]?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="can" class="form-label">Cantón</label>
                                <select name="can" id="can" class="form-select mb-4">

                                </select>
                            </div>
                            <div class="col-4">
                                <label for="dis" class="form-label">Distrito</label>
                                <select name="dis" id="dis" class="form-select mb-4">

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="dire" class="form-label">Dirección Exacta</label>
                                <input type="text" class="form-control form-control-lg mt-6" id="dire" name="dire" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <label for="fec" class="form-label">Fecha de la Reservación</label>
                                <input type="date" class="form-control form-control-lg mb-3 mt-3" id="fec" name="fec" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="hoi" class="form-label">Hora de Inicio</label>
                                <input type="time" class="form-control form-control-lg mb-3 mt-3" id="hoi" name="hoi" required>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <label for="hof" class="form-label">Hora Final</label>
                                <input type="time" class="form-control form-control-lg mb-3 mt-3" id="hof" name="hof" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="tipA" class="form-label">Tipo de Actividad</label>
                                <select name="tipA" id="tipA" class="form-select mb-4">
                                    <option value="">Seleccion una opcion</option>
                                <?php
                                    //TODO: Mejor la codificacion.
                                    $consulta = "SELECT * FROM `actividades`";
                                    $query = mysqli_query(mysqli_connect("localhost","root","","salonComunal2024"), $consulta);
                                    while($row = $query->fetch_assoc()){?>
                                        "<option value='<?php echo"".$row["codigoActividad"]."" ?>'><?php echo "".$row["tipoActividad"]."" ?></option>"
                                    <?php }?>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div id="beneficios" class="col-12 mb-6">
                                <h3>Bene<span>ficios</span> del salón comunal</h3>
                                <ul>
                                    <li>1. La Asociación vela por los intereses y los derechos de la comunidad.</li>
                                    <li>2. Ofrece un espacio para grupos de interés social como lo son: INAMU,
                                        alcohólicos Anónimos, Grupos de Adulto mayor, Alanón, Scouts, etc.</li>
                                    <li>3. Ofrece espacio para grupos de capacitación: odontología, computo,
                                        acondicionamiento físico, etc.</li>
                                    <li>4. Se hace responsable del mantenimiento de las zonas verdes y áreas
                                        comunitarias como lo son el parque infantil, la cancha multiusos, salón comunal,
                                        área de máquinas, etc.</li>
                                    <a href="#openModal" class="btn">Saber más</a>
                                </ul>
                                <div id="openModal" class="modalDialog">
                                    <div id="modalContent">
                                        <a href="#close" title="Close" class="close">X</a>
                                        <h2>Bene<span>ficios</span></h2>
                                        <h2>Información adicional</h2>
                                        <ul>
                                            <li>1. La Asociación vela por los intereses y los derechos de la comunidad
                                            </li>
                                            <li>2. Ofrece un espacio para grupos de interés social como lo son: INAMU,
                                                alcohólicos Anónimos, Grupos de Adulto mayor, Alanón, Scouts, etc.</li>
                                            <li>3. Ofrece espacio para grupos de capacitación: odontología, computo,
                                                acondicionamiento físico, etc.</li>
                                            <li>4. Se hace responsable del mantenimiento de las zonas verdes y áreas
                                                comunitarias como lo son el parque infantil, la cancha multiusos, salón
                                                comunal, área de máquinas, etc.</li>
                                            <li>5. Ejerce una función de cooperación que contribuye a que las
                                                Municipalidades se mantengan trabajando por el beneficio de la comunidad
                                                en situaciones muy específicas.</li>
                                            <li>6. La Junta directiva cuenta con un plan de trabajo para cada período
                                                que incluye un fondo de solidaridad en caso de emergencias o ayuda
                                                comunal a los vecinos.</li>
                                            <li>7. En casos específicos y siempre que lo permita la agenda y los
                                                compromisos adquiridos, se facilitan las instalaciones para te de
                                                canastilla o novenarios.</li>
                                            <li>8. También en caso de reuniones comunitarias con el cuerpo de policía se
                                                cuenta con la disponibilidad de espacio.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="canP" class="form-label">Cantidad de Personas</label>
                                <input type="number" class="form-control form-control-lg mb-3 mt-3" id="canP"
                                    name="canP" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <fieldset>
                                    <label for="cosT" class="form-label">Costo Total</label>
                                    <input type="number" class="form-control form-control-lg mb-3 mt-3" id="cosT"
                                        name="cosT" value="120000.00" readonly>
                                </fieldset>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <fieldset>
                                    <label for="cos" class="form-label">Costo de la Renta</label>
                                    <input type="number" class="form-control form-control-lg mb-3 mt-3" id="cos"
                                        name="cos" value="100000.00" readonly>
                                </fieldset>

                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <fieldset>
                                    <label for="cosD" class="form-label">Costo del Deposito</label>
                                    <input type="number" class="form-control form-control-lg mb-3 mt-3" id="cosD"
                                        name="cosD" value="10000.00" readonly>
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <fieldset>
                                    <label for="cosL" class="form-label">Costo de Limpieza</label>
                                    <input type="number" class="form-control form-control-lg mb-3 mt-3" id="cosL"
                                        name="cosL" value="10000.00" readonly>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <a
                                    href="<?php echo urlLocal?>/view/pages/terminosyCondiciones/terminosyCondiciones.php">Lee
                                    y acepta nuestros términos y condiciones</a>
                            </div>
                            <div class="col-5">
                                <div class="check_container">
                                    <input id="checkbox" class="hidden" type="checkbox">
                                    <label class="checkbox" for="checkbox"></label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" name="registrarR"> Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php
        require("../../../includes/footer.php");
        ?>
    </footer>
    <script src="http://localhost/SalonComunal2024/public/build/JavaScript/animacionbotonformreservas.js"></script>
    <script src="http://localhost/SalonComunal2024/public/build/JavaScript/modalformreservas.js"></script>

</body>


</html>