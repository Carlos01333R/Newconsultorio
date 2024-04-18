<?php
include_once("../../bd/conexion.php");
// Obtener las variables del formulario
$radicado = $_POST['radicado'];
$respuesta = $_POST['respuesta'];



// Consulta SQL para verificar si el usuario existe
$query_check_user = "SELECT * FROM respuestas WHERE radicado = '$radicado'";
$result_check_user = $db_connection->query($query_check_user);

while ($row = $result_check_user->fetch_assoc()) {

$correo = $row['correo'];
$asunto = $row['asunto'];

}


$query_user = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result_user = $db_connection->query($query_user);

while ($row = $result_user->fetch_assoc()) {

$usuario = $row['usuario'];

}


// Verificar si el usuario existe
if ($result_check_user->num_rows > 0) {
    // El usuario existe, proceder con la actualización de la contraseña
    $query_update_password = "UPDATE respuestas SET estado = '$respuesta' WHERE radicado = '$radicado'";
    $result_update_password = $db_connection->query($query_update_password);
    
    if ($result_update_password) {
        echo "¡Contraseña actualizada exitosamente!";
        header("Location: consultorioAsesor.php?succces=1");

        
        $to = $correo; // Dirección de correo del destinatario
        $subject = "Respuesta Consultorio jurídico"; // Asunto del correo

        // Contenido del correo en formato HTML
        $message = "<html><body>";
        $message .= "<p>Hola, $usuario</p>";
        $message .= "<p>Su Consulta con número de radicado <span style='color: red;'>$radicado</span>  se encuentra en estado RESPONDIDA.</p>";
        $message .= "<p>CONSULTA:</p>";
        $message .= "<p>$asunto</p>";
        $message .= "<p>RESPUESTA:</p>";
        $message .= "<p>$respuesta</p>";
        $message .= "</body></html>";

        // Cabeceras adicionales
        $headers = "From: crodrigueza21@curnvirtual.edu.co\r\n"; // Dirección de correo del remitente
        $headers .= "Reply-To: crodrigueza21@curnvirtual.edu.co\r\n"; // Dirección de respuesta
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Tipo de contenido

        // Envía el correo electrónico
        if (mail($to, $subject, $message, $headers)) {
            echo "El correo electrónico se envió correctamente.";
        } else {
            echo "Hubo un error al enviar el correo electrónico.";
        }

    exit();
    } else {
        echo "Error al actualizar la contraseña: " . $db_connection->error;
       
    }
} else {
    // El usuario no existe, mostrar un mensaje de error
    echo "El usuario no existe. Por favor, verifique el nombre de usuario.";
    header("Location: consultorioAsesor.php?errorActualizar=1");
    exit();
}

// Cerrar la conexión
$db_connection->close();
?>
