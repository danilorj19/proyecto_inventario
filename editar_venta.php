<?php 
include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "SELECT * FROM orden_venta WHERE ID_orden_venta = '$codigo'";
$resultado = $conn->query($consulta);

if ($resultado->num_rows == 0) {
    echo "Usuario no encontrado.";
    exit;
}

$fila_usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ventas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Modificar información de la venta</h1>
        
        <form action="procesar_edicion_venta.php" method="POST" class="formulario_registro">
            
            <div class="datos_registro">
                <input type="text" name="id" value="<?php echo $fila_usuario['ID_orden_venta']; ?>"readonly>
            </div>

            <div class="datos_registro">
                <input type="text" name="nombre_producto" value="<?php echo $fila_usuario['nombre_producto']; ?>" id="nombres" placeholder="Nombre">
            </div>

            <div class="datos_registro">
                <input type="text" name="cantidad_venta" value="<?php echo $fila_usuario['cantidad_venta']; ?>" id="cantidad" placeholder="Cantidad">
            </div>
            
            <div class="datos_registro">
                <input type="text" name="precio_total" value="<?php echo $fila_usuario['precio_total']; ?>" id="precio" placeholder="Precio total">
            </div>

            <div class="datos_registro">
                <input type="date" name="fecha" value="<?php echo $fila_usuario['fecha']; ?>" id="fecha" placeholder="">
            </div>
            
            
            <button type="submit" class="boton_registro">Guardar cambios</button>
            
        </form>
    </div>
</body>
</html>