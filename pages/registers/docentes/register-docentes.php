<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes</title>
    <link rel="stylesheet" href="../../../assets/css/styles-register-docentes.css">
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

    <div class="div1">
        <section class="registrar">
            <h1>Registro Docente</h1>
            <form action="../../../php/register_docente.php" method="post" class="formulario__register">

                <p>
                    <input type="number" class="control" name="Id_profesores" id="Id_profesores" placeholder="ID" required>
                </p>

                <p>
                    <div class="tipo">
                        <select required name="tipo_documento" id="tipo_documento" class="controlador" type="text">
                            <option value="Cedula">Cedula de ciudadania</option>
                            <option value="Dni">DNI</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                </p>

                <p>
                    <input type="number" class="control" name="num_documento" id="num_documento" placeholder="Número de documento" required>
                </p>

                <p>
                    <input type="text" class="control" name="nombre_docente" id="nombre_docente" placeholder="Nombre" required>
                </p>

                <p>
                    <input type="text" class="control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" required>
                </p>

                <p>
                    <input type="text" class="control" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido" required>
                </p>

                <p>
                    <div class="tipo">
                        <select required name="sexo" id="sexo" class="controlador" type="text">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </p>

                <p>
                    <input type="number" class="control" name="telefono" id="telefono" placeholder="Teléfono" required>
                </p>

                <p>
                    <input type="number" class="control" name="ID_GRADO" id="ID_GRADO" placeholder="ID Grado" required>
                </p>

                <p>
                    <input type="email" class="control" name="Correo_institucional" id="Correo_institucional" placeholder="Correo Institucional" required>
                </p>

                <p>
                    <input type="email" class="control" name="Correo_personal" id="Correo_personal" placeholder="Correo Personal" required>
                </p>

                <p>
                    <input type="password" class="control" name="password_profesor" id="password" placeholder="Contraseña" required>
                </p>

                <div class="password_validation-message"></div>

                <button type="submit">Registrarse</button>
            </form>

            <p><a href="#">¿Ya tengo cuenta?</a></p>
        </section>
    </div>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../../../img/magen.png" alt="Logo">
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
