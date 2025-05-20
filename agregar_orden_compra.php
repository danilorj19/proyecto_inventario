<?php 

include("conexion.php");

// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}

$consulta = "SELECT * FROM proveedor";
$resultado_prov = $conn->query($consulta);

//if ($resultado->num_rows == 0) {
  //  echo "Usuario no encontrado.";
    //exit;
//}

//$fila_usuario = $resultado->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nuevo producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Información del nuevo producto</h1>
        
        <form action="procesar_nueva_orden.php" method="POST" class="formulario_registro">
            

            <div class="datos_registro">
                <input type="text" name="nombre" id="nombres" placeholder="Nombre" required>
            </div>

            <div class="datos_registro">
                <label for="proveedor">Proveedor</label>
                <select name="proveedor" id="proveedor" required>
                    <option value="" disabled selected="selected">[Seleccione una opción]

                    <?php
                    while ($fila = $resultado_prov->fetch_assoc()) {
                        echo "<option value='" . $fila['ID_proveedor'] . "'>" . $fila['nombre_proveedor'];
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
                <input type="text" name="cantidad" id="stock" placeholder="cantidad" required>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="total" id="total" placeholder="Precio Total" required>
            </div>

            <div class="datos_registro">
                <input type="date" name="fecha" id="fecha" placeholder="" required>
            </div>

             <button type="submit" class="boton_registro">Guardar producto</button>
            
        </form>
    </div>
</body>
</html>