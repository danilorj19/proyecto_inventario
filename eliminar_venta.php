<?php

include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "DELETE FROM orden_venta where ID_orden_venta = '$codigo'";
$conn->query($consulta);

if(mysqli_connect_errno() !=0)
{
    echo "Error al eliminar la venta" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else {
    echo "Venta eliminado";
    mysqli_close($conn);
    header("location:ventas.php");
    exit;

}

?>