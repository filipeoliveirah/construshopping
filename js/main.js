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

let accID = document.getElementById("accordion-head");
accID.addEventListener("click", accordion("accordion-body"));
function accordion(divId) {
    if (accID.className.indexOf("esconder-accordion") == -1) {
        accID.className += " esconder-accordion";
    } else { 
        accID.className = accID.className.replace("esconder-accordion", "");
    }
}