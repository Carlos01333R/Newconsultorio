<?php
include_once("../../bd/conexion.php");
// Obtener las variables del formulario
$correo = $_POST['email'];
$contrasena = $_POST['pass'];
$nombre = $_POST['nombre'];
$identificacion = $_POST['id'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$telefono = $_POST['tele'];
$sexo = $_POST['sexo'];

$correo = $db_connection->real_escape_string($correo);
$contrasena = $db_connection->real_escape_string($contrasena);
$nombre = $db_connection->real_escape_string($nombre);
$identificacion = $db_connection->real_escape_string($identificacion);
$fecha = $db_connection->real_escape_string($fecha);
$direccion = $db_connection->real_escape_string($direccion);
$telefono = $db_connection->real_escape_string($telefono);
$sexo = $db_connection->real_escape_string($sexo);


    // Query para INSERT INTO
    $query = "INSERT INTO usuarios (id, usuario, correo, fecha_naciento, sexo, direccion, contrasena, telefono) VALUES ('$identificacion', '$nombre', '$correo', '$fecha', '$sexo', '$direccion', '$contrasena', '$telefono')";

    if ($db_connection->query($query) === TRUE) {
        echo "Nuevo registro insertado correctamente.";
        header("Location: ../../index.php?successRegistro=1");
        exit();
        
    } else {
        echo "Error: " . $query . "<br>" . $db_connection->error;
    }


// Cerrar la conexión
$db_connection->close();
?>
