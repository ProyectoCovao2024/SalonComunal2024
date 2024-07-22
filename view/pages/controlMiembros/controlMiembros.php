<?php 
require ("../../../includes/url.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="<?php echo urlLocal?>/public/build/css/formReservas/form-reservaciones.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/header/headerStyle.css">
    <link rel="icon" type="image/x-icon" href="<?php echo urlLocal?>/public/build/assets/image/logo.ico">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/footer/footerStyle.css">
    <link rel="stylesheet" href="<?php echo urlLocal?>/public/build/css/formMiembros/miembrstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Control de miembros</title>
</head>
<body>
    <header>
        <?php
        require("../../../includes/header2.php");
        ?>
    </header>
    

    <h1 class="text-center p-3">Control d<span>e Miembros</span></h1>

    <div class="container-fluid row">
        <form id="crudForm" class="col-4 p-3 styleform" method="POST">
            <div class="h3style"><h3 class="text-center">Formulario</h3></div>
            <?php
            // include("modelo/conexion.php");
            // include("controlador/registro_auto.php");
            // include("controlador/eliminar_fulldatos.php");
            ?>
            <div class="mb-3">
                <label for="marca" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Cédula</label>
                <input type="number" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="capacidadmotor" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label for="transmision" class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <div class="mb-3">
                <label for="traccion" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
            <button type="button" class="btn btn-secondary" onclick="limpiarCampos()"><i class='bx bx-message-square-x'></i></button>
            <div id="multiActionButton" class="d-none">
                    <button onclick="return fulleliminar()" type="submit" name="btneliminar" class="btn btn-danger">Eliminar Todos los Datos Seleccionados</button>
            </div>
        </form>

        <div class="col-8 p-4">
            <?php
            // include("controlador/eliminar_auto.php");
            ?>
            <form method="POST">
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th scope="col"><input type="checkbox" onclick="seleccionarTodos(this)"></th>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <td><input type="checkbox" name="selectAuto[]"  onclick="toggleActionButtons()"></td>
                        <td>1</td>
                        <td>Example</td>
                        <td>000000000</td>
                        <td>Example</td>
                        <td>99999999</td>
                        <td>Example@gmial</td>
                        <td>        
                            <a class="btn btn-small btn-warning"><i class='bx bx-edit'></i></a>
                            <a onclick="return eliminar()" class="btn btn-small btn-danger"><i class='bx bxs-trash'></i></a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </form>
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