<?php get_header(); ?>

<body>
	<!-- LOGO -->
	<header>
		<div class="container justify-content-center">
			<div class="p-3 text-center">
				<a href="#">
					<img class="mx-auto" src="images/logo.png" alt="">
				</a>
			</div>
		</div>
		<!-- PREHEADER -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 text-md-left text-center align-middle title-page">
					Inicio
				</div>
				<div class="col-lg-6 col-md-6 col-12 align-middle text-center">
					<ul class="nav justify-content-md-end justify-content-lg-end  justify-content-center mt-3 mt-lg-0 mt-md-0 auth-section">
						<li class="nav-item"><a class="nav-link" href="#">Ingreso</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- NAV -->

		<div class="container" id="main-nav">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- <a class="navbar-brand" href="#">Navbar</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php wp_nav_menu( array( 'menu' => 'main', 'menu_class' => 'navbar-nav') ); ?>
					<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">Quienes Somos</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Productos y Servicios</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">Estudios Realizados</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a href="#" class="dropdown-item text-left">Children</a>
								<a href="#" class="dropdown-item text-left">Children</a>
								<a href="#" class="dropdown-item text-left">Children</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link">Metodología</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Publicaciones</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Clientes</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Contáctenos</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<section class="emtpy"></section>
	</header>

	<div id="main-container" class="container">
		<h3>Hola</h3>
		<ul class="list-unstyled">
			<li>Hola</li>
			<li>hola</li>
			<li>Hola</li>
		</ul>
		<div class="row">
			<div class="container-post col-8">
				<div class="row">
					<div class="col-4">
						<img src="" alt="" class="mx-auto">
					</div>
					<div class="col-8">
						<h2 class="title-post">Contenido</h2>
						<p class="extract-post">Contenido del post</p>
						<a href="" class="read-more">Leer Más</a>
					</div>
				</div>
			</div>

			<div class="container-post col-8">
				<div class="row">
					<div class="col-4">
						<img src="" alt="" class="mx-auto">
					</div>
					<div class="col-8">
						<h2 class="title-post">Segundo Contenido</h2>
						<p class="extract-post">Contenido del post</p>
						<a href="" class="read-more">Leer Más</a>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>