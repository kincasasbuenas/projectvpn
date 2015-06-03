
$(document).on('click','#btn-iniciar',function(e){
	 $("#forminiciasesion").validate({
	 	rules: {
		    user: {required:true},
		    pass:{required:true}
		},
	    messages:{
		   	user:{required:"Debes ingresar tu usuario"},
		   	pass:{required:"Debes ingresar tu contrase&ntilde;a"}
	   },
	   highlight: function(element, errorClass){
			$(element).addClass(errorClass);
		},
		 unhighlight: function(element, errorClass) {
     		$(element).removeClass(errorClass);
     	}
	 });

	 if($('#forminiciasesion').valid())
	{
		$.ajax({
			type:'POST', 	 		
	 		url:'funcphp/login.php',
	 		data:$('#forminiciasesion').serialize(),
			success: function(result)
				{
					if(result==1)
					{
						window.location.href = "instaladores.php";
						$('.datos-incorrectos').hide();
					}
					else
					{
						if(result==0)
						{
						window.location.href = "index.php";
						}
					}
				}
	 	});
	}
});

$(document).on('ready',function(e){
	$.ajax({
			type:'POST', 	 		
	 		url:'funcphp/cerrar-error.php',
			success: function(result)
				{
					if(result==1)
					{
						window.location.href = "index.php";
					}
				}
	 	});
});


