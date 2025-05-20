<?php
include("conexion.php");
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Inicio de sesión</title>
</head>
<body class="inicio_sesion">
    <div class="login">
        <h1>Sistema de Gestión de Inventarios</h1>
        
        <form action="procesar_login.php" method="POST" class="formulario_login">
            <div class="datos_usuario">
                <input type="text" name="documento" id="usuario" placeholder="Documento" required>
            </div>
            
            <div class="datos_usuario">
                <input type="password" name="clave" id="password" placeholder="Contraseña" required>
                <span class="icono_ojo" onclick="mostrarContrasena()">👁</span>
            </div>
            
            <button type="submit" class="boton_login">Iniciar sesión</button>
            
            <div class="links">
                <a href="recuperar_clave.php" class="recordar_password">¿Olvidaste tu contraseña?</a>
                <a href="registro.php" class="registro">Regístrate</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>