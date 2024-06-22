<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/SalonComunal2024/public/build/assets/image/logo.ico">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/calendario/calendario.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/calendario/dycalendar.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/header/headerStyle.css">
    <link rel="stylesheet" href="http://localhost/SalonComunal2024/public/build/css/footer/footerStyle.css">
    <script defer src="http://localhost/SalonComunal2024/public/build/JavaScript/dycalendar.js"></script>

    <title>Calendario</title>
</head>
<body>
<?php
    require ('../../../includes/header.php')
?>
    <section>
        <div class="box">
            <div class="container">
                <div id="dycalendar">
                    <h1>Hola</h1>
                </div>
            </div>
        </div>
    </section>
    <script src="http://localhost/SalonComunal2024/public/build/JavaScript/dycalendar.js"></script>
    <script>
        dycalendar.draw({
            target: "#dycalendar",
            type: "month",
            highlighttargetdate: true,
            prevnextbutton: "show"
        });
    </script>

<footer>
        <?php
        require ('../../../includes/footer.php')
            ?>
    </footer>
</body>
</html>