$(function(){
	$("#regU").on("click", function(){
		$("#infPer").validate({
			rules:{
				nombre:{required:true,minlength:3,maxlength:40},
				apellido:{required:true,minlength:3,maxlength:40},
				fechaN:{required:true},
				telefono:{required:true,minlength:5,maxlength:10},
				usuario:{required:true,minlength:5,maxlength:20},
				email:{required:true,minlength:5,maxlength:50},
				remail:{required:true,minlength:5,maxlength:50},
				password:{required:true,minlength:5,maxlength:10},
			},
			messages:{
				nombre:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				apellido:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				fechaN:{required:"Campo Obligatorio"},
				telefono:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 10 Caracteres"},
				usuario:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 20 Caracteres"},
				email:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 50 Caracteres"},
				remail:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 50 Caracteres"},
				password:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 10 Caracteres"},
			},
		});
	});
});

$(function(){
	$("#regE").on("click", function(){
		$("#infEmp").validate({
			rules:{
				usuario:{required:true,minlength:5,maxlength:40},
				nombre:{required:true,minlength:5,maxlength:40},
				apellido:{required:true,minlength:5,maxlength:40},
				telefono:{required:true,minlength:5,maxlength:10},
				email:{required:true,minlength:5,maxlength:50},
				password:{required:true,minlength:5,maxlength:10},
				nomEmp:{required:true,minlength:5,maxlength:40},
				telefonoEm:{required:true,minlength:5,maxlength:10},
				emailEmp:{required:true,minlength:5,maxlength:50},
				fechaN:{required:true},
				ntarjeta:{required:true},
				cvc:{required:true},

			},
			messages:{
				usuario:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				nombre:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				apellido:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				telefono:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 10 Caracteres"},
				email:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 50 Caracteres"},
				password:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 10 Caracteres"},
				nomEmp:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 40 Caracteres"},
				telefonoEm:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 10 Caracteres"},
				emailEmp:{required:"Campo Obligatorio",minlength:"Minimo 5 Caracteres",maxlength:"Maximo 50 Caracteres"},
				fechaN:{required:"Campo Obligatorio"},
				ntarjeta:{required:"Campo Obligatorio"},
				cvc:{required:"Campo Obligatorio"},
			},
		});
	});
});

$(function(){
	$("#bingU").on("click", function(){
		$("#inSU").validate({
			rules:{
				emOus:{required:true},
				pwd:{required:true},

			},
			messages:{
				emOus:{required:"Campo Obligatorio"},
				pwd:{required:"Campo Obligatorio"},
			
			},
		});
	});
});

$(function(){
	$("#bingE").on("click", function(){
		$("#inSE").validate({
			rules:{
				emOus:{required:true},
				pwd:{required:true},

			},
			messages:{
				emOus:{required:"Campo Obligatorio"},
				pwd:{required:"Campo Obligatorio"},
			
			},
		});
	});
});