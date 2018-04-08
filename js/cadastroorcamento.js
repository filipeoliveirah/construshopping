$(function(){
	let atual_fs, next_fs, prev_fs;
	let formulario = $('form[name=formulario]');

	function next(elem){
		atual_fs = $(elem).parent();
		next_fs = $(elem).parent().next();

		$('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
		atual_fs.hide(800);
		next_fs.show(800);
	}

	$('.prev').click(function(){
		atual_fs = $(this).parent();
		prev_fs = $(this).parent().prev();

		$('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
		atual_fs.hide(800);
		prev_fs.show(800);
	});

	$('input[name=next1]').click(function(){
		//var array = formulario.serializeArray();
		$('.resp').html('');
		next($(this));	
	});

	$('input[name=next2]').click(function(){
		//var array = formulario.serializeArray();
		$('.resp').html('');
		next($(this));
	});

	$('input[type=submit]').click(function(evento){
		
		let incre = $('#incremento').val();
		let clilog = $('#cliente_id_logado').val();
		
		let array = formulario.serializeArray();
		let verifica = 1; 
		while(verifica <= array[0].value){
			if(array[verifica].value == ''){
				$('.resp').html('<div class="erros"><p>Diga qual equipamento desejado</p></div>');
			}
			verifica++;	
		}
		/*PASSANDO OS DADOS ARMAZENADOS PARA UM ARRAY JSON*/
		$.ajax({
			method: 'post',
			url: 'forms/cadastrarorcamento.php',
			dataType: 'json',
			data: {cadastrar: 'sim', campos: array, incremento: incre, cliente_id_logado: clilog},		
			beforeSend: function(){
				$('.resp').html('<div class="ok"><p>Aguarde enquanto enviamos seus dados</p></div>');
			},
			success: function(valor){
				if(valor.erro == 'sim'){
					$('.resp').html('<div class="erros"><p>'+valor.getErro+'</p></div>');
				}
				else{
					$('.resp').html('<div class="ok"><p>'+valor.mensagem+'</p></div>');						
					/*setTimeout(function () {
						window.location.href = "meupainel.php";
					}, 3000); */										 
				}
			}
		});		
		evento.preventDefault();
	});	
});