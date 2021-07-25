<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MiOxigeno</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="views/img/plantilla/icono-negro.png">
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <link rel="stylesheet" href="views/plugins/iCheck/all.css">

    <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">

    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>

    <script src="views/dist/js/adminlte.min.js"></script>

    <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <script src="views/plugins/iCheck/icheck.min.js"></script>

    <script src="views/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <script src="views/plugins/jqueryNumber/jquerynumber.min.js"></script>

    <script src="views/bower_components/moment/min/moment.min.js"></script>
    <script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="views/bower_components/raphael/raphael.min.js"></script>
    <script src="views/bower_components/morris.js/morris.min.js"></script>

    <script src="views/bower_components/Chart.js/Chart.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

    <?php
    
  

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    include "modulos/cabezote.php";

    include "modulos/menu.php";

  
    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
      
         $_GET["ruta"] == "usuarios" ||

         $_GET["ruta"] == "proveedores" ||

         $_GET["ruta"] == "proveedor" ||

         $_GET["ruta"] == "proveedores-activados" ||

         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";
  

  }

  ?>

    <script src="views/js/plantilla.js"></script>
    <script src="views/js/usuarios.js"></script>
    <script src="views/js/proveedores.js"></script>
    
</body>

</html>