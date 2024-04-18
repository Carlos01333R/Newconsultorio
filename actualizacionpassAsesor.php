<?php
include_once("bd/conexion.php");
// Obtener las variables del formulario
$usuario = $_POST['usuario'];
$nueva_clave = $_POST['nueva_clave'];

// Consulta SQL para verificar si el usuario existe
$query_check_user = "SELECT * FROM asesor WHERE correo = '$usuario'";
$result_check_user = $db_connection->query($query_check_user);

// Verificar si el usuario existe
if ($result_check_user->num_rows > 0) {
    // El usuario existe, proceder con la actualización de la contraseña
    $query_update_password = "UPDATE asesor SET contrasena = '$nueva_clave' WHERE correo = '$usuario'";
    $result_update_password = $db_connection->query($query_update_password);
    
    if ($result_update_password) {
        echo "¡Contraseña actualizada exitosamente!";
        header("Location: index.php?succces=1");
    exit();
    } else {
        echo "Error al actualizar la contraseña: " . $db_connection->error;
       
    }
} else {
    // El usuario no existe, mostrar un mensaje de error
    echo "El usuario no existe. Por favor, verifique el nombre de usuario.";
    header("Location: index.php?errorActualizar=1");
    exit();
}

// Cerrar la conexión
$db_connection->close();
?>
