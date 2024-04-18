<?php 
include_once("../../bd/conexion.php");
session_start();
if (!isset($_SESSION['correo'])) {
  
    header("Location: login.php");
    exit();
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Si no se proporcionó un ID válido, redirigir a una página de error o manejar el error de otra manera
    header("Location: consultorio.php");
    exit();
}


$id = $_GET['id'];

// Sentencia SQL para eliminar el registro
$query_delete = "DELETE FROM consultas WHERE radicado = $id"; // Reemplaza 'tu_tabla' por el nombre de tu tabla

// Ejecutar la consulta de eliminación
if ($db_connection->query($query_delete) === TRUE) {
    // Si la eliminación fue exitosa, redirigir a alguna página o mostrar un mensaje de éxito
    header("Location: consultorio.php?successeliminar=1");
    exit();
} else {
    // Si hubo un error al eliminar el registro, redirigir a una página de error o mostrar un mensaje de error
    header("Location: consultorio.php?successeliminar=1");
    exit();
}

// Cerrar la conexión
$db_connection->close();

?>