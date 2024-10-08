<?php
require ("../../../includes/url.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo urlLocal ?>/public/build/assets/image/logo.ico">
    <link rel="stylesheet" href="<?php echo urlLocal ?>/public/build/css/formActividades/actividades.css">
    <link rel="stylesheet" href="<?php echo urlLocal ?>/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal ?>/public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script defer src="<?php echo urlLocal ?>/public/build/JavaScript/inputMagic.js"></script>
    <title>Formulario de Actividades</title>

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>

<body style="background:url(<?php echo urlLocal ?>/public/build/assets/image/backgroundgif.gif)">

    <header>
        <?php
        require ("../../../includes/header2.php");
        ?>
    </header>

    <?php
    require ("../../../controller/formularioActividades.php");
    ?>


    <section class="activities-section m-0">
        <div class="container">
            <div class="row">
                <div id="info" class="col-md-4">
                    <div class="text-content m-0">
                        <p>La página de actividades permite crear, actualizar, visualizar y eliminar y diferentes tipos de actividades que pueden realizarse en el salón comunal, cada una con su propio método de monetización específico. Además, al hacer clic en el ícono ubicado en la esquina inferior izquierda, podrás visualizar los tipos de actividades ingresadas previamente. Para actualizar o eliminar una actividad, utiliza las opciones disponibles en la interfaz correspondiente.
                        </p>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="activity-form m-0">
                        <h2 class="text-center">Actividades</h2>

                        <form action="../../../controller/formularioActividades.php" method="post">
                            <div class="form-group">
                            </div>
                            <div class="form-group" id="updateInput">
                                <label for="nombre_actividad_Antigua">Nombre de la Actividad a Modificar</label><br>
                                <input type="text" class="form-control" id="nombre_actividad_Antigua"
                                    name="nombre_actividad_Antigua">
                            </div>
                            <div class="form-group">
                                <label for="nombre_actividad">Nombre de la Actividad</label>
                                <input type="text" class="form-control" id="nombre_actividad" name="nombre_actividad">
                            </div>
                            <div class="form-group">
                                <label for="tipR">Monetización</label>
                                <select name="tipR" id="tipR" class="form-select mb-4">
                                    <option value="" hidden>Selecciona una opción</option>
                                    <?php foreach ($listaActividades as $monetizacion): ?>
                                        <option value="<?php echo $monetizacion['codigoTipodeMonetizacion']; ?>">
                                            <?php echo $monetizacion['TipodeMonetizacion']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <!-- <option value="" hidden>Selecciona una opción</option>
                                <option value="Retribución">Retribución</option>
                                <option value="No retribución">No retribución</option>
                                <option value="Voluntario">Voluntario</option -->
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="action" value="add" class="btn btn-light">Agregar</button>
                                <button type="submit" id="updateBtn" name="action" value="update"
                                    class="btn btn-light">Actualizar</button>
                                <button type="submit" name="action" value="delete"
                                    class="btn btn-light">Eliminar</button>
                            </div>
                        </form>


                        <a href="#openModal">
                            <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white"
                                class="bi bi-table" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
                            </svg>
                        </a>



                        <div id="openModal" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="table-primary" scope="col">Nombre</th>
                                            <th class="table-primary" scope="col">Monetización</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($formularioActividades as $codigoActividad) {
                                            echo '</td>';
                                            echo '<td>';
                                            echo $codigoActividad["tipoActividad"];
                                            echo '</td>';
                                            echo '<td>';
                                            echo $codigoActividad["TipodeMonetizacion"];
                                            echo '</td>';
                                            echo '</tr>';
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php require ("../../../includes/footer.php"); ?>
    </footer>



    <script src="\SalonComunal2024\public\build\JavaScript\validacionActividades.js"></script>

</body>

</html>