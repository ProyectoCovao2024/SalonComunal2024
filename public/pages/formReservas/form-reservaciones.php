<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/formReservas/form-reservaciones.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Formulario de Reservas</title>
</head>
<body>
<header>
<?php
require("../../../includes/header.php");
?>
</header>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-sm-10 col-md-11 col-lg-11 col-xl-12 col-xxl-12  ">
                <div class="formBox">
                    <form>
                        <div class="titulo">
                            <h1>Reservaciones</h1>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <label for="ced" class="form-label">Cédula</label>
                                <input type="number" class="form-control form-control-sm mb-3 mt-3" id="ced" name="ced">
                            </div>
                            <div class="col-4">
                                <label for="nom" class="form-label">Nombre</label>
                                <input type="text" class="form-control form-control-sm mb-3 mt-3" id="nom" name="nom">
                            </div>
                            <div class="col-4">
                                <label for="ape" class="form-label">Apellidos</label>
                                <input type="text" class="form-control form-control-sm mb-3 mt-3" id="ape" name="ape">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="mail" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control form-control-sm mb-3 mt-3" id="mail"
                                    name="mail">
                            </div>
                            <div class="col-4">
                                <label for="tel" class="form-label">Teléfono</label>
                                <input type="number" class="form-control form-control-sm mb-3 mt-3" id="tel" name="tel">
                            </div>
                            <div class="col-4">
                                <label for="eda" class="form-label">Edad</label>
                                <input type="number" class="form-control form-control-sm mb-3 mt-3" id="eda" name="eda">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="prov" class="form-label">Provincia</label>
                                <select name="prov" id="prov" class="form-select mb-4">
                                    <option>Alajuela</option>
                                    <option>Cartago</option>
                                    <option>Guanacaste</option>
                                    <option>Heredia</option>
                                    <option>Limón</option>
                                    <option>Puntarenas</option>
                                    <option>San José</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="can" class="form-label">Cantón</label>
                                <select name="can" id="can" class="form-select mb-4">
                                    <option>Alajuela</option>
                                    <option>Cartago</option>
                                    <option>Guanacaste</option>
                                    <option>Heredia</option>
                                    <option>Limón</option>
                                    <option>Puntarenas</option>
                                    <option>San José</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="dis" class="form-label">Distrito</label>
                                <select name="dis" id="dis" class="form-select mb-4">
                                    <option>Alajuela</option>
                                    <option>Cartago</option>
                                    <option>Guanacaste</option>
                                    <option>Heredia</option>
                                    <option>Limón</option>
                                    <option>Puntarenas</option>
                                    <option>San José</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="direccion" class="form-label">Direccion Exacta</label>
                                <input type="text" class="form-control form-control-lg mt-6" id="direccion"
                                    name="direccion">
                                <div class="form-text" placeholder="Digite su direccion exacta">Digite su direccion
                                    exacta</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fec" class="form-label">Fecha de la Reservación</label>
                                <input type="date" class="form-control form-control-sm mb-3 mt-3" id="fec" name="fec">
                            </div>
                            <div class="col-4">
                                <label for="hoi" class="form-label">Hora de Inicio</label>
                                <input type="time" class="form-control form-control-sm mb-3 mt-3" id="hoi" name="hoi">
                            </div>
                            <div class="col-4">
                                <label for="hof" class="form-label">Hora Final</label>
                                <input type="time" class="form-control form-control-sm mb-3 mt-3" id="hof" name="hof">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="tipR" class="form-label">Tipo de Actividad</label>
                                <select name="tipR" id="tipR" class="form-select mb-4">
                                    <option>Alajuela</option>
                                    <option>Cartago</option>
                                    <option>Guanacaste</option>
                                    <option>Heredia</option>
                                    <option>Limón</option>
                                    <option>Puntarenas</option>
                                    <option>San José</option>
                                </select>
                            </div>
                            <div id="beneficios" class="col-6">
                                <h3>Beneficios del Salón</h3>
                                <ul>
                                    <li>Ambiente climatizado</li>
                                    <li>Capacidad para 200 personas</li>
                                    <li>Equipo de sonido e iluminación profesional</li>
                                    <li>Estacionamiento privado</li>
                                    <li>Acceso para personas con discapacidad</li>
                                    <li>Servicio de catering disponible</li>
                                </ul>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="canP" class="form-label">Cantidad de Personas</label>
                                <input type="number" class="form-control form-control-sm mb-3 mt-3" id="canP"
                                    name="canP">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <fieldset disabled>
                                    <label for="cosT" class="form-label">Costo Total</label>
                                    <input type="number" class="form-control form-control-sm mb-3 mt-3" id="cosT"
                                        name="cosT">
                                </fieldset>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <fieldset disabled>
                                    <label for="cos" class="form-label">Costo de la Renta</label>
                                    <input type="number" class="form-control form-control-sm mb-3 mt-3" id="cos"
                                        name="cos">
                                </fieldset>

                            </div>
                            <div class="col-4">
                                <fieldset disabled>
                                    <label for="cosD" class="form-label">Costo del Deposito</label>
                                    <input type="number" class="form-control form-control-sm mb-3 mt-3" id="cosD"
                                        name="cosD">
                                </fieldset>
                            </div>
                            <div class="col-4">
                                <fieldset disabled>
                                    <label for="cosL" class="form-label">Costo de Limpieza</label>
                                    <input type="number" class="form-control form-control-sm mb-3 mt-3" id="cosL"
                                        name="cosL">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <p>Lee y acepta nuestros terminos y condiciones</p>
                            </div>
                            <div class="col-5">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
        <footer>
        <?php
        require("../../../includes/footer.php");
        ?>
        </footer>
</body>


</html>