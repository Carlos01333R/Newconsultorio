<?php
include_once("../../bd/conexion.php");

// Obtener las variables del formulario
$radicado = $_POST['radicado'];
$new_consulta = $_POST['respuesta'];

// Consulta SQL para verificar si la consulta existe
$query_check_consulta = "SELECT * FROM consultas WHERE radicado = '$radicado'";
$result_check_consulta = $db_connection->query($query_check_consulta);

// Verificar si la consulta existe
if ($result_check_consulta->num_rows > 0) {
    // La consulta existe, proceder con la actualización
    $query_update_consulta = "UPDATE consultas SET asunto = '$new_consulta' WHERE radicado = '$radicado'";
    $result_update_consulta = $db_connection->query($query_update_consulta);

    if ($result_update_consulta) {
        // Actualizar también la tabla respuestas
        $query_update_respuestas = "UPDATE respuestas SET asunto = '$new_consulta' WHERE radicado = '$radicado'";
        $result_update_respuestas = $db_connection->query($query_update_respuestas);

        if ($result_update_respuestas) {
            header("Location: consultorio.php?success=1");
            exit();
        } else {
            echo "Error al actualizar la tabla respuestas: " . $db_connection->error;
        }
    } else {
        echo "Error al actualizar la consulta: " . $db_connection->error;
    }
} else {
    // La consulta no existe, mostrar un mensaje de error
    header("Location: consultorio.php?errorActualizar=1");
    exit();
}

// Cerrar la conexión
$db_connection->close();
?>
