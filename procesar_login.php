<?php
include("conexion.php");
session_start();


$documento = $_POST['documento'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuario WHERE documento='$documento' AND clave='$clave'";
$resultado = $conn->query($sql);

if ($resultado->num_rows === 1) {
    $_SESSION['usuario'] = $documento;
    header("Location: menu.php");
    exit();
} else {
    echo "Usuario o contraseña incorrectos. <a href='inicio_sesion.php'>Intentar nuevamente</a>";
}

$conn->close();
?>