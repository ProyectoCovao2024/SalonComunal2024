<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/terminosyCondiciones/TerminosYcondiciones.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Terminos y Condiciones</title>
</head>
<body>
    <header>
    <?php
        require("../../../includes/header.php");
    ?>    
    </header>
    <section class="TyC-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repellendus accusantium quidem natus, maxime voluptatem. Adipisci dignissimos, facilis, animi maxime sit, aut vero omnis numquam ex corporis voluptatibus accusamus neque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ipsa quaerat cumque dolore, fuga cupiditate est minima excepturi. Nesciunt dicta est odio inventore provident odit mollitia magni sapiente quo at?</p>
                        <div class="TyC-form">
                            <form>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light">Acepto Terminos y Condiciones</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        require("../../../includes/footer.php");
        ?>
    </footer>
</body>
</html>