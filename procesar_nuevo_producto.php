<?php

include("conexion.php");

$nombre = $_POST ['nombre'];
$cantidad = $_POST ['stock'];
$precio = $_POST ['precio'];
$descripcion = $_POST ['descripcion'];
$fecha = $_POST ['fecha'];

$conn->query("INSERT INTO producto (nombre, stock, precio, descripcion, fecha) VALUES ('$nombre', '$cantidad', '$precio', '$descripcion', '$fecha')");

if (mysqli_connect_errno()!=0){

    echo "Error al modificar los datos del producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:productos.php");
    exit;
}

?>