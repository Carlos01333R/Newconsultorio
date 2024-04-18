<?php
include_once("../../bd/conexion.php");

$correo = $db_connection->real_escape_string($_POST['email']);
$contrasena = $db_connection->real_escape_string($_POST['pass']);
$nombre = $db_connection->real_escape_string($_POST['nombre']);
$identificacion = $db_connection->real_escape_string($_POST['id']);
$fecha = $db_connection->real_escape_string($_POST['fecha']);
$direccion = $db_connection->real_escape_string($_POST['direccion']);
$telefono = $db_connection->real_escape_string($_POST['tele']);
$sexo = $db_connection->real_escape_string($_POST['sexo']);
$categoria = $db_connection->real_escape_string($_POST['Categoria']);
$descripcionpreofesion = $db_connection->real_escape_string($_POST['descripcionpreofesion']);
$profesion = $db_connection->real_escape_string($_POST['profesion']);
$codigo = $db_connection->real_escape_string($_POST['codigo']);

// Verificar si la identificación ya existe en la base de datos
$check_query = "SELECT * FROM usuarios WHERE id = '$identificacion'";
$check_result = $db_connection->query($check_query);

if ($check_result->num_rows > 0) {
    // Si la identificación ya existe, mostrar un error
    header("Location: ../../index.php?errorRegistro=1");
    exit();
} else {
    // Verificar si el código es igual a 'asesorcurn'
    if ($codigo == 'asesorcurn') {
        // Query para INSERT INTO
        $query = "INSERT INTO asesor (id, codigo_asesor, nombre, correo, contrasena, categoria, sexo, fecha_naciento, telefono, direccion, profesion, estudios) VALUES ('$identificacion', '$codigo', '$nombre', '$correo', '$contrasena', '$categoria', '$sexo', '$fecha', '$telefono', '$direccion', '$profesion', '$descripcionpreofesion')";

        if ($db_connection->query($query) === TRUE) {
            echo "Nuevo registro insertado correctamente.";
            header("Location: ../../index.php?successRegistroAsesor=1");
            exit();
            
        } else {
            echo "Error: " . $query . "<br>" . $db_connection->error;
        }
    } else {
        // Si el código no es igual a 'asesorcurn', mostrar un error
        header("Location: ../../index.php?errorRegistroCodigo=1");
        exit();
    }
}

// Cerrar la conexión
$db_connection->close();

?>
