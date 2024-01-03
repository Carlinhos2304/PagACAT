<?php
session_start();

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../php/login.php");
    exit();
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el ID de la solicitud desde el formulario
    $solicitud_id = $_POST['solicitud_id'];

    // Conecta a la base de datos (puedes ajustar esto según tu configuración)
    $conex = mysqli_connect("localhost", "root", "", "cultural");

    if (!$conex) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Lógica para procesar la solicitud
    $actualizar_query = "UPDATE partituras SET estado = 'aceptada' WHERE id = $solicitud_id";
    $resultado_actualizar = mysqli_query($conex, $actualizar_query);

    if ($resultado_actualizar) {
        // Realizar cualquier acción adicional necesaria, como enviar la partitura al usuario
        // ...

        $_SESSION['mensaje'] = "Solicitud procesada correctamente.";
    } else {
        $_SESSION['mensaje'] = "Error al procesar la solicitud: " . mysqli_error($conex);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);

    // Redirige de vuelta al panel de administración después de procesar la solicitud
    header("Location: ../php/panel_admin.php");
    exit();
} else {
    // Si no se ha enviado el formulario, redirige al panel de administración
    header("Location: ../php/panel_admin.php");
    exit();
}
?>
