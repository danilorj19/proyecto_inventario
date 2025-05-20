<?php

include("conexion.php");

$codigo = $_REQUEST ['id'];
$nombre = $_POST ['nombre'];
$cantidad = $_POST ['stock'];
$precio = $_POST ['precio'];
$descripcion = $_POST ['descripcion'];
$fecha = $_POST ['fecha'];

$consulta = "UPDATE producto set nombre = '$nombre', stock = '$cantidad', precio = '$precio', descripcion = '$descripcion', fecha = '$fecha' WHERE ID_producto = '$codigo'";
$conn->query($consulta);

if (mysqli_connect_errno()!=0){

    echo "Error al modificar los datos del producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:productos.php");
    exit;
}

?>