<?php
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['user'])) {
    header("location: index.php");
    exit();
    
}

var_dump($_SESSION);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <h1>Bienvenido, <?php echo $_SESSION['user']; ?></h1>
    <!-- El resto del contenido de la página -->

</body>

</html>
