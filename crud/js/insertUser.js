$(document).ready(function(){

	$('#textConfirm').hide();
	formSubmit();
})


function formSubmit(){
	
	$('#defaultForm').submit(function(e){
		e.preventDefault();

		var n = $('#firstName').val();
		var a = $('#lastName').val();
		var d = $('#dni').val();
		var u = $('#username').val();
		var e = $('#email').val();
		var p = $('#password').val();
		var num = $('#numCard').val();
		var c = $('#contrato').val();

		var datos = n+a+d+u+e+p+num+c;

		$.ajax({
			url:'../ingreso.php',
			type:'POST',
			data: datos,
		})

		})

}