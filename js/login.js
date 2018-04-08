

$(function(){
	var formulario = $('form[name=formulario]');
	

	$('input[type=submit]').click(function(evento){
		var array = formulario.serializeArray();
		if(array[0].value == '' || array[1].value == ''){
			$('.resp').html('<div class="erros"><p>Informe-nos seus dados</p></div>');
		}
		else{
			/*PASSANDO OS DADOS ARMAZENADOS PARA UM ARRAY JSON*/
			$.ajax({
				method: 'post',
				url: 'forms/validarlogin.php',
				data: {validar: 'sim', campos: array},
				dataType: 'json',
				beforeSend: function(){
					$('.resp').html('<div class="ok"><p>Aguarde enquanto estamos validando seus dados.</p></div>');
				},
				success: function(valor){
					if(valor.erro == 'sim'){
						$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');
					}
					else{
						$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p></div>');
						window.location = "meupainel";
					}
				}
			});

		}
		evento.preventDefault();
	});	
});