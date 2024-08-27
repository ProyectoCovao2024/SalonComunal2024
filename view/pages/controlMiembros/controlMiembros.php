<?php 
require ("../../../includes/url.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<button class="btnstyle form-toggle justify-content-center" onclick="toggleForm()">Mostrar/Ocultar Formulario</button>
<form id="crudForm" class="col-12 col-lg-4 p-3 styleform" method="POST">
    <div class="h3style mb-4">
        <h3 class="text-center">Formulario</h3>
    </div>
    
    <!-- Nombre y Apellidos ¡Nuevos Cambios! -->
    <div class="mb-3 d-flex justify-content-between">
        <div class="w-50 me-2 form-floating">
            <input type="text" class="form-control styled-input" name="nombre" placeholder="Nombre">
            <label for="nombre" class="form-label">Nombre</label>
        </div>
        <div class="w-50 ms-2 form-floating">
            <input type="text" class="form-control styled-input" name="apellidos" placeholder="Apellidos">
            <label for="apellidos" class="form-label">Apellidos</label>
        </div>
    </div>

    <!-- Grupo Cédula y Celular ¡Nuevos Cambios! -->
    <div class="mb-3 d-flex justify-content-between">
        <div class="w-50 me-2 form-floating">
            <input type="text" class="form-control styled-input" name="cedula" pattern="\d*" inputmode="numeric" placeholder="Cédula">
            <label for="cedula" class="form-label">Cédula</label>
        </div>
        <div class="w-50 ms-2 form-floating">
            <input type="text" class="form-control styled-input" name="celular" pattern="\d*" inputmode="numeric" placeholder="Celular">
            <label for="celular" class="form-label">Celular</label>
        </div>
    </div>
    
    <!-- Dirección ¡Nuevos Cambios! -->
    <div class="mb-3 form-floating">
        <input type="text" class="form-control styled-input" name="direccion" placeholder="Dirección">
        <label for="direccion" class="form-label">Dirección</label>
    </div>

    <!-- Puesto y Rol ¡Nuevos Cambios! -->
    <div class="mb-3 d-flex justify-content-between">
        <div class="w-50 me-2 form-floating">
            <input type="text" class="form-control styled-input" name="puesto" placeholder="Puesto">
            <label for="puesto" class="form-label">Puesto</label>
        </div>
        <div class="w-50 ms-2 form-floating">
            <input type="text" class="form-control styled-input" name="rol" placeholder="Rol">
            <label for="rol" class="form-label">Rol</label>
        </div>
    </div>

    <!-- Correo y Contraseña ¡Nuevos Cambios! -->
    <div class="mb-3 d-flex justify-content-between">
        <div class="w-50 me-2 form-floating">
            <input type="email" class="form-control styled-input" name="correo" placeholder="Correo">
            <label for="correo" class="form-label">Correo</label>
        </div>
        <div class="w-50 ms-2 form-floating">
            <input type="password" class="form-control styled-input" name="contrasena" placeholder="Contraseña">
            <label for="contrasena" class="form-label">Contraseña</label>
        </div>
    </div>

    <button type="submit" class="btnstyle" name="btnregistro" value="ok">Registrar</button>
    <button type="button" class="btnstyle" onclick="limpiarCampos()"><i class='bx bx-message-square-x'></i></button>
</form>




    <div class="col-12 col-lg-8 p-4 table-responsive">
        <?php
        // include("controlador/eliminar_auto.php");
        ?>
        <div id="multiActionButton" class="d-none">
            <button onclick="return fulleliminar()" type="submit" name="btneliminar" class="btn btn-danger" id="deleteSelectedButton">Eliminar seleccionados</button>
        </div>
        <form method="POST">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col"><input type="checkbox" onclick="seleccionarTodos(this)"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Miembro Cómite</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Puesto</th>
                        <th scope="col" class="d-none d-lg-table-cell">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="selectAuto[]" onclick="toggleActionButtons()"></td>
                        <td>1</td>
                        <td>Example Example Example</td>
                        <td>0000-0000</td>
                        <td>Example</td>
                        <td class="d-none d-lg-table-cell">Example</td>
                        <td>
                            <a class="btnstyle btn-small"><i class='bx bx-edit'></i></a>
                            <a onclick="return eliminar()" class="btnstyle btn-small"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="selectAuto[]" onclick="toggleActionButtons()"></td>
                        <td>1</td>
                        <td>Example Example Example</td>
                        <td>0000-0000</td>
                        <td>Example</td>
                        <td class="d-none d-lg-table-cell">Example</td>
                        <td>
                            <a class="btnstyle btn-small"><i class='bx bx-edit'></i></a>
                            <a onclick="return eliminar()" class="btnstyle btn-small"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="selectAuto[]" onclick="toggleActionButtons()"></td>
                        <td>1</td>
                        <td>Example Example Example</td>
                        <td>0000-0000</td>
                        <td>Example</td>
                        <td class="d-none d-lg-table-cell">Example</td>
                        <td>
                            <a class="btnstyle btn-small"><i class='bx bx-edit'></i></a>
                            <a onclick="return eliminar()" class="btnstyle btn-small"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="selectAuto[]" onclick="toggleActionButtons()"></td>
                        <td>1</td>
                        <td>Example Example Example</td>
                        <td>0000-0000</td>
                        <td>Example</td>
                        <td class="d-none d-lg-table-cell">Example</td>
                        <td>
                            <a class="btnstyle btn-small"><i class='bx bx-edit'></i></a>
                            <a onclick="return eliminar()" class="btnstyle btn-small"><i class='bx bxs-trash'></i></a>
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
    <script src="http://localhost/SalonComunal2024/public/build/JavaScript/controlmiembro.js"></script>
</body>


</html>