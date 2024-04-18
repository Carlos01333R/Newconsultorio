<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="shortcut icon" href="img\logo.png">
 
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="css/dashboard.css" rel="stylesheet" type="text/css">

    <title>Login</title>
</head>
<body>
  

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Consultorio Empresarial Curn Cartagena</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                
            Un consultorio empresarial es un espacio físico o virtual donde se brindan servicios de consultoría y asesoramiento a empresas. Estos servicios pueden incluir asesoramiento en áreas como gestión empresarial, marketing, recursos humanos, contabilidad, finanzas, tecnología de la información, entre otros.
            </p>
            <a href="#" style="color: orange;" class="hover:underline font-medium text-lg inline-flex items-center">Visitar el Consultorio
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
        <div>
            <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex justify-center">
                <img src="img/logotxtteal.png" alt="" class="w-30 h-20 m-0">
                </div>
                <form class="mt-8 space-y-6" action="php\login\registro.php" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Correo</label>
                        <input type="email" name="user" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Contraseña</label>
                        <input type="password" name="pass" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required />
                        </div>
                        <div class="ms-3 text-sm">
                        <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">Autorizar tratamiento de datos</label>
                        </div>
                        <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" style="color: #00a99e;" class="ms-auto text-sm font-medium text-write hover:underline cursor-pointer">Olvido su contraseña?</a>
                    </div>
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white rounded-lg  focus:ring-4 focus:ring-blue-300 sm:w-auto" style="background-color: orange;" >Acceder</button>
                    <button data-modal-target="authentication-modalAsesor" data-modal-toggle="authentication-modalAsesor" class="w-full px-5 py-3 text-base font-medium text-center text-white rounded-lg  focus:ring-4 focus:ring-blue-300 sm:w-auto" style="background-color: #00a99e;" >Asesor</button>

                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                    ¿Todavía no estás registrado?  <a href="php\usuario\userRegistrer.php" style="color: orange;" class=" hover:underline cursor-pointer" >Crea una cuenta</a>
                    </div>
                </form>
                
    <?php

if(isset($_GET['error']) && $_GET['error'] == 1) {
  echo "<div id='mensaje'>No se encontró su usuario o contrasaña.</div>";
}
?>

<?php

if(isset($_GET['erroractualizarpass']) && $_GET['erroractualizarpass'] == 1) {
  echo "<div id='mensaje'>codigo de validazación equivocado</div>";
}
?>

              
<?php

if(isset($_GET['errorRegistro']) && $_GET['errorRegistro'] == 1) {
  echo "<div id='mensaje'>¡la identificacion ya esta en uso!</div>";
}
?>

<?php

if(isset($_GET['errorRegistroCodigo']) && $_GET['errorRegistroCodigo'] == 1) {
  echo "<div id='mensaje'>¡Contraseña actualizada exitosamente!</div>";
}
?>


  <?php

if(isset($_GET['succces']) && $_GET['succces'] == 1) {
  echo "<div id='mensajeActualizar'>¡Contraseña actualizada exitosamente!</div>";
}
?>

<?php

if(isset($_GET['successRegistro']) && $_GET['successRegistro'] == 1) {
  echo "<div id='mensajeActualizar'>¡Usuario Registrado Correctamente exitosamente!</div>";
}
?>

<?php

if(isset($_GET['successRegistroAsesor']) && $_GET['successRegistroAsesor'] == 1) {
  echo "<div id='mensajeActualizar'>Asesor Registrado Correctamente exitosamente!</div>";
}
?>



<?php

if(isset($_GET['errorActualizar']) && $_GET['errorActualizar'] == 1) {
  echo "<div id='mensaje'>Su usuario no fue encontrado </div>";
}
?>
            </div>
        </div>
    </div>
</section>
  



<section>
<div id="authentication-modalAsesor" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <div class="flex justify-center">
                <img src="img/logotxtteal.png" alt="" class="w-30 h-20 m-0">
                </div>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modalAsesor">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="php\asesor\registroAsesor.php" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu correo</label>
                        <input type="email" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Tu Contraseña </label>
                        <input type="password" name="pass"  placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autorizar Tratamiento de datos</label>
                        </div>
                        <a data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal2" data-modal-hide="authentication-modalAsesor"  style="color: #00a99e;"   class="text-sm  hover:underline cursor-pointer">Olvido su contraseña?</a>
                    </div>
                    <button type="submit" style="background-color: orange;" class="w-full  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white ">Ingresar</button>
                  
                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                    ¿Todavía no estás registrado?  <a href="php\asesor\registrarAsesor.php" style="color: orange;" class=" hover:underline cursor-pointer" >Crea una cuenta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</section>

<section>
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cambiar su Contraseña
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="p-4 md:p-5">
                <form class="space-y-4" action="php/validarCambiopass/Enviarcodigo.php"  method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Correo</label>
                        <input type="email" name="usuario"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                  
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autoriza Tratamiento de Datos</label>
                        </div>
                     
                    </div>
                    <button type="submit" style="background-color: orange;" class="w-full text-whitefocus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white ">Enviar Codigo</button>
                   
                </form>
            </div>
        </div>
    </div>
</div> 

</section>

<section>

<div id="authentication-modal2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cambiar su Contraseña de Asesor
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="p-4 md:p-5">
                <form class="space-y-4" action="php/validarCambiopassAsesor/Enviarcodigoasesor.php" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Correo</label>
                        <input type="email" name="usuario"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                 
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autoriza Tratamiento de Datos</label>
                        </div>
                     
                    </div>
                    <button type="submit" style="background-color: orange;" class="w-full text-whitefocus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white ">Enviar codigo</button>
                   
                </form>
            </div>
        </div>
    </div>
</div> 


</section>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>  
<script>

function limpiarErrorEnURLSuccessDelite() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)successeliminar=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}


function limpiarErrorEnURL() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)error=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}

function limpiarErrorEnURLSuccess() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)succces=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}

function limpiarErrorEnURLSuccessAsesor() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)successRegistroAsesor=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}





function errorActualizar() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)errorActualizar=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}


function errorActualizar() {
    if (history.replaceState) {
        var urlSinError = window.location.pathname + window.location.search.replace(/(\?|&)successRegistro=1/g, '');
        history.replaceState(null, null, urlSinError);
    }
}



function ocultarMensaje() {
    setTimeout(function() {
        var mensaje = document.getElementById('mensaje');
        if (mensaje) {
            mensaje.style.display = 'none';
        }
    }, 3000); // 5000 milisegundos = 5 segundos
}

function ocultarMensajeSuccess() {
    setTimeout(function() {
        var mensaje = document.getElementById('mensajeActualizar');
        if (mensaje) {
            mensaje.style.display = 'none';
        }
    }, 2000); // 5000 milisegundos = 5 segundos
}


window.onload = function() {
    limpiarErrorEnURL();
    limpiarErrorEnURLSuccess()
    ocultarMensaje()
    ocultarMensajeSuccess()
    limpiarErrorEnURLSuccessDelite() 
    limpiarErrorEnURLSuccessAsesor()
};



</script>
</html>