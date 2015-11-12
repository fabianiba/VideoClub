$(document).ready(function(){
	
	$("#cartel").hide();
	$.ajax({
		url:"updateCustomer.php",
		method:"POST"
	}).done(function(c) {
		var result = JSON.parse(c);
		console.log(c);

		$('#firstName').val(result[0].nombre);
		$('#lastName').val(result[0].apellido);
		$('#dni').val(result[0].dni);
		$('#email').val(result[0].email);
		$('#password').val(result[0].password);
		$('#numCard').val(result[0].nroTarjeta);
		$('#contrato').val(result[0].contrato);
		$('#username').val(result[0].usuario);
		$('#contrato').val(result[0].contrato);
		$('#idOculto').val(result[0].idusuario);

	});

	$('#bntEnviar').attr("disabled", true);

	$('#firstName, #lastName, #dni, #email, #password, #numCard, #contrato, #username').keypress(function(){
		$('#bntEnviar').attr("disabled", false);
		$("#cartel").hide();

	});

	$('#contrato').change(function(){
		$('#bntEnviar').attr("disabled", false);
		$("#cartel").hide();
	});
	
	$('#bntEnviar').on('click',function(){
		$.ajax({
			url:"actualizarCustomers.php",
			data:$('#defaultForm').serialize(),
			method:"POST"
		})
		//$("#cartel").text('Sus datos fueron modificados correctamente.');
		$("#cartel").show();
		$('#bntEnviar').attr("disabled", true);
		return false;
	});

	$('.close').on('click',function(e){
		e.preventDefault();
		$("#cartel").hide();
	})


})
