<?php 

include("conexion.php");

// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}

$consulta = "SELECT * FROM orden_venta";
$resultado = $conn->query($consulta);

//if ($resultado->num_rows == 0) {
  //  echo "Usuario no encontrado.";
    //exit;
//}

$fila_usuario = $resultado->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nueva venta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Información de la venta a realizar</h1>
        
        <form action="procesar_nueva_venta.php" method="POST" class="formulario_registro">
            

            <div class="datos_registro">
                <input type="text" name="nombre_producto" id="nombres" placeholder="Nombre" required>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="cantidad_venta" id="stock" placeholder="cantidad" required>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="precio_total" id="precio" placeholder="Precio Total" required>
            </div>

            <div class="datos_registro">
                <input type="date" name="fecha" id="fecha" placeholder="" required>
            </div>

            
            <button type="submit" class="boton_registro">Guardar venta</button>
            
        </form>
    </div>
</body>
</html>