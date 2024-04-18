document.addEventListener('DOMContentLoaded', function() {
    var categorySelect = document.getElementById('category');
    var pcFields = document.getElementById('pcFields');
    var fileFields = document.getElementById('FileFields');
  
    categorySelect.addEventListener('change', function() {
      if (categorySelect.value === 'gestion de proyectos') {
        pcFields.classList.remove('hidden');
        fileFields.classList.remove('hidden');
      } else {
        pcFields.classList.add('hidden');
        fileFields.classList.add('hidden');
      }
    });
  });
  

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

function limpiarErrorEnURLSuccess() {
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


var current_fs, next_fs, previous_fs; 
var left, opacity, scale; 
var animating;

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	next_fs.show(); 
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 1 - (1 - now) * 0.2;
			left = (now * 50)+"%";
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	previous_fs.show(); 
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 0.8 + (1 - now) * 0.2;
			left = ((1-now) * 50)+"%";
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});

function showRecords(num) {
    // Obtener todas las filas de la tabla
    var rows = document.querySelectorAll('tbody tr');
    
    // Ocultar todas las filas
    for (var i = 0; i < rows.length; i++) {
        rows[i].style.display = 'none';
    }

    // Mostrar solo las primeras 'num' filas
    for (var i = 0; i < num; i++) {
        if (rows[i]) {
            rows[i].style.display = '';
        }
    }
}

window.onload = function() {
    limpiarErrorEnURL();
    limpiarErrorEnURLSuccess()
    ocultarMensaje()
    ocultarMensajeSuccess()
    limpiarErrorEnURLSuccessDelite() 
};

