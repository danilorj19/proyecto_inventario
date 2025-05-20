<?php

include("conexion.php");
// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}

$consulta = "SELECT * FROM orden_compra";
$resultado = $conn->query($consulta);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Orden de compra</title>
</head>
<body class="body-inicio">
    <div class="contenedor-usuarios">
        <div class="encabezado-usuarios">
            <h1 class="titulo-bienvenida">Órdenes de compra</h1>
            <div>
                <form action="cerrar_sesion.php" method="POST">
                <button class="btn-cerrar">Cerrar Sesión</button>
                </form>
              </div>
            <div class="grupo-botones-derecha">
              <a href="menu.php" class="btn-volver">Volver al menú</a>
              <a href="agregar_orden_compra.php" class="btn-agregar">Agregar orden de compra</a>
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
                    <th width="90" scope="col">Código</th>
                    <th>Nombre</th>
                    <th width="160" scope="col">Código Proveedor</th>
                    <th>Estado</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th width="90" scope="col">Opciones</th>
                    
                </tr>
              </thead>
              <tbody>
                <?php
                if ($resultado->num_rows > 0) {
                      while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['ID_orden_compra'] . "</td>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['ID_proveedor'] . "</td>";
                        echo "<td>" . $fila['estado'] . "</td>";
                        echo "<td>" . $fila['cantidad'] . "</td>";
                        echo "<td>" . $fila['total'] . "</td>";
                        echo "<td>" . $fila['fecha'] . "</td>";
                        echo "<td>
                          <a href='editar_orden.php?id=" . $fila['ID_orden_compra'] . "' title='Editar'>📝</a> || 
                          <a href='eliminar_orden.php?id=" . $fila['ID_orden_compra'] . "' onclick=\"return confirm('¿Estás seguro de eliminar esta orden de compra?')\" title='Eliminar'>❌</a>
                        </td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='8'>Sin datos aún</td></tr>";
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