<?php
include("conexion.php");

// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI - Sistema de Gestión de Inventarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="menu">
    <div class="menu_inicio">
        <header class="header">
            <h1>Le damos la bienvenida al sistema</h1>
            <div class="logo">
                <img src="img/sgi-software (1).png" alt="SGI">
            </div>
        </header>


        <main class="main">
            <h2>Por favor seleccione una opción</h2>
            
            <div class="menu_opciones">
                <!-- Primera fila -->
                <a href="usuarios.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de usuarios</h3>
                    </div>
                </a>
                
                <a href="proveedores.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de proveedores</h3>
                    </div>
                </a>
                
                <a href="productos.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de productos</h3>
                    </div>
                </a>
                
                <a href="ventas.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de ventas</h3>
                    </div>
                </a>
                
                <!-- Segunda fila -->
                <a href="clientes.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de clientes</h3>
                    </div>
                </a>
                
                <a href="orden_compra.php" class="option-link">
                    <div class="opciones">
                        <h3>Órdenes de compra</h3>
                    </div>
                </a>
                
                <a href="inventario.php" class="option-link">
                    <div class="opciones">
                        <h3>Control de inventario</h3>
                    </div>
                </a>
                
                <a href="informes.php" class="option-link">
                    <div class="opciones">
                        <h3>Gestión de informes</h3>
                    </div>
                </a>
            </div>
           </main>
        </main>

        
        <footer class="footer">
            <form action="cerrar_sesion.php" method="POST">
            <button class="boton_salir">Cerrar sesión</button>
            </form>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>
