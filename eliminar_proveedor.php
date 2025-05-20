<?php

include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "DELETE FROM proveedor where ID_proveedor = '$codigo'";
$conn->query($consulta);

if(mysqli_connect_errno() !=0)
{
    echo "Error al eliminar el proveedor" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else {
    echo "Proveedor eliminado";
    mysqli_close($conn);
    header("location:proveedores.php");
    exit;

}

?>