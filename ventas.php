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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Gestión de ventas</title>
</head>
<body class="body-inicio">
    <div class="contenedor-usuarios">
        <div class="encabezado-usuarios">
            <h1 class="titulo-bienvenida">Gestión de ventas</h1>
            <div>
                <form action="cerrar_sesion.php" method="POST">
                <button class="btn-cerrar">Cerrar Sesión</button>
                </form>
              </div>
            <div class="grupo-botones-derecha">
              <a href="menu.php" class="btn-volver">Volver al menú</a>
              <a href="agregar_venta.php" class="btn-agregar">Agregar nueva venta</a>
            </div>
          </div>
    
        <div class="buscador">
          <input type="text" placeholder="Buscar..." class="input-busqueda">
        </div>
    
        <div class="contenido-usuarios">
          <!-- Tabla -->
          <div class="tabla-contenedor">
            <table class="tabla-usuarios">
              <thead>
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio total</th>
                    <th width="130" scope="col">Fecha</th>
                    <th width="90" scope="col">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                     if ($resultado->num_rows > 0) {
                      while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['ID_orden_venta'] . "</td>";
                        echo "<td>" . $fila['nombre_producto'] . "</td>";
                        echo "<td>" . $fila['cantidad_venta'] . "</td>";
                        echo "<td>" . $fila['precio_total'] . "</td>";
                        echo "<td>" . $fila['fecha'] . "</td>";
                        echo "<td>
                          <a href='editar_venta.php?id=" . $fila['ID_orden_venta'] . "' title='Editar'>📝</a> || 
                          <a href='eliminar_venta.php?id=" . $fila['ID_orden_venta'] . "' onclick=\"return confirm('¿Estás seguro de eliminar esta venta?')\" title='Eliminar'>❌</a>
                        </td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='6'>Sin datos aún</td></tr>";
                    }
                    ?>
              </tbody>
            </table>
          </div>
    
        </div>
      </div>
      <script src="script.js"></script> 
</body>
</html>