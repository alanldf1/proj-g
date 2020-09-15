var cadastro = function(){

	$('#btn-cadastro').click(function(){

		var email = $('input[name="email"]').val();
		var nome  = $('input[name="name"]').val();
	

		if(email == ""){
			alert('Digite seu e-mail');
			return false
		}
		if(nome == ""){
			alert('Digite seu nome');
			return false
		}

		$.ajax({
			type: 'post',
			dataType: 'json',
			url: 'mensagem',
			data: {
				nome: nome,
				email: email,
				tel: tel,
				mensagem: mensagem
			},

			success: function(response){

				if(response){
					alert('Cadastro realizado com sucesso');

					$('input').val('')
				}else{
					alert('Não foi possível realizar seu cadastro');
				}

			}

		});

	});

}

$(document).ready(function(){
	cadastro();
});