<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    // Si no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: ../assets/index.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="../assets/css/style_welcome_user.css">

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
        <div class="logo">
            <img src="../img/magen.png" alt="">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="../index.html">inicio</a></li>
                <li><a href="#">noticias</a></li>
                <li><a href="#">galeria</a></li>
                <li><a href="#">contactos</a></li>
                <li><a href="#">About</a></li>
           </ul>            
        </nav>
        <a class="icon" href="pages/login-register-administrativos.php"><img src="../img/icon.png" alt="" width="50"></a>
        <a class="lupa" href="#"><img src="../img/lupa.png" alt="" width="50"></a>
        <a class="ajustes" href="#"><img src="../img/ajustes.png" alt="" width="50"></a>
    </header>
    <form action="../php/logout.php" method="post">
        <button type="submit">Cerrar Sesión</button>
    </form>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/magen.png" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p><a href="#">Chat en linea</a></p>
                <p><a href="#">Correo notificaciones: GEJED@gmail.com</a></p>
                <p><a href="#">Política de privacidad</a></p>
                <p><a href="#">Ayuda?</a></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>GEJED</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="/assets/js/inactivity_timeout.js"></script>

</body>
</html>
