<?php

include("conexion.php");
$codigo = $_REQUEST ['id'];
$nombre = $_POST ['nombre'];
$proveedor = $_POST ['proveedor'];
$estado = $_POST ['estado'];
$cantidad = $_POST ['cantidad'];
$total = $_POST ['total'];
$fecha = $_POST ['fecha'];

$consulta = "UPDATE orden_compra set nombre = '$nombre', ID_proveedor = '$proveedor', estado = '$estado', cantidad = '$cantidad', total = '$total', fecha = '$fecha' WHERE ID_orden_compra = '$codigo'";
$conn->query($consulta);

if (mysqli_connect_errno() != 0) {

    echo "Error al modificar los datos de la orden" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else{
    mysqli_close($conn);
    header("location:orden_compra.php");
    exit;
}

?>