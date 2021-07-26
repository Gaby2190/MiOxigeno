<?php

class ControladorProveedores{

	/*=============================================
	REGISTRO DE PROVEEDOR
	=============================================*/

	static public function ctrCrearProveedor(){

		if(isset($_POST["nuevoUsuarioP"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreP"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuarioP"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPasswordP"])){

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "";

				if(isset($_FILES["nuevaFotoP"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaFotoP"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/proveedores/".$_POST["nuevoUsuarioP"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFotoP"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["nuevoUsuarioP"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFotoP"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["nuevoUsuarioP"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "proveedores";

				$encriptar = crypt($_POST["nuevoPasswordP"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			

				$datos = array("nombre" => $_POST["nuevoNombreP"],
								"direccion" => $_POST["nuevaDireccionP"],
								"correo" => $_POST["nuevoCorreoP"],
								"telefono" => $_POST["nuevoTelefonoP"],
								"cantidad" => $_POST["nuevaCantidad"],
								"capacidad" => $_POST["nuevaCapacidad"],
					           "usuario" => $_POST["nuevoUsuarioP"],
					           "password" => $encriptar,
					           "perfil" => $_POST["nuevoPerfilP"],
					           "foto"=> $ruta);

				$respuesta = ModeloProveedores::mdlIngresarProveedor($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡Guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "proveedores";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡No puede estar vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "proveedores";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR PROVEEDOR
	=============================================*/

	static public function ctrMostrarProveedores($item, $valor){

		$tabla = "proveedores";

		$respuesta = ModeloProveedores::MdlMostrarProveedores($tabla, $item, $valor);

		return $respuesta;
	}

/*=============================================
	MOSTRAR PROVEEDOR INDIVIDUAL
	=============================================*/

	static public function ctrMostrarProveedor($item, $valor){

		$tabla = "proveedores";

		$respuesta = ModeloProveedores::MdlMostrarProveedor($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/

	static public function ctrEditarProveedores(){

		if(isset($_POST["editarUsuarioP"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombreP"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActualP"];

				if(isset($_FILES["editarFotoP"]["tmp_name"]) && !empty($_FILES["editarFotoP"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFotoP"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/proveedores/".$_POST["editarUsuarioP"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActualP"])){

						unlink($_POST["fotoActualP"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFotoP"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["editarUsuarioP"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFotoP"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["editarUsuarioP"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "proveedores";

				if($_POST["editarPasswordP"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPasswordP"])){

						$encriptar = crypt($_POST["editarPasswordP"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
										if (result.value) {

										window.location = "proveedores";

										}
									})

						  	</script>';

					}

				}else{

					$encriptar = $_POST["passwordActualP"];

				}

				$datos = array("nombre" => $_POST["editarNombreP"],
							   "usuario" => $_POST["editarUsuarioP"],
							   "direccion" => $_POST["editarDireccionP"],
								"correo" => $_POST["editarCorreoP"],
								"telefono" => $_POST["editarTelefonoP"],
								"cantidad" => $_POST["editarCantidad"],
								"capacidad" => $_POST["editarCapacidad"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfilP"],
							   "foto" => $ruta);

				$respuesta = ModeloProveedores::mdlEditarProveedor($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedores";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}


	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/

	static public function ctrEditarProveedor(){

		if(isset($_POST["editarUsuarioP"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombreP"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActualP"];

				if(isset($_FILES["editarFotoP"]["tmp_name"]) && !empty($_FILES["editarFotoP"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFotoP"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/proveedores/".$_POST["editarUsuarioP"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActualP"])){

						unlink($_POST["fotoActualP"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFotoP"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["editarUsuarioP"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFotoP"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/proveedores/".$_POST["editarUsuarioP"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFotoP"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "proveedores";

				if($_POST["editarPasswordP"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPasswordP"])){

						$encriptar = crypt($_POST["editarPasswordP"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
										if (result.value) {

										window.location = "proveedores";

										}
									})

						  	</script>';

					}

				}else{

					$encriptar = $_POST["passwordActualP"];

				}

				$datos = array("nombre" => $_POST["editarNombreP"],
							   "usuario" => $_POST["editarUsuarioP"],
							   "direccion" => $_POST["editarDireccionP"],
								"correo" => $_POST["editarCorreoP"],
								"telefono" => $_POST["editarTelefonoP"],
								"cantidad" => $_POST["editarCantidad"],
								"capacidad" => $_POST["editarCapacidad"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfilP"],
							   "foto" => $ruta);

				$respuesta = ModeloProveedores::mdlEditarProveedor($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedor";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}

	static public function ctrProveedoresActivados($item, $valor){

		$tabla = "proveedores";
		$respuesta = ModeloProveedores::MdlProveedoresActivados($tabla, $item, $valor);
		return $respuesta;
	}

	static public function ctrProveedoresNoActivados($item, $valor){

		$tabla = "proveedores";
		$respuesta = ModeloProveedores::MdlProveedoresActivados($tabla, $item, $valor);
		return $respuesta;
	}
	


}
	


