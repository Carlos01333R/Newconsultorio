<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../../css/formAsesor.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="shortcut icon" href="../../img/logo.png">
</head>

<body>
  <div class="register-box">
<!-- multistep form -->
<form id="msform" class="form" action="guardarAsesor.php" method="POST">
    <!-- progressbar -->
    <img src="../../img/logotxtteal.png" alt="" style="width: 250px;  margin-bottom: 10px;">
    <ul id="progressbar">
      <li class="active">CONFIGURACION DE CUENTA</li>
      <li>Detalles personales</li>
      <li>informacion profesional</li>
      <li>Informacion de Contacto</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
     
      <h3 class="fs-subtitle">Por favor complete a continuación</h3>
      <input type="text" name="email" placeholder="Correo"  required/>
      <input type="password" name="pass" placeholder="Contraseña" required/>
      <input type="password" name="cpass" placeholder="Confirmar Contraseña" required/>
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>
    <fieldset>
        <h3 class="fs-subtitle">Por favor complete a continuación</h3>
        <input type="text" name="nombre" placeholder="Nombre Completo" required/>
        <input type="text" name="id" placeholder="Identificacion" required />
        <input type="date" name="fecha" placeholder="Fecha de Nacimiento" required />
        <input type="button" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h3 class="fs-subtitle">Por favor complete a continuación</h3>
        
        <select name="Categoria" required  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Selecciona una categoría</option>
        <option value="asesoria">asesoria</option>
        <option value="consultoria">consultoria</option>
        <option value="emprendimiento">emprendimiento</option>
        <option value="gestion de proyectos">gestion de proyectos</option>
      
      </select>
        <input type="text" name="profesion" placeholder="profesion" required />
        <input type="text" name="descripcionpreofesion" placeholder="Cual es su profesion" required />
        <input type="text" name="codigo" placeholder="Digite el codigo de asesor" required />
        <input type="button" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        
        <h3 class="fs-subtitle">Por favor complete a continuación</h3>
        <input type="text" name="direccion" placeholder="Direccion" required />
        <input type="text" name="tele" placeholder="Telefono" required />
        <input type="text" name="sexo" placeholder="Sexo" required />
        <input type="submit" class="next action-button" value="Registrarme" />
    </fieldset>
  </form>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="../../js/from.js"></script>
</body>
</html>