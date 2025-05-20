<?php

include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "DELETE FROM orden_compra where ID_orden_compra = '$codigo'";
$conn->query($consulta);

if(mysqli_connect_errno() !=0)
{
    echo "Error al eliminar el producto" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else {
    echo "Producto eliminado";
    mysqli_close($conn);
    header("location:orden_compra.php");
    exit;

}

?>