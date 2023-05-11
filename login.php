<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link de iconos en fontawesome -->
        <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- link de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- estilos de login y registro -->
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <!-- validaciones de java script -->
    <script type='text/javascript' src=".\js\validaciones.js"></script>
    <script type='text/javascript' src="./js/mostrar.js"></script>
    <!-- link de Sweetalert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="./img/logo/icono.png">
    <title>Barber Hernan|Login</title>
</head>
<body>
    <!-- login y registro -->
    <div class="inicio">
        <div class="container" id="main">
            <!-- registrar -->
            <div class="sign-up">
                <?php
                    if (isset($_GET["nombre"])) {
                ?>
                <form action="./validaciones/agregarClientes.php" method="post">
                    <h1>Crear Una Cuenta</h1>
                    <div class="social-container">
                        <a href="" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <p>Rellene todos los campos</p>
                    <input value="<?php echo $_GET["nombre"] ?>" autocomplete="on" onchange="nombre1()" type="text" name="nombre" id="nombre"
                        placeholder="Nombres" required>
                    <input value="<?php echo $_GET["apellido"] ?>" autocomplete="on" onchange="apellido1()" type="text" name="apellido" id="apellido"
                        placeholder="Apellidos" required>
                    <input value="<?php echo $_GET["direccion"] ?>" autocomplete="on" onchange="direccion1()" type="text" name="direccion" id="direccion"
                        placeholder="Dirección" required>
                    <input value="<?php echo $_GET["tel"] ?>" autocomplete="on" onchange="telefono1()" type="number" name="telefono" id="telefono"
                        inputmode="tel" placeholder="Numero Telefónico" required>
                    <input value="<?php echo $_GET["correo"] ?>" autocomplete="on" onchange="ValidacionCorreo()" type="email" name="email_registro"
                        id="correo" placeholder="Correo" required>
                    <input value="<?php echo $_GET["contrasena"] ?>" onchange="contraseña()" type="password" name="clave" id="clave"
                        placeholder="Ingresar su clave" required>
                    <span>
                        <i class="fa fa-eye" style="color:#D8D8D8" id="eye"></i>
                    </span>
                    <input value="<?php echo $_GET["contrasena"] ?>" onchange="verificarContraseña()" type="password" name="clave_c" id="clave_c"
                        placeholder="Confirma su clave" required>
                    <span class="eyes">
                        <i class="fa fa-eye" style="color:#D8D8D8" id="eye_c"></i>
                    </span>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto Términos Y Condiciones
                        </label>
                    </div>
                    <button name="crear" type="submit">Crear</button>
                    <br><br>
                </form>
                <?php
                    } else {
                ?>
                <form action="./validaciones/agregarClientes.php" method="post">
                    <h1>Crear Una Cuenta</h1>
                    <div class="social-container">
                        <a href="" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <p>Rellene todos los campos</p>
                    <input autocomplete="on" onchange="nombre1()" type="text" name="nombre" id="nombre"
                        placeholder="Nombres" required>
                    <input autocomplete="on" onchange="apellido1()" type="text" name="apellido" id="apellido"
                        placeholder="Apellidos" required>
                    <input autocomplete="on" onchange="direccion1()" type="text" name="direccion" id="direccion"
                        placeholder="Dirección" required>
                    <input autocomplete="on" onchange="telefono1()" type="number" name="telefono" id="telefono"
                        inputmode="tel" placeholder="Numero Telefónico" required>
                    <input autocomplete="on" onchange="ValidacionCorreo()" type="email" name="email_registro"
                        id="correo" placeholder="Correo" required>
                    <input data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover focus" data-bs-content="La contraseña debe tener: Una mayuscula, una minuscula, un número y 7 o mas caracteres de longitud" onchange="contraseña()" type="password" name="clave" id="clave"
                        placeholder="Ingresar su clave" required>
                    <span>
                        <i class="fa fa-eye" style="color:#D8D8D8" id="eye"></i>
                    </span>
                    <input onchange="verificarContraseña()" type="password" name="clave_c" id="clave_c"
                        placeholder="Confirma su clave" required>
                    <span class="eyes">
                        <i class="fa fa-eye" style="color:#D8D8D8" id="eye_c"></i>
                    </span>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto Términos Y Condiciones
                        </label>
                    </div>
                    <button name="crear" type="submit">Crear</button>
                    <br><br>
                </form>
                <?php
                    }
                ?>
            </div>

            <!-- iniciar sesión -->
            <div class="sign-in">
                <form action="./validaciones/iniciosesion.php" method="post">
                    <h1>Barber Hernan</h1>
                    <h3>Iniciar Sesión</h3>
                    <div class="div social-container">
                        <a href="https://es-la.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/?lang=es" class="social"><i class="fa fa-twitter"></i></a>
                    </div>
                    <p>Rellene todos los campos</p>
                    <input type="email" name="email" placeholder="Correo" required>
                    <input type="password" name="clave_inicio" placeholder="Clave" id="clave_inicio" required>
                    <span class="Eye">
                        <i class="fa fa-eye" style="color:#D8D8D8" id="eye_inicio"></i>
                    </span>
                    <button name="inicio" type="submit">Iniciar Sesión</button>
                    <div class="iniciar">
                        <a href="./index.php">Iniciar Sin Cuenta</a>
                    </div>
                </form>
            </div>

            <div class="div overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1>Bienvenido</h1>
                        <p>Si ya estas registrado inicia sesión</p>
                        <button id="signIn">Iniciar Sesión</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Hola</h1>
                        <p>¿Aún no te has Registrado?</p>
                        <p>Te invito a que te registres para que puedas agendar tu cita con nosotros</p>
                        <button id="signUp">Crear Una Cuenta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const main = document.getElementById('main');
    signUpButton.addEventListener('click', () => {
        main.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        main.classList.remove("right-panel-active");
    });
    </script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js
"></script>


</body>
</html>