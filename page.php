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
					<ul class="nav justify-content-md-end justify-content-lg-end  justify-content-center my-3 mt-lg-0 mt-md-0 auth-section">
						<li class="nav-item"><a class="nav-link" href="#">Ingreso</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- NAV -->

		<div class="container" id="main-nav">
			<nav class="navbar d-flex justify-content-sm-center navbar-expand-lg navbar-light">
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
	</header>
	<div id="main-container" class="container">
		
		<section class="row empty mb-4"></section>
		
		<!-- WIDGETS PREFOOTER -->
			<div class="row">
				<?php if (is_active_sidebar( 'precontent_left' )): ?>
					<div class="col-12 justify-content-md-left justify-content-center text-center text-md-left <?php if(!is_active_sidebar( 'precontent_right' )) : ?>col-md-12<?php else: ?>col-md-8<?php endif; ?>">
						<?php dynamic_sidebar( 'precontent_left' );  ?>
					</div>
				<?php endif ?>

				<?php if (is_active_sidebar( 'precontent_right' )): ?>
					<div class="col-12 justify-content-md-right justify-content-center mt-3 mt-md-0 text-center text-md-right <?php if(!is_active_sidebar( 'precontent_left' )) : ?>col-md-12<?php else: ?>col-md-4<?php endif; ?>">
						<?php dynamic_sidebar( 'precontent_right' );  ?>
					</div>
				<?php endif ?>
			</div>
			
			<main class="the-content my-4">
				<div class="row">
					<div class="col-12 p-0">
					<?php if (have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<?php the_content() ?>
					<?php endwhile; ?>
					</div>
				<?php else: ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				</div>
			</main>

<?php get_footer(); ?>