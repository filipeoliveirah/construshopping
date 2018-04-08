

$(function(){
	var formulario = $('form[name=formulario]');
	

	$('input[type=submit]').click(function(evento){
		var array = formulario.serializeArray();
		if(array[0].value == '' || array[1].value == '' || array[2].value == '' || array[3].value == '' || array[4].value == '' || array[5].value == ''){
			$('.resp').html('<div class="erros"><p>Informe-nos seus dados pessoais</p></div>');
		}else{
			/*PASSANDO OS DADOS ARMAZENADOS PARA UM ARRAY JSON*/
			$.ajax({
				method: 'post',
				url: 'forms/cadastrarcliente.php',
				data: {cadastrar: 'sim', campos: array},
				dataType: 'json',
				beforeSend: function(){
					$('.resp').html('<div class="ok"><p>Aguarde enquanto enviamos seus dados</p></div>');
				},
				success: function(valor){
					if(valor.erro == 'sim'){
						$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');
					}
					else{
						$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p></div>');
						window.location = "login.php";
					}
				}
			});	
		}
		evento.preventDefault();
	});	
});