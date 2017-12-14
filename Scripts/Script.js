$(document).ready(function(){
	
	$('#numeroDeTubo').keyup(function (event) {
        if (event.which == 13) {
						$('#numeroDeTubo').attr("disabled", "disabled");
			var numeroDeTubo= $('#numeroDeTubo').val();
			if(numeroDeTubo !== ''){
				if(numeroDeTubo=== '123' || numeroDeTubo === '7501428724101'){
					var existeTubo = $('#existeTubo').val();
					if(existeTubo === '1'){
						$('#texto').text('Exámenes registrados:');
						$('#msgExiste').show('slow');
					}
					else alert("El tubo" + numeroDeTubo + " fue dado de baja");
				}
				else {
					mostrarCatalogoExamenes();
					$('#primerEstudio').hide();
				} 
			}
			else{
				alert("es necesario que ingrese el número de tubo")
			}
        }
    });
	
	$('#agregar').click(function(){
		mostrarCatalogoExamenes();
	});
	
	$('.overlay').click(function(){
		ocultarCatalogoExamenes();
		ocultarConfirmacion();
	});
	
	$('.itemCatalogo').click(function(){
		var texto = $(this).text();
		var patt1 = /\s/g;
		var estudio = texto.replace(/ /g,'');
		$('#agregados').append('<div class="listItem itemTubo" estudio="' + estudio +'">' + texto + '</div>');
		ocultarCatalogoExamenes();
	});
	
	//$('.listItem').click(function(){
	$('html').on('click', '.listItem', function () {
		if(!$(this).hasClass('itemCatalogo')){
			// $('#quitarEstudio').val($(this).attr('estudio'));
			// mostrarConfirmacion();
			$(this).hide();
		}
	});
	
	// $('#quitarDeLista').click(function(){
	// });
	
	 $('.itemCatalogo').click(function(){
		 $('#texto').text('Registrar exámenes para nuevo tubo:');
		 
		 $('#msgExiste').show('slow');
	 });
	 
	 $('#limpiar').click(function(){
		 $('#numeroDeTubo').removeAttr("disabled"); 
		 $('#numeroDeTubo').val('');
		 $('#msgExiste').hide('slow');
	 });
	 
});


function mostrarCatalogoExamenes(){
	$('#CatalogoExamenes').show('slow');
	$('.overlay').fadeIn();
}

function ocultarCatalogoExamenes(){
	$('#CatalogoExamenes').hide('slow');
	$('.overlay').fadeOut();
}

function mostrarConfirmacion(){
	$('#confirmar').show('slow');
	$('.overlay').fadeIn();
}

function ocultarConfirmacion(){
	$('#confirmar').hide('slow');
	$('.overlay').fadeOut();
}