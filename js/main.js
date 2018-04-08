//AUTOCOMPLETAR
$(document).on('input', '.completar', function(){    
    $(this).autocomplete({
        source: function(request, response){
            $.ajax({
                type: "GET",
                url: "forms/meusprodutos.php",
                data: {q:request.term},
                success: function(data){
                    response(data);
                },                        
                dataType: "json"
            });
        },
        minLength: 1
    });
});

//AUTOCOMPLETAR