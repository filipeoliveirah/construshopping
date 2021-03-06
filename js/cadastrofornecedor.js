$(function(){	
	var atual_fs, next_fs, prev_fs;
	var formulario = $('form[name=formulario]');
	
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
		var array = formulario.serializeArray();
		if(array[0].value == '' || array[1].value == '' || array[2].value == '' || array[4].value == '' || array[5].value == ''){
			$('.resp').html('<div class="erros"><p>Preencha os dados da primeira etapa.</p></div>');
		}else{
			$('.resp').html('');
			next($(this));
		}		
	});

	$('input[name=next2]').click(function(){
		var array = formulario.serializeArray();
		if(array[6].value == '' || array[7].value == '' || array[8].value == '' || array[9].value == '' || array[10].value == '' || array[11].value == ''){
			$('.resp').html('<div class="erros"><p>Informe-nos o endereço de sua empresa</p></div>');
		}else{
			$('.resp').html('');
			next($(this));
		}		
	});
	
	$('input[type=submit]').click(function(evento){
		var array = formulario.serializeArray();
		if (array[13].value == '' || array[14].value == '' || array[15].value == '' || array[16].value == '' || array[17].value == ''){
			$('.resp').html('<div class="erros"><p>Informe-nos seus dados da empresa</p></div>');
		}else{
			/*PASSANDO OS DADOS ARMAZENADOS PARA UM ARRAY JSON*/
			$.ajax({
				method: 'post',
				url: 'forms/cadastrarfornecedor.php',
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
						setTimeout(function () {
							window.location.href = "loginfornecedor.php";
						}, 2000);
					}
				}
			});	
		}
		evento.preventDefault();
	});	
});