<div id="back"></div>
<div class="login-box">
    <div class="login-box-body">
        <form method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="password" class="form-control" id="txtPassword" placeholder="Contraseña"
                        name="ingPassword" required>
                    <div class="input-group-addon">
                        <i id="show_password" onclick="mostrarPassword()" class="fa fa-eye-slash icon"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">INGRESO a MI OXIGENO</button>
                </div>
            </div>
            <?php

                $loginusuario = new ControladorUsuarios();
                $loginusuario -> ctrIngresoUsuario();

            ?>
        </form>

        <div class="social-auth-links text-center">
            <p>- ¿Aún no estas REGISTRADO?-</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat" data-toggle="modal" data-target="#modalAgregarProveedor"><i class="fa fa-gear" ></i> REGISTRATE como PROVEEDOR</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat" data-toggle="modal" data-target="#modalAgregarUsuario"><i class="fa fa-user"></i> REGISTRATE como USUARIO</a>
        </div>


        <?php include 'modal/agregar_proveedor.php'?>
        
        <?php include 'modal/agregar_usuario.php'?>

        <script>
        function mostrarPassword() {
            var cambio = document.getElementById("txtPassword");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        $(document).ready(function() {
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
        </script>