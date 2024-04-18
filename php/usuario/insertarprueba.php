<?php 
include_once("../../bd/conexion.php");
session_start();
if (!isset($_SESSION['usuario'])) {
  
    header("Location: index.php");
    exit();
}

// Ahora puedes acceder a las variables de sesión
$usuario = $_SESSION['usuario'];
$correo = $_SESSION['correo'];


$archivo_nombre = $_FILES['archivo']['name'];
$archivo_temporal = $_FILES['archivo']['tmp_name']; // ruta temporal del archivo
$archivo_tipo = $_FILES['archivo']['type']; 


// Directorio donde guardar el archivo
$ruta_destino = "../../docs/" . $archivo_nombre;

// Crear el directorio si no existe
if (!file_exists("../../docs/")) {
    mkdir("../../docs/", 0777, true); // Permisos 0777
}

// Mover el archivo a la ubicación permanente
if (move_uploaded_file($archivo_temporal, $ruta_destino)) {
    echo "El archivo se ha subido correctamente.<br>";
} else {
    echo "Error al subir el archivo.<br>";
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['consulta'])) {
    // Obtener las variables del formulario
    function generarNumeroAleatorio() {
        // Genera un número aleatorio de 6 cifras
        $numero = mt_rand(100000, 999999);
        return $numero;
    }
    function obtenerFechaHoraActual() {
        // Configura la zona horaria a la deseada
        date_default_timezone_set('America/Bogota'); // Cambia a tu zona horaria preferida si es necesario
    
        // Obtiene la fecha y hora actual en el formato deseado
        $fechaHora = date('Y-m-d H:i:s');
    
        return $fechaHora;
    }
    
    $radicado = generarNumeroAleatorio();
    $fecha = obtenerFechaHoraActual();
    $estado = "SIN RESPONDER";
    $consulta = $_POST['consulta'];
    $profesion = $_POST['profesion'];
    $categoria = $_POST['categoria'];
    $nombre_proyecto = $_POST['nombre_proyecto'];
    

    // Sanitizar la entrada de usuario para evitar la inyección de SQL
    $consulta = $db_connection->real_escape_string($consulta);

    // Query para INSERT INTO
    $query = "INSERT INTO consultas (correo, radicado, fecha, asunto, estado, profesion, categoria, proyecto, archivo_nombre, archivo_ruta  ) VALUES ('$correo', '$radicado', '$fecha', '$consulta', '$estado', '$profesion', '$categoria', '$nombre_proyecto', '$archivo_nombre', '$ruta_destino')";

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