
$(function () {        
    let scntDiv = $('#dynamicDiv');
    let incremento = 1;
    
    $(document).on('click', '#addInput', function () {        
        incremento+=1;
        $('#incremento').val(incremento);
        $('<div class="panel-group" id="accordion">' +
        '<div class="panel panel-default" id="dynamicDiv'+incremento+'">'+
            '<div class="panel-heading">'+
            '<div class="btn btn-danger removerBotao" style="position:absolute; left: 38px"> X </div>'+
            '<div class="text-center" style="margin:10px 0;">'+
                '<h4 class="panel-title">'+
                '<a class="linkCollapse" data-toggle="collapse" href="#collapse'+incremento+'">Equipamento '+'</a>'+
                '</h4>'+
            '</div>'+
            '</div>'+
            '<div id="collapse'+incremento+'" class="panel-collapse collapse">'+
            '<div class="panel-body">'+                         
                '<label for="completar">Selecione o modelo:</label>'+
                '<div class="col-md-12">'+
                    '<input type="text" class="completar" name="equipamento'+incremento+'" placeholder="Digite o nome de um equipamento">'+                  
                '</div>'+                  
                '<div class="col-md-6">'+
                '<label for="sel2">Quantos dias deseja utilizar?</label>'+
                '<select class="form-control" name="periodo'+incremento+'">'+                   
                    '<option value="">Selecione o dia</option>'+      
                    '<option value="1">1 dia</option>'+
                    '<option value="7">7 dias</option>'+
                    '<option value="15">15 dias</option>'+
                    '<option value="30">30 dias</option>'+
                '</select>'+
                '</div>'+                        
                '<div class="col-md-6">'+                                  
                    '<label for="sel1">Qual quantidade de equipamentos?</label>'+
                    '<input type="text" name="quantidade'+incremento+'" placeholder="Digite um número"/>'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<textarea name="observacoes'+incremento+'" placeholder="Insira suas observações" rows="5" cols="45"></textarea>'+  
                '</div>'+
            '</div>'+
            '</div>'+
        '</div>'+
        '</div>').appendTo(scntDiv);
        return false;
    }); 

    $(document).on('click','.removerBotao', function () {
        $(this).parents('#accordion').remove();
        return false;
    });
});      
