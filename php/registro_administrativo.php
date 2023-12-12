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

    $query = "INSERT INTO directivos (tipo_documento, num_documento, nombre, primer_apellido, segundo_apellido, telefono, passward_directivo, genero, correoInst, correoPer)
              VALUES ('$tipoDoc', '$numeroDoc', '$nombre', '$apellido1', '$apellido2', '$numeroTel','$password', '$genero', '$correoInst', '$correoPer')";

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
            alert('Hubo un error en el registro por favor intentalo otra vez');
            window.location ='../assets/index.php';
        </script>
    ";
    }
    mysqli_close($conexion);
?>