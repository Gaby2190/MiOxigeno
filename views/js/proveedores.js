
/*=============================================
EDITAR PROVEEDOR
=============================================*/
$(document).on("click", ".btnEditarProveedor", function(){

	var idProveedor = $(this).attr("idProveedor");
	
	var datos = new FormData();
	datos.append("idProveedor", idProveedor);

	$.ajax({

		url:"ajax/proveedores.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#editarNombreP").val(respuesta["nombre"]);
			$("#editarUsuarioP").val(respuesta["usuario"]);
			$("#editarPerfilP").html(respuesta["perfil"]);
			$("#editarPerfilP").val(respuesta["perfil"]);
			$("#editarDireccionP").val(respuesta["direccion"]);
			$("#editarCorreoP").val(respuesta["correo"]);
			$("#editarTelefonoP").val(respuesta["telefono"]);
			$("#editarCantidad").val(respuesta["cantidad"]);
			$("#editarCapacidad").val(respuesta["capacidad"]);
			$("#fotoActualP").val(respuesta["foto"]);

			$("#passwordActualP").val(respuesta["password"]);

			if(respuesta["foto"] != ""){

				$(".previsualizar").attr("src", respuesta["foto"]);

			}

		}

	});

})

/*=============================================
ACTIVAR PROVEEDOR
=============================================*/
$(document).on("click", ".btnActivarP", function(){

	var idProveedor = $(this).attr("idProveedor");
	var estadoProveedor = $(this).attr("estadoProveedor");

	var datos = new FormData();
 	datos.append("activarId", idProveedor);
  	datos.append("activarProveedor", estadoProveedor);

  	$.ajax({

	  url:"ajax/proveedores.ajax.php",
	  method: "POST",
	  data: datos,
	  cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){

      	if(window.matchMedia("(max-width:767px)").matches){
		
      		 swal({
		      	title: "El usuario ha sido actualizado",
		      	type: "success",
		      	confirmButtonText: "¡Cerrar!"
		    	}).then(function(result) {
		        
		        	if (result.value) {

		        	window.location = "proveedores";

		        }

		      });


		}
      }

  	})

  	if(estadoProveedor == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoProveedor',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoProveedor',0);

  	}

})

/*=============================================
REVISAR SI EL PROVEDOR YA ESTÁ REGISTRADO
=============================================*/

$("#nuevoUsuarioP").change(function(){

	$(".alert").remove();

	var proveedor = $(this).val();

	var datos = new FormData();
	datos.append("validarProveedor", proveedor);

	 $.ajax({
	    url:"ajax/proveedores.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
	    	if(respuesta){

	    		$("#nuevoUsuarioP").parent().after('<div class="alert alert-warning">Este proveedor ya existe en la base de datos</div>');

	    		$("#nuevoUsuarioP").val("");

	    	}

	    }

	})
})






