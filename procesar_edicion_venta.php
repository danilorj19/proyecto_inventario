<?php

include("conexion.php");

$codigo = $_REQUEST ['id'];
$nombre = $_POST ['nombre_producto'];
$cantidad = $_POST ['cantidad_venta'];
$precio = $_POST ['precio_total'];
$fecha = $_POST ['fecha'];

$consulta = "UPDATE orden_venta set nombre_producto = '$nombre', cantidad_venta = '$cantidad', precio_total = '$precio', fecha = '$fecha' WHERE ID_orden_venta = '$codigo'";
$conn->query($consulta);

if (mysqli_connect_errno()!=0){

    echo "Error al modificar los datos de la venta" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:ventas.php");
    exit;
}

?>