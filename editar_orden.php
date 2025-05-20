<?php 
include("conexion.php");
$codigo = $_REQUEST['id'];

//consultar la tabla proveedor
$resultado_prov = $conn->query("SELECT * FROM proveedor ORDER BY nombre_proveedor;");

//Se necesita el número de registros de la consulta
$num_reg = $resultado_prov->num_rows;
if ($num_reg == 0) {
    echo "Proveedor no encontrado, por favor adicionelo.";
    exit;
}

//Consultar tabla orden de compra
$resultado = $conn->query("SELECT * FROM orden_compra WHERE ID_orden_compra = '$codigo'");
//Se crea un arreglo para anexar el registro de la orden seleccionada
$fila_usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Orden de Compra</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Modificar información de la orden</h1>
        
        <form action="procesar_edicion_orden.php" method="POST" class="formulario_registro">
            
            <div class="datos_registro">
                <input type="text" name="id" value="<?php echo $fila_usuario['ID_orden_compra']; ?>"readonly>
            </div>

            <div class="datos_registro">
                <input type="text" name="nombre" value="<?php echo $fila_usuario['nombre']; ?>" id="nombre" placeholder="Nombre del producto">
            </div>

            <div class="datos_registro">
                <label for="proveedor">Proveedor</label>
                <select name="proveedor" id="proveedor" required>
                    <option value="" disabled selected="selected">[Seleccione una opción]
                        <?php
                        while ($fila_prov = $resultado_prov->fetch_assoc()) {
                            if($fila_prov['ID_proveedor'] == $fila_usuario['ID_proveedor'])
                                echo "<option selected='selected' value ='" . $fila_prov['ID_proveedor'] . "'>" . $fila_prov['nombre_proveedor'] . "</option>";
                            else
                                echo "<option value = '" . $fila_prov['ID_proveedor'] . "'>" . $fila_prov['nombre_proveedor'];
                        }
                        mysqli_close($conn);
                        ?>
                </select>
            </div>

            <div class="datos_registro">
                <label for="estado">Estado</label>
                <select name="estado" id="tipo_usuario" required>
                    <option value="" disabled selected="selected">[Seleccione una opción]
                    <option value="Aprobado">Aprobado
                    <option value="Procesando">Procesando
                    <option value="Cancelado">Cancelado
                </select>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="cantidad" value="<?php echo $fila_usuario['cantidad']; ?>" id="cantidad" placeholder="Cantidad">
            </div>
            
            <div class="datos_registro">
                <input type="text" name="total" value="<?php echo $fila_usuario['total']; ?>" id="total" placeholder="Total">
            </div>

            <div class="datos_registro">
                <input type="date" name="fecha" value="<?php echo $fila_usuario['fecha']; ?>" id="fecha" placeholder="Fecha">
            </div>
            
            
            <button type="submit" class="boton_registro">Guardar cambios</button>
            
        </form>
    </div>
</body>
</html>