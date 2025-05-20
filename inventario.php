<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Control de inventario</title>
</head>
<body class="body-inicio">
    <div class="contenedor-usuarios">
        <div class="encabezado-usuarios">
            <h1 class="titulo-bienvenida">Control de inventario</h1>
            <div class="grupo-botones-derecha">
              <a href="menu.php" class="btn-volver">Volver al menú</a>
              <a href="#" class="btn-agregar">Añadir inventario</a>
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
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Ubicación</th>
                    <th>Cantidad stock</th>
                    <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
                <tr><td colspan="6" style="text-align:center;">Sin datos aún</td></tr>
              </tbody>
            </table>
          </div>
    
          <div class="acciones-laterales">
            <button class="btn-accion">Guardar</button>
            <button class="btn-accion">Editar</button>
            <button class="btn-accion">Eliminar</button>
            <button class="btn-cerrar" onclick="cerrarSesion()">Cerrar Sesión</button>
          </div>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>