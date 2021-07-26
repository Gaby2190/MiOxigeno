<?php

$item = null;
$valor = null;

$datosLibres = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
$totalUsuariosRegistrados = count($datosLibres);

$datosLibres = ControladorProveedores::ctrMostrarProveedores($item, $valor);
$totalProveedoresRegistrados = count($datosLibres);

$itemLibre = "estado";
$valorLibre = 1;

$datosLibres = ControladorUsuarios::ctrUsuariosActivados($itemLibre, $valorLibre);
$totalUsuariosActivados = count($datosLibres);

$datosLibres = ControladorProveedores::ctrProveedoresActivados($itemLibre, $valorLibre);
$totalProveedoresActivados = count($datosLibres);

$itemLibre = "estado";
$valorLibre = 0;

$datosLibres = ControladorUsuarios::ctrUsuariosNoActivados($itemLibre, $valorLibre);
$totalUsuariosNoActivados = count($datosLibres);

$datosLibres = ControladorProveedores::ctrProveedoresNoActivados($itemLibre, $valorLibre);
$totalProveedoresNoActivados = count($datosLibres);

if($_SESSION["perfil"] == "ADMINISTRADOR"){

  echo '	
  
  <div class="col-lg-6 col-xs-6">
  <div class="small-box bg-purple">
    <div class="inner">
      <h3>'.$totalUsuariosRegistrados.'</h3>
      <p>USUARIOS REGISTRADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
    <a href="usuarios" class="small-box-footer">
      Más info <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-navy">
    <div class="inner">
      <h3>'.$totalProveedoresRegistrados.'</h3>
      <p>PROVEEDORES REGISTRADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
    <a href="proveedores" class="small-box-footer">
      Más info <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-orange">
    <div class="inner">
      <h3>'.$totalUsuariosActivados.'</h3>
      <p>USUARIOS ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-navy">
    <div class="inner">
      <h3>'.$totalProveedoresActivados.'</h3>
      <p>PROVEEDORES ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-orange">
    <div class="inner">
      <h3>'.$totalUsuariosNoActivados.'</h3>
      <p>USUARIOS NO ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-navy">
    <div class="inner">
      <h3>'.$totalProveedoresNoActivados.'</h3>
      <p>PROVEEDORES NO ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
  </div>
</div>


       ';
}

if($_SESSION["perfil"] == "USUARIO"){

  echo '	
  
<div class="col-lg-12 col-xs-12">
  <div class="small-box bg-orange">
    <div class="inner">
      <h3>'.$totalProveedoresActivados.'</h3>
      <p>PROVEEDORES</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
  </div>
</div>


       ';
}



if($_SESSION["perfil"] == "PROVEEDOR"){

  echo '  
  
  <div class="col-lg-6 col-xs-6">
  <div class="small-box bg-purple">
    <div class="inner">
      <h3>'.$totalUsuariosRegistrados.'</h3>
      <p>USUARIOS REGISTRADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
  </div>
</div>

<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-orange">
    <div class="inner">
      <h3>'.$totalUsuariosActivados.'</h3>
      <p>USUARIOS ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
  </div>
</div>



<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-orange">
    <div class="inner">
      <h3>'.$totalUsuariosNoActivados.'</h3>
      <p>USUARIOS NO ACTIVADOS</p>
    </div>
    <div class="icon">
      <i class="fa fa-windows"></i>
    </div>
  </div>
</div>




       ';
}


?>







































