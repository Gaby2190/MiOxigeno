<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree">

            <?php
		if($_SESSION["perfil"] == "ADMINISTRADOR"){

			echo '	<li class="active">
						<a href="inicio">
							<i class="fa fa-home"></i>
								<span>Inicio</span>
						</a>
					</li>
					<li>
						<a href="usuarios">
							<i class="fa fa-user"></i>
								<span>Usuarios</span>
						</a>
					</li>
					<li>
						<a href="proveedores">
							<i class="fa fa-user"></i>
								<span>Proveedores</span>
						</a>
					</li>	
					 ';
		}
		if($_SESSION["perfil"] == "PROVEEDOR"){

			echo '	<li class="active">
						<a href="inicio">
							<i class="fa fa-home"></i>
								<span>Inicio</span>
						</a>
					</li>
					<li>
						<a href="proveedor">
							<i class="fa fa-user"></i>
								<span>Proveedores</span>
						</a>
					</li>	
					 ';
		}

		if($_SESSION["perfil"] == "USUARIO"){

			echo '	
			
					<li class="active">
						<a href="inicio">
							<i class="fa fa-home"></i>
								<span>Inicio</span>
						</a>
					</li>
					<li>
						<a href="proveedores-activados">
							<i class="fa fa-user"></i>
								<span>Proveedores</span>
						</a>
					</li>
			
				';
		}

		?>

        </ul>
    </section>
</aside>