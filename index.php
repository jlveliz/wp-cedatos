<?php get_header(); ?> 

<body>
	<!-- LOGO -->
	<header>
		<div class="container justify-content-center">
			<div class="p-3 text-center">
				<?php if (has_custom_logo()): ?>
					<?php  the_custom_logo();?>			
				<?php else: ?>
					<h3 class="text-uppercase"> <?php bloginfo( 'name' ); ?> </h3>
				<?php endif ?>
			</div>
		</div>
		<!-- PREHEADER -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 text-md-left text-center align-middle title-page">
					<?php the_title(); ?>
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
				<?php 
					$args = [
						'theme_location' => 'main',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbarNav',
						'menu_class' => 'navbar-nav',
						'walker' => new bootstrap_4_walker_nav_menu()
					];
					wp_nav_menu($args); 
				?>
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