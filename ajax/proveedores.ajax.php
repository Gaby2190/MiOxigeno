<?php

require_once "../controllers/proveedores.controlador.php";
require_once "../models/proveedores.modelo.php";

class AjaxProveedores{

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/	

	public $idProveedor;

	public function ajaxEditarProveedor(){

		$item = "id";
		$valor = $this->idProveedor;

		$respuesta = ControladorProveedores::ctrMostrarProveedores($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR PROVEEDOR
	=============================================*/	

	public $activarProveedor;
	public $activarId;


	public function ajaxActivarProveedor(){

		$tabla = "proveedores";

		$item1 = "estado";
		$valor1 = $this->activarProveedor;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = ModeloProveedores::mdlActualizarProveedor($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR PROVEEDOR
	=============================================*/	

	public $validarProveedor;

	public function ajaxValidarProveedor(){

		$item = "proveedor";
		$valor = $this->validarProveedor;

		$respuesta = ControladorProveedor::ctrMostrarProveedores($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR PROVEEDOR
=============================================*/
if(isset($_POST["idProveedor"])){

	$editar = new AjaxProveedores();
	$editar -> idProveedor = $_POST["idProveedor"];
	$editar -> ajaxEditarProveedor();

}

/*=============================================
ACTIVAR PROVEEDOR
=============================================*/	

if(isset($_POST["activarProveedor"])){

	$activarProveedor = new AjaxProveedores();
	$activarProveedor -> activarProveedor = $_POST["activarProveedor"];
	$activarProveedor -> activarId = $_POST["activarId"];
	$activarProveedor -> ajaxActivarProveedor();

}

/*=============================================
VALIDAR NO REPETIR PROVEEDOR
=============================================*/

if(isset( $_POST["validarProveedor"])){

	$valProveedor = new AjaxProveedores();
	$valProveedor -> validarProveedor = $_POST["validarProveedor"];
	$valProveedor -> ajaxValidarUsuario();

}