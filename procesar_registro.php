<?php
include("conexion.php");

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];


// Insertar en la base de datos
$sql = "INSERT INTO usuario (nombre, apellido, documento, clave, correo, rol)
        VALUES ('$nombre', '$apellido', '$documento', '$clave', '$correo', '$rol')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='inicio_sesion.php'>Iniciar sesión</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>