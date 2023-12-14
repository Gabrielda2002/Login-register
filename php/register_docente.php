<?php
    include "conexion_db.php";
    
        $Id_profesores=$_POST["Id_profesores"];
        $tipo_documento=$_POST["tipo_documento"];
        $num_documento=$_POST["num_documento"];
        $nombre_docente=$_POST["nombre_docente"];
        $primer_apellido=$_POST["primer_apellido"];
        $segundo_apellido=$_POST["segundo_apellido"];
        $sexo=$_POST["sexo"];
        $telefono=$_POST["telefono"];
        $ID_GRADO=$_POST["ID_GRADO"];
        $Correo_Institucional=$_POST["Correo_institucional"];
        $correo_personal=$_POST["Correo_personal"];
        $passward_profesor=$_POST["password_profesor"];

        // * cifrado de contraseña

        $password_hash = password_hash($passward_profesor, PASSWORD_DEFAULT);

        // * insercion de los datos a la base de datos
        $sql = "INSERT INTO profesores (Id_profesores, tipo_documento, num_documento, nombre_docente, primer_apellido, segundo_apellido, sexo, telefono, ID_GRADO, Correo_institucional, Correo_personal, passward_profesor) 
        values ('$Id_profesores', '$tipo_documento', '$num_documento', '$nombre_docente', '$primer_apellido', '$segundo_apellido', '$sexo', '$telefono', '$ID_GRADO', '$Correo_Institucional', '$correo_personal', '$password_hash')";

        // * validacion de datos ya registrados
        $query_duplicate = "SELECT * FROM profesores WHERE Correo_personal ='$correo_personal' OR Correo_institucional = '$Correo_Institucional'";
        $result = mysqli_query($conexion, $query_duplicate);

        if (mysqli_num_rows($result) > 0) {
            echo "
            <script>
                alert('Correo electronicos ya registrados.');
                window.location ='../pages/registers/docentes/register-docentes.php';
            </script>
        ";
        exit();
        }

        //* ejecucion de la insersion a la base de datos

        $ejecutar = mysqli_query($conexion, $sql);

        if ($ejecutar) {
            echo "
                <script>
                    alert('Usuario registrado con exito');
                    window.location ='../pages/registers/docentes/register-docentes.php';
                </script>
            ";
        }else {
            echo "
            <script>
                alert('Hubo un error en el registro por favor intentalo otra vez:". mysqli_error($conexion). "');
                window.location ='../pages/registers/docentes/register-docentes.php';
            </script>
        ";
        }
        mysqli_close($conexion);
?>