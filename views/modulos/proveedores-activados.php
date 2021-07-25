<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Proveedores
        </h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Proveedores</li>
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


                            <?php
		if($_SESSION["perfil"] == "ADMINISTRADOR"){

			echo '	 <th>Nombre</th>
            <th>Usuario</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Cantidad</th>
            <th>Capacidad</th>
            <th>Foto</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>	
					 ';
		}

        if($_SESSION["perfil"] == "USUARIO"){

			echo '	 <th>Nombre</th>
            <th>Usuario</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Cantidad</th>
            <th>Capacidad</th>
            <th>Foto</th>
           
           	
					 ';
		}

        
                           
                            ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

        $item = "estado";
        $valor = 1;

        $proveedores = ControladorProveedores::ctrProveedoresActivados($item, $valor);

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

                  if ($value["perfil"] == "ADMINISTRADOR") {

                    echo '<td>'.$value["perfil"].'</td>';

                    if($value["estado"] != 0){
  
                      echo '<td><button class="btn btn-success btn-xs btnActivarP" idProveedor="'.$value["id"].'" estadoProveedor="0">Activado</button></td>';
  
                    }else{
  
                      echo '<td><button class="btn btn-danger btn-xs btnActivarP" idProveedor="'.$value["id"].'" estadoProveedor="1">Desactivado</button></td>';
  
                    }             
  
                    echo '<td>
  
                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarProveedor" idProveedor="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarProveedor"><i class="fa fa-pencil"></i></button>
  
    
  
                      </div>  
  
                    </td>
  
                  </tr>';
                      
                  }

                
        }


        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>