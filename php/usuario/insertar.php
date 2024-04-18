<?php
include_once("../../bd/conexion.php");
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Ahora puedes acceder a las variables de sesión
$correo = $_SESSION['correo'];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['consulta'])) {
    // Obtener las variables del formulario
    function generarNumeroAleatorio() {
        // Genera un número aleatorio de 6 cifras
        $numero = mt_rand(100000, 999999);
        return $numero;
    }

    function obtenerFechaActual() {
        // Configura la zona horaria a la deseada
        date_default_timezone_set('America/Bogota'); // Cambia a tu zona horaria preferida si es necesario

        // Obtiene la fecha actual en el formato deseado
        $fecha = date('Y-m-d');
        return $fecha;
    }

    $radicado = generarNumeroAleatorio();
    $fecha = obtenerFechaActual();
    $estado = "SIN RESPONDER";
    $consulta = $_POST['consulta'];
    //profesion
    //categoria
    //Nombre_proyecto
    //file

    // Sanitizar la entrada de usuario para evitar la inyección de SQL
    $consulta = $db_connection->real_escape_string($consulta);

    // Query para INSERT INTO
    $query = "INSERT INTO consultas (correo, radicado, fecha, asunto, estado) VALUES ('$correo', '$radicado', '$fecha', '$consulta', '$estado')";

    if ($db_connection->query($query) === TRUE) {
        echo "Nuevo registro insertado correctamente.";
        header("Location: consultorio.php?success=1");
        exit();
        
    } else {
        echo "Error: " . $query . "<br>" . $db_connection->error;
    }
}

// Cerrar la conexión
$db_connection->close();
?>
