<!-- start: Menu : Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
		<a href="#" class="navbar-brand">Mi Pagina</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarTog" aria-controls="navbarTog" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTog">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Galeria</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contactos</a>
				</li>

				<li class="nav-item dropdown">					
					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mi Cuenta</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="views/registro/Ingresar.php" class="dropdown-item">ingresar</a>
						<a href="views/registro/Registro.php" class="dropdown-item">Registrarse</a>	
					</div>
				</li>
			</ul>


			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
			</form>


		</div>

	</nav>
	<!-- end: Menu : Navbar -->