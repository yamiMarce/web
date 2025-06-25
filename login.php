<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    // Redirige a pagina.html si el login es correcto
    header("Location: pagina.html");
    exit();
} else {
    echo "Usuario o contraseña incorrectos";
}
?>
