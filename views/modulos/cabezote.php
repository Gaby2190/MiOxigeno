<header class="main-header">
     <a href="inicio" class="logo">
         <span class="logo-mini">
             <img src="views/img/plantilla/icono-blanco.png" class="img-responsive" style="padding:10px">
         </span>
         <span class="logo-lg">
            <h4>Mi Oxigeno</h4>
         </span>
     </a>
     <nav class="navbar navbar-static-top" role="navigation">
         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
             <span class="sr-only">Toggle navigation</span>
         </a>
         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav">
                 <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                         <?php
					if($_SESSION["foto"] != ""){
						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
					}else{
						echo '<img src="views/img/usuarios/default/anonymous.png" class="user-image">';
					}
					?>

                         <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>
                     </a>
                 <li>
                     <a href="#" data-toggle="modal" data-target="#Logout"><i class="fa fa-sign-out"></i></a>
                 </li>
                 </li>
             </ul>
         </div>
     </nav>
 </header>

 <?php include 'modal/logout.php'?>