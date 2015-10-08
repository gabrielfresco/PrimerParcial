function validarLogin()
{	
   var parametro=$("#dni").val();
		
	var funcionAjax=$.ajax({
		url:"php/sesion.php",
		type:"post",
		data:{
			
			dni:parametro
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#principal").html(retorno);
		alert(retorno);
	});

}

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			
			MostarIngreso();//MostarLogin();
			
			
	});	
}


