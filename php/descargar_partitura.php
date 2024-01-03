<?php
session_start();

$conex = mysqli_connect("localhost", "root", "", "cultural");

if (!$conex) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}



// Comprueba si se envió el formulario
if (isset($_POST['NegroSpirituals'])) {
    // Verifica si los campos requeridos están completos 
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['email']) &&
        !empty($_POST['celular']) &&
        !empty($_POST['ocupacion'])&&
        !empty($_POST['partitura']) &&
        !empty($_POST['estado']) 
        
    ) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $celular = trim($_POST['celular']);
        $ocupacion = trim($_POST['ocupacion']);
        $partitura = trim($_POST['partitura']);
        $estado = trim($_POST['estado']);
        $fecha = date("d/m/y");
        

        // Utiliza una expresión regular más específica
        $patron = '/^[a-zA-Z0-9._%+-]+@(gmail\.com|hotmail\.com|yahoo\.com|outlook\.com|otrosdominios\.cl|otrosdominios\.com)$/';

        if (!preg_match($patron, $email)) {
            $_SESSION['mensaje'] = "Por favor, proporciona una dirección de correo electrónico válida.";
        } else {
            // Si la validación es exitosa, realiza la inserción en la base de datos
            $partitura = mysqli_real_escape_string($conex, $partitura);
            $consulta = "INSERT INTO partituras (nombre, email, celular, ocupacion, partitura, estado, fecha)
                         VALUES ('$nombre', '$email', '$celular', '$ocupacion', '$partitura', 'pendiente', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);


            if ($resultado) {
                $_SESSION['mensaje'] = "";// entre "puedo poner mensaje si lo necesito"
                // Después de procesar el formulario, redirige a una página diferente
                header("Location: ../php/exito.php");
                exit();
            } else {
                var_dump($_POST);
                $_SESSION['mensaje'] = "Ocurrió un Error al insertar datos: " . mysqli_error($conex);
            }
        }
    } else {
        $_SESSION['mensaje'] = "Campos incompletos en el formulario";
    }
}

// Redirige al usuario a la página anterior
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
?>
