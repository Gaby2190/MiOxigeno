<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/proveedores.controlador.php";

require_once "models/usuarios.modelo.php";
require_once "models/proveedores.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();