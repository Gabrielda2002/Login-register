<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link rel="stylesheet" href="../../../assets/css/style-studiantes.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>

<body>
<header class="header">
        <div class="logo">
            <img src="../../../img/magen.png" alt="">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="../../../index.html">inicio</a></li>
                <li><a href="#">noticias</a></li>
                <li><a href="#">galeria</a></li>
                <li><a href="#">contactos</a></li>
                <li><a href="#">About</a></li>
           </ul>            
        </nav>
        <a class="icon" href="pages/login-register-administrativos.php"><img src="../../../img/icon.png" alt="" width="50"></a>
        <a class="lupa" href="#"><img src="../../../img/lupa.png" alt="" width="50"></a>
        <a class="ajustes" href="#"><img src="../../../img/ajustes.png" alt="" width="50"></a>
    </header>
    <section class="registrar">
        <h1>Registro Estudiante</h1>
        <form action="../../../php/register-estudiante-db.php" method="post" class="formulario__register">

            <p>
                <input type="number" class="control" name="Id" id="Id_Estudiante" placeholder="Codigo">
            </p>

            <p>
                <div class="tipo">
                    <select required name="Tipo_Doc" id="Tipo_Doc" class="controlador">
                        <option value="Cedula">Cedula de ciudadania</option>
                        <option value="Dni">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
            </p>

            <p>
                <input type="number" class="control" name="Num_Doc" id="num_documento" placeholder="Numero de documento">
            </p>

            <p>
                <input type="text" class="control" name="nombre" id="nombre_estudiante" placeholder="Nombre">
            </p>

            <p>
                <input type="text" class="control" name="apellido" id="Primer_apellido" placeholder="Primer apellido">
            </p>

            <p>
                <input type="text" class="control" name="apellido2" id="segundo_apellido" placeholder="Segundo apellido">
            </p>

            <p>
                <input type="date" class="control" name="fecha_nac" id="fecha_nacimiento" placeholder="Fecha de nacimiento">
            </p>

            <p>
                <input type="text" class="control" name="sexo" id="Sexo" placeholder="sexo">
            </p>

            <p>
                <input type="text" class="control" name="direccion" id="Direccion" placeholder="Direccion">
            </p>

            <p>
                <input type="number" class="control" name="telefono" id="Telefono" placeholder="Telefono">
            </p>

            <p>
                <input type="email" class="control" name="correo-personal" id="Correo_Personal" placeholder="Correo personal">
            </p>

            <p>
                <input type="email" class="control" name="correo-institucional" id="Correo_Institucional" placeholder="Correo institucional">
            </p>

            <p>
                <input type="number" class="control" name="id_asistencias" id="ID_ASISTENCIAS" placeholder="Id asistencias">
            </p>

            <p>
                <input type="number" class="control" name="id_sede" id="ID_SEDE" placeholder="Id sede">
            </p>

            <p>
                <div>
                    <select id="Tipo_Doc" name="Jornada" class="controlador">
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                    </select>
                </div>
            </p>

            <p>
                <input type="number" class="control" name="Num_Aula" id="Num_Aula" placeholder="Aula">
            </p>

            <p>
                <input type="password" class="control" name="contraseña" id="password" placeholder="Contraseña" required>
            </p>
            <div class="password_validation-message"></div>

            <input type="submit" value="registrar" name="botons" class="botons">
            <input type="reset" value="borrar" name="botons" class="botons"><br>
            <p><a href="#">¿Ya tengo cuenta?</a></p>
        </form>

    </section>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/magen.png" alt="Logo">
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
    <script src="../../../assets/js/password_validation.js"></script>
</body>
</html>
