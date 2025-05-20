<?php
include("conexion.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="registro_usuario">
    <div class="registrarse">
        <h1>Regístrate</h1>
        
        <form action="procesar_registro.php" method="POST" class="formulario_registro">
            <div class="datos_registro">
                <input type="text" name="nombre" id="nombres" placeholder="Nombres" required>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="apellido" id="apellidos" placeholder="Apellidos" required>
            </div>
            
            <div class="datos_registro">
                <input type="text" name="documento" id="documento" placeholder="Documento" required>
            </div>
            
            <div class="datos_registro">
                <input type="email" name="correo" id="email" placeholder="Correo electrónico" required>
            </div>
            
            <div class="datos_registro">
                <input type="password" name="clave" id="password" placeholder="Contraseña" required>
                <span class="icono_ojo" onclick="mostrarContrasena()">👁</span>
            </div>
            
            <div class="datos_registro">
                <label for="tipo_usuario">Tipo de usuario</label>
                <select name="rol" id="tipo_usuario" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="Admin">Admin</option>
                    <option value="Operario">Operario</option>
                </select>
            </div>
            
            <button type="submit" class="boton_registro">Registrarse</button>
            
            <div class="links">
                ¿Ya tienes cuenta? <a href="inicio_sesion.php">Inicia sesión</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>