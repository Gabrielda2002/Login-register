<?php

    include 'conexion_db.php';

    $nombre = $_POST['name'];
    $apellido1 = $_POST['lastName1'];
    $apellido2 = $_POST['lastName2'];
    $tipoDoc = $_POST['typeDoc'];
    $numeroDoc = $_POST['num_doc'];
    // $fechaNacimiento = $_POST['date'];
    $genero = $_POST['gendere'];
    $numeroTel = $_POST['phoneNumber'];
    $correoInst = $_POST['emailInst'];
    $correoPer = $_POST['emailPer'];
    $password = $_POST['password'];

    // * cifrado de contraseña

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // * Validacion para evidar datos duplicados
    $query = "INSERT INTO directivos (tipo_documento, num_documento, nombre, primer_apellido, segundo_apellido, telefono, passward_directivo, genero, correoInst, correoPer)
              VALUES ('$tipoDoc', '$numeroDoc', '$nombre', '$apellido1', '$apellido2', '$numeroTel','$password_hash', '$genero', '$correoInst', '$correoPer')";


    $query_duplicate = "SELECT * FROM directivos WHERE correoInst ='$correoInst' OR correoPer = '$numeroDoc'";
    $result = mysqli_query($conexion, $query_duplicate);

    if (mysqli_num_rows($result) > 0) {
        echo "
        <script>
            alert('El correo electronico o numero de documento ya se encuentran registrados.');
            window.location ='../assets/index.php';
        </script>
    ";
    exit();
    }
    // * ejecucion de isercion a la base de datos
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo "
            <script>
                alert('Usuario registrado con exito');
                window.location ='../assets/index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('Hubo un error en el registro por favor intentalo otra vez:". mysqli_error($conexion). "');
            window.location ='../assets/index.php';
        </script>
    ";
    }
    mysqli_close($conexion);
?>