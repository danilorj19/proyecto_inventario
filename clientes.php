<?php

include("conexion.php");
// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}

$consulta = "SELECT * FROM cliente";
$resultado = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Gestión de clientes</title>
</head>

    <body class="body-inicio">

        <div class="contenedor-usuarios">
            <div class="encabezado-usuarios">
                <h1 class="titulo-bienvenida">Gestión de clientes</h1>
                <div>
                <form action="cerrar_sesion.php" method="POST">
                <button class="btn-cerrar">Cerrar Sesión</button>
                </form>
              </div>
                <div class="grupo-botones-derecha">
                  <a href="menu.php" class="btn-volver">Volver al menú</a>
                  <a href= "agregar_cliente.php" class="btn-agregar">Agregar nuevo cliente</a>
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
                        <th width="100" scope="col">Código</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo electrónico</th>
                        <th width="170" scope="col">Teléfono</th>
                        <th width="90" scope="col">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     if ($resultado->num_rows > 0) {
                      while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['ID_cliente'] . "</td>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['apellido'] . "</td>";
                        echo "<td>" . $fila['correo'] . "</td>";
                        echo "<td>" . $fila['telefono'] . "</td>";
                        echo "<td>
                          <a href='editar_cliente.php?id=" . $fila['ID_cliente'] . "' title='Editar'>📝</a> || 
                          <a href='eliminar_cliente.php?id=" . $fila['ID_cliente'] . "' onclick=\"return confirm('¿Estás seguro de eliminar este cliente?')\" title='Eliminar'>❌</a>
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