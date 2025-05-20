<?php 
include("conexion.php");
$codigo = $_REQUEST['id'];

$consulta = "SELECT * FROM producto WHERE ID_producto = '$codigo'";
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
    <title>Editar Producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Modificar información del producto</h1>
        
        <form action="procesar_edicion_producto.php" method="POST" class="formulario_registro">
            
            <div class="datos_registro">
                <input type="text" name="id" value="<?php echo $fila_usuario['ID_producto']; ?>"readonly>
            </div>

            <div class="datos_registro">
                <input type="text" name="nombre" value="<?php echo $fila_usuario['nombre']; ?>" id="nombres" placeholder="Nombre">
            </div>

            <div class="datos_registro">
                <input type="text" name="stock" value="<?php echo $fila_usuario['stock']; ?>" id="nombres" placeholder="Cantidad">
            </div>
            
            <div class="datos_registro">
                <input type="text" name="precio" value="<?php echo $fila_usuario['precio']; ?>" id="email" placeholder="Precio unidad">
            </div>
            
            <div class="datos_registro">
                <input type="text" name="descripcion" value="<?php echo $fila_usuario['descripcion']; ?>" id="telefono" placeholder="Descripción">
            </div>

            <div class="datos_registro">
                <input type="date" name="fecha" value="<?php echo $fila_usuario['fecha']; ?>" id="direccion" placeholder="">
            </div>
            
            
            <button type="submit" class="boton_registro">Guardar cambios</button>
            
        </form>
    </div>
</body>
</html>