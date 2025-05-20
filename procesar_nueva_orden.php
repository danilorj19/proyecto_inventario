<?php

include("conexion.php");

$nombre = $_POST ['nombre'];
$proveedor = $_POST ['proveedor'];
$estado = $_POST ['estado'];
$cantidad = $_POST ['cantidad'];
$total = $_POST ['total'];
$fecha = $_POST ['fecha'];

$conn->query("INSERT INTO orden_compra (nombre, ID_proveedor, estado, cantidad, total, fecha) VALUES ('$nombre', '$proveedor','$estado', '$cantidad', '$total', '$fecha')");

if (mysqli_connect_errno()!=0){

    echo "Error al modificar los datos del producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:orden_compra.php");
    exit;
}

?>