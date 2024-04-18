<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "curn";

// Establecer conexión con la base de datos
$db_connection = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verificar la conexión
if ($db_connection->connect_error) {
    die("Error de conexión: " . $db_connection->connect_error);
}

?>