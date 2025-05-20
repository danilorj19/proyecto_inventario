<?php

include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "DELETE FROM cliente where ID_cliente = '$codigo'";
$conn->query($consulta);

if(mysqli_connect_errno() !=0)
{
    echo "Error al eliminar el cliente" . mysqli_connect_errno() . " - " . mysqli_connect_error();
    mysqli_close($conn);
} else {
    echo "Cliente eliminado";
    mysqli_close($conn);
    header("location:clientes.php");
    exit;

}

?>