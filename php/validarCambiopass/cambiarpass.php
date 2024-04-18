

<?php
// Recuperar el valor de la variable 'id' desde la URL
$codigo_recuperacion = $_POST['id'];
$correo = $_POST['user'];
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Asignar el valor de $codigo_recuperacion a una variable de sesión
$_SESSION['codigo_recuperacion'] = $codigo_recuperacion;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="shortcut icon" href="../../img/logo.png">
 
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="css/dashboard.css" rel="stylesheet" type="text/css">
    <title>cambiar contraseña</title>
</head>
<body>
<section class="formulario">  
<div class="p-4 md:p-5">
<div class="flex justify-center">
                <img src="../../img/logotxtteal.png" alt="" class="w-30 h-20 m-0">
                </div>
                <form class="space-y-4" action="validar.php" method="POST">
               
                <div>
                        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">correo</label>
                        <input type="email" name="usuario" value='<?php echo $correo; ?>' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el codigo enviado a su correo" required />
                    </div>
                    <div>
                        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo</label>
                        <input type="number" name="codigo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el codigo enviado a su correo" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> contraseña Nueva</label>
                        <input type="password" name="nueva_clave" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autoriza Tratamiento de Datos</label>
                        </div>
                     
                    </div>
                    <button type="submit" style="background-color: orange;" class="w-full text-whitefocus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white ">Cambiar Contraseña</button>
                   
                </form>
            </div>

            <?php

if(isset($_GET['error']) && $_GET['error'] == 1) {
  echo "<div id='mensaje'>No se encontró su usuario o contrasaña.</div>";
}
?>
<style>
    #mensaje {
  background-color: #ffcccc; /* Color de fondo */
  color: #ff0000; /* Color del texto */
  padding: 10px; /* Espaciado interno */
  border: 1px solid #ff0000; /* Borde */
  border-radius: 5px; /* Borde redondeado */
  margin-top: 10px; /* Espacio superior */
  text-align: center; /* Centrar el texto */
}

</style>
</section>



<style>

body{
margin:0;
  padding:0;
  font-family: 'Poppins'!important;
  background-image: linear-gradient(to right, rgb(255, 166, 0) 0%, rgb(248, 161, 0) 100%);
  overflow: hidden;
  
}
.formulario {
    width: 90vh; /* Ancho del formulario */
    margin: 0 auto; /* Margen automático a izquierda y derecha para centrarlo */
    background-color: #fff; /* Color de fondo */
    border-radius: 20px; /* Radio de borde */
    position: absolute; /* Establecer la posición como absoluta */
    top: 50%; /* Ubicar el borde superior del formulario en el 50% del viewport */
    left: 50%; /* Ubicar el borde izquierdo del formulario en el 50% del viewport */
    transform: translate(-50%, -50%); /* Mover el formulario hacia atrás y hacia arriba la mitad de su propio ancho y alto para centrarlo */
}


@media (max-width: 768px) {
  .formulario {
    width: auto; 
        margin: 20px;
        position: static; 
        transform: none; 
        
  }
}


</style>
</body>
</html>