<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido_pat= $_POST["apellido_pat"];
$apellido_mat = $_POST["apellido_mat"];
$correo = $_POST["correo"];
$nom_usuario = $_POST["nom_usuario"];
$contrasena = $_POST["contrasena"];
$tipo_usuario = $_POST["tipo_usuario"];

//Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre, apellido_pat, apellido_mat, correo, nom_usuario, contrasena, tipo_usuario)
              VALUES('$nombre', '$apellido_pat', '$apellido_mat', '$correo', '$nom_usuario', '$contrasena','$tipo_usuario')";

/*Verificar que no se repita la base de datos de usuarios*/
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
            <script>
                alert("El correo ya esta registrado");
                window.location = "../index.php";

            </script>
            ';
    exit();
}
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nom_usuario='$nom_usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
            <script>
                alert("El usuario ya esta registrado");
                window.location = "../index.php";

            </script>
            ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
} else {
    echo '
        <script>
        alert("Intentalo de nuevo, usuario no registrado");
        window.location = "../index.php";
        </script>
        ';
}

myqli_close($conexion);
?>