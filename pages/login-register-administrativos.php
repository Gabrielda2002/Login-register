<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      <link rel="stylesheet" href="../assets/css/styles-register-login-directivos.css">
      <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>

<body>
      <main>
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
            <div class="contenedor__todo">
                  <div class="caja__trasera">
                        <div class="caja__trasera-login">
                              <h3>¿Ya estas registrado?</h3>
                              <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                        </div>
                        <div class="caja__trasera-register">
                              <h3>¿Aun no estas registrado?</h3>
                              <button id="btn__registrarse">Registrarse</button>
                        </div>
                  </div>
                  <div class="contenedor__login-register">
                        <!-- * formulario login -->
                        <form action="../php/login_user.php" method="post" class="formulario__login">
                              <h2>Iniciar sesion</h2>
                              <input type="text" required name="numUser" placeholder="Numero de cedula">
                              <input type="password"  id="" required name="loginPassword" placeholder="Contraseña">
                              <button>Ingresar</button>
                        </form>
                        <!-- * formulario registro -->
                        <form action="../php/registro_administrativo.php" method="post" class="formulario__register">
                              <h2>Registrarse</h2>
                              <div class="input-container">
                                    <input  required type="text" placeholder="nombre" name="name" class="controlador">
                              </div>
                              <div class="input-container">
                                    <input type="text" required name="lastName1" class="controlador" placeholder="primer apellido">
                              </div>
                              <div class="input-container">
                                    <input type="text"required name="lastName2" class="controlador" placeholder="segundo apellido">
                              </div>
                              <div class="select-container">
                                    <label for="">
                                          tipo de documento.
                                    </label>
                                    <select required name="typeDoc" class="select" class="controlador">
                                          <option value="CC">Cedula de ciudadania</option>
                                          <option value="CE">Cedula de extrangeria</option>
                                          <option value="TI">Tarjeta de identidad</option>
                                    </select>
                              </div>
                              <div class="input-container">
                                    <input type="number" required placeholder="Numero de documento" name="num_doc" class="controlador">
                              </div>
                              <div class="input-container">
                                    <input type="date" required class="controlador" name="date" placeholder="fecha de nacimiento">
                              </div>
                              <div class="select-container">
                                    <label for="">
                                          Genero.
                                    </label>
                                    <select required name="gendere" class="select" class="controlador">
                                          <option value="Hombre">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                          <option value="Otro">Otro</option>
                                    </select>
                              </div>
                              <div class="input-container">
                                    <input type="number" required placeholder="numero telefonico" id="phone" name="phoneNumber" class="controlador" pattern="\d{10}">
                              </div>
                              <div id="validation_number-message"></div>
                              <div class="input-container">
                                    <input type="text" required class="controlador" name="emailPer" placeholder="Correo Personal">
                              </div>
                              <div class="input-container">
                                    <input type="text" required class="controlador" name="emailInst" placeholder="Correo Institucional">
                              </div>
                              <div class="password_validation-message"></div>
                              <div class="input-container">
                                    <input type="password" required class="controlador" name="password" id="password" placeholder="Contraseña">
                              </div>
                              <div class="buttom-container">
                                    <button type="submit">Registrarse</button>
                              </div>
                  </div>
                  </form>
            </div>
            </div>
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
      </main>
      <!-- script validacion contraseña -->
      <script src="../assets/js/password_validation.js"></script>
      <script src="../assets/js/script.js"></script>
      <!-- <script src="../assets/js/validation_save_data.js"></script> -->
      <script src=".././assets/js/validation_phone.js"></script>
</body>

</html>