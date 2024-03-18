<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
//$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//agregamos  $tipo_de_usuario = $_POST['tipo_de_usuario'];
//$tipo_de_usuario = $_POST['tipo_de_usuario'];
//quitar encriptado
$contrasena = hash('sha512', $contrasena);
//$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo = '$correo' and contrasena = '$contrasena'");
$consulta_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo = '$correo' and contrasena = '$contrasena' ");
//OR usuario = '$usuario'
//if(mysqli_num_rows($validar_login) > 0){
//    //$_SESSION ['usuario'] = $correo;
//    $_SESSION ['usuario'] = $correo;
//    header("location: ../bienvenida.php");
//exit;
//}
if (mysqli_num_rows($consulta_usuario) > 0) {
    $row = mysqli_fetch_assoc($consulta_usuario);
    $tipo_usuario = $row['tipo_usuario'];

    $_SESSION['nom_usuario'] = $correo;

    // Añade la lógica para redirigir según el tipo de usuario
    switch ($tipo_usuario) {
        case 'administrador':
            header('Location: /main/principal.php');
            break;
        case 'empleado':
            header('Location: ../main/principal.php');
            break;

        default:
            echo "Tipo de usuario no válido";
            break;
    }
    exit;
} else {
    echo '
           <script>
            alert("Usuario no existente, porfavor verifique los datos");
            //window.location = "../index.php"
           </script>
        ';
    exit();
}

?>