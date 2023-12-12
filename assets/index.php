<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      <link rel="stylesheet" href="css/styles.css">
</head>

<body>
      <main>
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
                        <form action="" class="formulario__login">
                              <h2>Iniciar sesion</h2>
                              <input type="text" placeholder="Numero de cedula">
                              <input type="password" name="" id="" placeholder="Contraseña">
                              <button>Ingresar</button>
                        </form>
                        <!-- * formulario registro -->
                        <form action="../php/registro_administrativo.php" method="post" class="formulario__register">
                              <h2>Registrarse</h2>
                              <div class="input-container">
                                    <input type="text" placeholder="nombre" name="name" class="controlador">
                              </div>
                              <div class="input-container">
                                    <input type="text" name="lastName1" class="controlador" placeholder="primer apellido">
                              </div>
                              <div class="input-container">
                                    <input type="text" name="lastName2" class="controlador" placeholder="segundo apellido">
                              </div>
                              <div class="select-container">
                                    <label for="">
                                          tipo de documento.
                                    </label>
                                    <select name="typeDoc" id="select" class="controlador">
                                          <option value="CC">Cedula de ciudadania</option>
                                          <option value="CE">Cedula de extrangeria</option>
                                          <option value="TI">Tarjeta de identidad</option>
                                    </select>
                              </div>
                              <div class="input-container">
                                    <input type="number" placeholder="Numero de documento" name="num_doc" class="controlador">
                              </div>
                              <div class="input-container">
                                    <input type="date" class="controlador" name="date" placeholder="fecha de nacimiento">
                              </div>
                              <div class="select-container">
                                    <label for="">
                                          Genero.
                                    </label>
                                    <select name="gendere" id="select" class="controlador">
                                          <option value="Hombre">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                          <option value="Otro">Otro</option>
                                    </select>
                              </div>
                              <div class="input-container">
                                    <input type="number" placeholder="numero telefonico" name="phoneNumber" class="controlador">
                              </div>
                              <div class="input-container">
                                    <input type="text" class="controlador" name="emailPer" placeholder="Correo Personal">
                              </div>
                              <div class="input-container">
                                    <input type="text" class="controlador" name="emailInst" placeholder="Correo Institucional">
                              </div>
                              <div class="input-container">
                                    <input type="password" class="controlador" name="password" placeholder="Contraseña">
                              </div>
                              <div class="buttom-container">
                                    <button>Registrarse</button>
                              </div>
                  </div>
                  </form>
            </div>
            </div>
      </main>
      <script src="../assets/js/script.js"></script>
</body>

</html>