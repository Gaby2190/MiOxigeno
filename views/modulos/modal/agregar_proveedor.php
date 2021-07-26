<div id="modalAgregarProveedor" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Proveedor</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombreP"
                                    placeholder="Ingresar nombre" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaDireccionP"
                                    placeholder="Ingresar dirección" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="mail" class="form-control input-lg" name="nuevoCorreoP"
                                    placeholder="Ingresar correo electronico" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevoTelefonoP"
                                    placeholder="Ingresar teléfono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevaCantidad"
                                    placeholder="Ingresar cantidad" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevaCapacidad"
                                    placeholder="Ingresar capacidad" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuarioP"
                                    placeholder="Ingresar usuario" id="nuevoUsuario" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="nuevoPasswordP"
                                    placeholder="Ingresar contraseña" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="hidden" class="form-control input-lg" name="nuevoPerfilP" value="PROVEEDOR"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="panel">SUBIR FOTO</div>
                            <input type="file" class="nuevaFoto" name="nuevaFotoP">
                            <p class="help-block">Peso máximo de la foto 2MB</p>
                            <img src="views/img/proveedores/default/anonymous.png" class="img-thumbnail previsualizar"
                                width="100px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

                <?php

                    $crearProveedor = new ControladorProveedores();
                    $crearProveedor -> ctrCrearProveedor();

                ?>

            </form>
        </div>
    </div>
</div>