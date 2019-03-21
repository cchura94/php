
<?php 
require('views/layouts/sitio/header.php');
require('views/layouts/sitio/menu.php');

 ?>


	<!-- start: Slider : Carousel -->
	<div id="controles" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item" >
				<img src="views/assets/img/img1.jpg" class="d-block w-100" alt="..." style="height:100vh">
				<div class="carousel-caption d-none d-md-block">
					<h5>Lorem ipsum dolor sit amet</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid.</p>
				</div>
			</div>
			<div class="carousel-item active" >
				<img src="views/assets/img/img2.jpg" class="d-block w-100" alt="..." style="height:100vh">
				<div class="carousel-caption d-none d-md-block">
					<a href="#" class="btn btn-info">Descargar</a>
					<h5>Lorem ipsum dolor sit amet</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid.</p>
				</div>
			</div>
			<div class="carousel-item" >
				<img src="views/assets/img/img3.jpg" class="d-block w-100" alt="..." style="height:100vh">
				<div class="carousel-caption d-none d-md-block">
					<h5>Lorem ipsum dolor sit amet</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid.</p>
				</div>
			</div>			
		</div>

		<a href="#controles" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="sr-only">Atras</span>
		</a>
		<a href="#controles" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="sr-only">Siguiente</span>
		</a>


	</div>
	<!-- end: Slider : Carousel -->

	<!-- start : Contenido : container -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mt-5 mb-5">				
				<h1>Bienvenido a mi Pagina</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A nisi dicta rem facilis dolorem dolorum est, aspernatur incidunt.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="views/assets/img/img2.jpg" alt="">
					<div class="card-body">
						<h5 class="card-title">Titulo 1</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptate reiciendis, inventore.
						</p>
						<button class="btn btn-info">Leer más</button>
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="views/assets/img/img3.jpg" alt="">
					<div class="card-body">
						<h5 class="card-title">Titulo 1</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptate reiciendis, inventore.
						</p>
						<button class="btn btn-info">Leer más</button>
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="views/assets/img/img4.jpg" alt="">
					<div class="card-body">
						<h5 class="card-title">Titulo 1</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptate reiciendis, inventore.
						</p>
						<button class="btn btn-info">Leer más</button>
					</div>					
				</div>
			</div>	

		</div>
	</div>
	<!-- end : Contenido : container -->

<?php 

require('views/layouts/sitio/footer.php');

 ?>