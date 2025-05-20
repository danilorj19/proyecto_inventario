<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Informes</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body class="body-inicio">

  <div class="contenedor-informes">
    <div class="encabezado-informes">
      <h1 class="titulo-bienvenida">Gestión de Informes</h1>
      <div class="botones-superiores">
        <a href="menu.php" class="btn-superior">Volver al menú</a>
        <a href="#" class="btn-superior">Generar Informe</a>
        <a href="inicio_sesion.html" class="btn-cerrar">Cerrar sesión</a>
      </div>
    </div>

    <div class="buscador">
      <input type="text" placeholder="Buscar..." class="input-busqueda">
    </div>

    <div class="formulario-informes">
      <div class="grupo-campos">
        <div class="campo">
          <label for="codigo"><strong>Código</strong></label>
          <input type="text" id="codigo">
        </div>
        <div class="campo">
          <label for="nombre"><strong>Nombre</strong></label>
          <input type="text" id="nombre">
        </div>
        <div class="campo">
          <label for="categoria"><strong>Categoría</strong></label>
          <input type="text" id="categoria">
        </div>
        <div class="campo-fecha">
          <label><strong>Fecha</strong></label>
          <div class="campos-fecha">
            <input type="text" placeholder="Día">
            <input type="text" placeholder="Mes">
            <input type="text" placeholder="Año">
          </div>
        </div>
      </div>

      <div class="campo-descripcion">
        <label><strong>Descripción</strong></label>
        <textarea></textarea>
      </div>

      <div class="campo-observaciones">
        <label><strong>Observaciones</strong></label>
        <input type="text">
      </div>

      <div class="botones-inferiores">
        <button class="btn-accion">Visualizar</button>
        <button class="btn-accion">Guardar</button>
        <button class="btn-accion">Editar</button>
        <button class="btn-accion">Exportar</button>
        <button class="btn-accion">Cancelar</button>
      </div>
    </div>
  </div>

</body>
</html>
