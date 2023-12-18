<!-- panel_admin.php -->

<?php
session_start();

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../php/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>Bienvenido al Panel de Administración</h2>
    <p>Contenido y funciones del panel de administración aquí.</p>

    <form action="../php/logout.php" method="POST">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>

