$('#registro').on('click',function(){
    var dato = $('#genre').val();
    var token = $('#token').val();
    if(dato !==""){
        $.ajax({
            url     : LA.base_url+'genero',
            headers : {'X-CSRF-TOKEN': token},
            type    : 'POST',
            data    : {genre: dato},
            dataType: 'json',
            beforeSend:function(){

            },
            success: function(response){
                console.log("response_: ",response);
                $("#message").html("<strong>"+response.mensaje+"</strong>");
                $("#message").fadeIn();
            }
        });
    }

});
