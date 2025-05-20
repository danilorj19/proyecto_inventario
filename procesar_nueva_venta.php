<?php

include("conexion.php");

$nombre = $_POST ['nombre_producto'];
$cantidad = $_POST ['cantidad_venta'];
$precio = $_POST ['precio_total'];
$fecha = $_POST ['fecha'];

$conn->query("INSERT INTO orden_venta (nombre_producto, cantidad_venta, precio_total, fecha) VALUES ('$nombre', '$cantidad', '$precio', '$fecha')");

if (mysqli_connect_errno()!=0){

    echo "Error al modificar los datos del producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:ventas.php");
    exit;
}

?>