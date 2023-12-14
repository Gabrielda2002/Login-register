<?php
include "conexion_db.php";

// Verificar si los datos se han enviado correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $idEstudiante = $_POST['Id'];
    $tipoDocumento = $_POST['Tipo_Doc'];
    $numDocumento = $_POST['Num_Doc'];
    $nombreEstudiante = $_POST['nombre'];
    $primerApellido = $_POST['apellido'];
    $segundoApellido = $_POST['apellido2'];
    $fechaNacimiento = $_POST['fecha_nac'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correoPersonal = $_POST['correo-personal'];
    $correoInstitucional = $_POST['correo-institucional'];
    $idAsistencias = $_POST['id_asistencias'];
    $Sede = $_POST['id_sede'];
    $Jornada = $_POST['Jornada'];
    $numAula = $_POST['Num_Aula'];
    $passwardEstudiante = $_POST['contraseña'];

    // Cifrado de contraseña
    $password_hash = password_hash($passwardEstudiante, PASSWORD_DEFAULT);

    // Verificar si la conexión es exitosa
    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Consulta de inserción a la base de datos usando sentencias preparadas
    $sql = "INSERT INTO estudiante (id_estudiante, Tipo_Doc, Num_Doc, nombre_estudiante, Primer_apellido, segundo_apellido, fecha_nacimiento, sexo, Direccion, Telefono, Correo_Personal, Correo_Institucional, ID_ASISTENCIAS, ID_SEDE, Jornada, Num_Aula, passward_estudiante) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $sql);

    // Verificar si la preparación de la consulta es exitosa
    if (!$stmt) {
        die('Error en la preparación de la consulta: ' . mysqli_error($conexion));
    }

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "isssssssssssiiiss", $idEstudiante, $tipoDocumento, $numDocumento, $nombreEstudiante, $primerApellido, $segundoApellido, $fechaNacimiento, $sexo, $direccion, $telefono, $correoPersonal, $correoInstitucional, $idAsistencias, $Sede, $Jornada, $numAula, $password_hash);

    // Ejecutar la consulta
    $ejecutar = mysqli_stmt_execute($stmt);

    // Validación de datos ya registrados
    $query_duplicate = "SELECT * FROM estudiante WHERE Correo_Personal = ? OR Correo_Institucional = ?";
    $stmt_duplicate = mysqli_prepare($conexion, $query_duplicate);
    mysqli_stmt_bind_param($stmt_duplicate, "ss", $correoPersonal, $correoInstitucional);
    mysqli_stmt_execute($stmt_duplicate);

    $result_duplicate = mysqli_stmt_get_result($stmt_duplicate);

    if (mysqli_num_rows($result_duplicate) > 0) {
        echo "
            <script>
                alert('Correos electrónicos ya registrados.');
                window.location ='../pages/registers/estudiantes/register_estudiante.php';
            </script>
        ";
        exit();
    }

// Almacenar el mensaje de error antes de cerrar la conexión
$error_msg = mysqli_error($conexion);

// Cerrar la conexión y liberar recursos
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt_duplicate);
mysqli_close($conexion);

// Ejecutar la redirección solo si la inserción fue exitosa
if ($ejecutar) {
    echo "
        <script>
            alert('Usuario registrado con éxito');
            // // window.location ='../pages/registers/estudiantes/register_estudiante.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Hubo un error en el registro. Por favor, inténtalo de nuevo: ".$error_msg."');
            // //  window.location ='../pages/registers/estudiantes/register_estudiante.php';
        </script>
    ";
}

}
?>