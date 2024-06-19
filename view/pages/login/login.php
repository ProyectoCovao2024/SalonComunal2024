<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../../public/build/css/login/loginStyle.css">
<link rel="stylesheet" href="../../../public/build/css/header/headerStyle.css">
<link rel="stylesheet" href="../../../public/build/css/footer/footerStyle.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Login</title>
</head>
<body>

    <?php
    require(__DIR__."../../../../includes/header.php");
    ?>

    <main>
        <div class="contenedor__todo">
            <div class="formu">
                <form class="formu_login" method="post">
                    <div class="img"><i class='bx bx-user-circle'></i></div>
                    <input type="text" id="email" placeholder="Correo Electrónico" name="usuario">
                    <input type="password" id="password" placeholder="Contraseña" name="password">
                    <button name="btnIngresar" value="Iniciar Sesion">Inciar sesión</button>
                </form>
            </div>
              
            <div class="card">
                <div class="card_login">
                    <h3>Bienv<span>enido</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit maxime laudantium quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, iure dolores assumenda, nobis, illum ipsam nemo sed voluptatibus excepturi ex ea sequi veniam? Optio dignissimos velit accusamus impedit ut vero?</p>
                </div>
                </div>
            </div>
    </main> 
     
    <footer class="footer">
        <?php
    require(__DIR__."../../../../includes/footer.php")
    ?>
    </footer>

</body>
</html>