<?php
include("conexion.php");

// Evitar salida antes del header
ob_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (!empty($usuario) && !empty($contrasena)) {
    $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
    
    if ($conexion->query($sql) === TRUE) {
        // Redirige a pagina.html después del registro
        header("Location: pagina.html");
        exit();
    } else {
        // Puedes activar esto si no te redirige y quieres debug
        // echo "Error al registrar: " . $conexion->error;
    }
} else {
    // echo "Por favor, completa todos los campos.";
}

// Finalizar buffer
ob_end_flush();
?>
