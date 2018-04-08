

$(function(){
	var formulario = $('form[name=formulario]');	

	$('input[type=submit]').click(function(evento){
		var array = formulario.serializeArray();
		// o array[1] está recebendo um input hidden, por isso não precisa verificar posição [1]
		if(array[0].value == ''){
			$('.resp').html('<div class="informe"><p>Digite um comentário</p></div>');
		}else{
			/*PASSANDO OS DADOS ARMAZENADOS PARA UM ARRAY JSON*/
			$.ajax({
				method: 'post',
				url: 'forms/comentarpostagem.php',
				data: {cadastrar: 'sim', campos: array},
				dataType: 'json',
				beforeSend: function(){
					$('.resp').html('<div class="informe"><p>Enviando seu comentário</p></div>');
				},
				success: function(valor){
					if(valor.erro == 'sim'){
						$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');
					}					

					else{
						$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p></div>');
						
						setTimeout(function () {
							location.reload();
						}, 3000);										
					}
				}
			});	
		}
		evento.preventDefault();
	});	
});