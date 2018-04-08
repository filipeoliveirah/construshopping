

$(function(){
	var formulario = $('form[name=formulario]');	

	$('input[type=submit]').click(function(evento){
		var array = formulario.serializeArray();
		// o array[1] está recebendo um input hidden, por isso não precisa verificar posição [1]
		if(array[0].value == '' || array[1].value == ''){
			$('.resp').html('<div class="informe"><p>Preencha todos os campos</p></div>');
		}else{			
			email = $('#email').val();
			idUsuario = $('#idUsuario').val();
			$.ajax({
				method: 'post',
				url: 'forms/cadastrarticket.php',
				data: {cadastrar: 'sim', campos: array, email: email, idUsuario: idUsuario, status: 'aberto'},
				dataType: 'json',
				beforeSend: function(){
					$('.resp').html('<div class="ok"><p>Aguarde enquanto enviamos seu ticket</p></div>');
				},
				success: function(valor){
					if(valor.erro == 'sim'){
						$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');
					}
					else{
						$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p></div>');
						
						setTimeout(function () {
							window.location.href = "meupainel.php";
						}, 3000); 				
					}
				}
			});	
		}
		evento.preventDefault();
	});	
});