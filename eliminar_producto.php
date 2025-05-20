<?php

include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "DELETE FROM producto where ID_producto = '$codigo'";
$conn->query($consulta);

if(mysqli_connect_errno() !=0)
{
    echo "Error al eliminar el producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else {
    echo "Producto eliminado";
    mysqli_close($conn);
    header("location:productos.php");
    exit;

}

?>