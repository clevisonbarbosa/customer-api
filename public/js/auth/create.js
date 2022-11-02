$('#cep').mask('00000-000');
$('#uf').mask('SS');
$('#phone').mask('(00) 00000-0000');

$(document).on('blur', '#cep', function(){
    const cep = $(this).val();
    $.ajax({
        url: 'https://viacep.com.br/ws/'+cep+'/json/',
        method: 'GET',
        dataType: 'json',
        success: function(data){
            if(data.erro){
                alert('Endereço não encontrado!');
            }
            $('#uf').val(data.uf);
            $('#city').val(data.localidade);
            $('#publicPlace').val(data.logradouro);
            $('#district').val(data.bairro);
            $('#complement').val(data.complemento);
        }
    });
});