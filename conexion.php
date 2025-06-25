<?php
$conexion = new mysqli("localhost", "root", "", "saeko");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>