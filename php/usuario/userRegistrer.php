<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../../css/from.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="shortcut icon" href="../../img/logo.png">
</head>

<body>
  <div class="register-box">
<!-- multistep form -->
<form id="msform" class="form" action="guardarUser.php" method="POST">
    <!-- progressbar -->
    <img src="../../img/logotxtteal.png" alt="" style="width: 250px;  margin-bottom: 10px;">
    <ul id="progressbar">
      <li class="active">CONFIGURACION DE CUENTA</li>
      <li>Detalles personales</li>
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
        <input type="text" name="direccion" placeholder="Direccion" required />
        <input type="text" name="tele" placeholder="Telefono" required />
        <input type="text" name="sexo" placeholder="Sexo" required />
        <input type="submit" class="next action-button" value="Registrarme" />
    </fieldset>
  </form>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="../../js/main.js"></script>
</body>
</html>