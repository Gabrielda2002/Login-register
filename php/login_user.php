<?php
    session_start();

    include "conexion_db.php";

    $user = $_POST['numUser'];
    $contraseña = $_POST['loginPassword'];

    $query = "SELECT * FROM directivos WHERE num_documento = '$user' AND passward_directivo = '$contraseña'";
    $validate_login = mysqli_query($conexion, $query);
    
    if (mysqli_num_rows($validate_login) > 0) {
        $_SESSION['user'] = $user;
        header("Location: ../assets/user_welcome.php");
        exit();
    }else{
        echo '
        <script>
            alert("El usuario no existe, por favor verifique los datos ingresados");
            window.location = "../assets/index.php";
        </script>
        
        ';
        exit(); 
    }
?>