

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--<link rel="stylesheet" href="assets/CSS/estilos.css">-->
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="Sesion/login_usuario_be.php" method = "POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="password" placeholder="Contraseña"     name = "contrasena">
                        
                        
                        <button>Regístrarse</button>
                    </form>

                    <!--Register-->
                    <form action="Sesion/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo"      name = "nombre">
                        <input type="text" placeholder="Apellido paterno"     name = "apellido_pat"	>
                        <input type="text" placeholder="Apellido materno"     name = "apellido_mat">
                        <input type="text" placeholder="Correo Electronico"   name = "correo">
                        <input type="text" placeholder="Usuario"              name = "nom_usuario">
                        <input type="password" placeholder="Contraseña"       name = "contrasena">
                        <h2></h2>
                        <label for="tipo_de_usuario">Selecciona tu tipo de usuario:</label>
                        <select id="tipo_usuario" name="tipo_usuario" onchange="actualizarCuadro()">
                            <option value="administrador">Administrador</option>
                            <option value="empleado">Empleado</option>
                        </select>
                        <button>Regístrarse</button>
                                             
                    </form>
                </div>
            </div>

        </main>
        <!--<script src="assets/js/script.js"></script>-->
        <script src="js/script.js"></script>
</body>
</html>