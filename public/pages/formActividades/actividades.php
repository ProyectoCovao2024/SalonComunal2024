<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Acividades</title>
</head>

<body>

    <header>
        <?php 
            require("../../../includes/header.php");
        ?> 
    </header>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="p-3 bg-primary text-white rounded">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit quam perferendis deserunt tempore. Rerum dignissimos necessitatibus tenetur nesciunt id alias iure aspernatur sint? Dolore doloribus maxime harum, ullam obcaecati facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatem est culpa sint numquam, enim adipisci alias. Nulla, nihil totam, atque, aliquam optio officiis error laboriosam dicta repellat possimus consequuntur.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="php/handle_form.php" method="post">
                    <div class="form-group">
                        <label for="codigoActividad">Codigo Actividad</label>
                        <input type="text" class="form-control" id="codigoActividad" name="codigoActividad">
                    </div>
                    <div class="form-group">
                        <label for="nombreActividad">Nombre Actividad</label>
                        <input type="text" class="form-control" id="nombreActividad" name="nombreActividad">
                    </div>
                    <div class="form-group">
                        <label for="tipoActividad">Tipo Actividad</label>
                        <input type="text" class="form-control" id="tipoActividad" name="tipoActividad">
                    </div>
                    <button type="submit" name="action" value="Agregar" class="btn btn-primary">Agregar</button>
                    <button type="submit" name="action" value="Actualizar" class="btn btn-secondary">Actualizar</button>
                    <button type="submit" name="action" value="Eliminar" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <?php require("../../../includes/footer.php"); ?>
    </footer>

</body>
</html>
