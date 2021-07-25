<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administrar proveedor
        </h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Administrar proveedor</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Direccion</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Cantidad</th>
                            <th>Capacidad</th>
                            <th>Foto</th>
                            <th>Perfil</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

        $item = "id";
        echo $valor = $_SESSION["id"];

        $proveedores = ControladorProveedores::ctrMostrarProveedor($item, $valor);

       foreach ($proveedores as $key => $value){
         
          echo ' <tr>
                  <td>1</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["direccion"].'</td>
                  <td>'.$value["correo"].'</td>
                  <td>'.$value["telefono"].'</td>';

                  echo '<td><button class="btn btn-primary btn-xs">'.$value["cantidad"].'</button></td>'; 

                  echo '<td><button class="btn btn-info btn-xs">'.$value["capacidad"].'</button></td>'; 

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                  }else{

                    echo '<td><img src="views/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                        

                  echo '<td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarProveedor" idProveedor="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarProveedor"><i class="fa fa-pencil"></i></button>

  

                    </div>  

                  </td>

                </tr>';
        }


        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?php include 'modal/actualizar_proveedor.php'?>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?>