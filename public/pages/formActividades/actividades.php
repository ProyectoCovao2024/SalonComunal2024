<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <header>
       <?php require("header.php"); ?>
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
        <?php require("header.php"); ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
