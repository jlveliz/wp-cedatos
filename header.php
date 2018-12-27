<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title><?php echo get_the_title(); ?> - <?php bloginfo( 'title' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

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
					<?php 
					if (is_page()) {
						the_title();
					} else { ?>
						Noticias
					<?php } ?>
				</div>
				<div class="col-lg-6 col-md-6 col-12 align-middle text-center">
					<?php 
						$args = [
							'theme_location' => 'auth-area',
							'container' => 'ul',
							'menu_class' => 'nav justify-content-md-end justify-content-lg-end  justify-content-center my-3 mt-lg-0 mt-md-0 auth-section',
						];
						wp_nav_menu($args); 
					?>
				</div>
			</div>
		</div>

		<!-- NAV -->

		<div class="container-fluid text-center" id="main-nav">
			<div class="container px-0">
				<nav class="nav-bar navbar-expand-md navbar-dark justify-content-center">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php 
						$args = [
							'theme_location' => 'main',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'main-menu',
							'menu_class' => 'navbar-nav',
							'walker' => new bootstrap_4_walker_nav_menu(),
						];
						wp_nav_menu($args); 
					?>
				</nav>	
			</div>
		</div>
	</header>

	<div id="main-container" class="container pb-4">
		
		<!-- WIDGETS PREFOOTER -->
			<div class="row">
				<?php if (is_active_sidebar( 'precontent_left' )): ?>
					<div class="col-12 justify-content-md-left justify-content-center text-center text-md-left <?php if(!is_active_sidebar( 'precontent_right' )) : ?>col-md-12<?php else: ?>col-md-8<?php endif; ?> pt-3 px-lg-0">
						<?php dynamic_sidebar( 'precontent_left' );  ?>
					</div>
				<?php endif ?>

				<?php if (is_active_sidebar( 'precontent_right' )): ?>
					<div class="col-12 justify-content-md-right justify-content-center mt-2 mt-md-0 text-center text-md-right <?php if(!is_active_sidebar( 'precontent_left' )) : ?>col-md-12<?php else: ?>col-md-4<?php endif; ?> pt-3 px-lg-0">
						<?php dynamic_sidebar( 'precontent_right' );  ?>
					</div>
				<?php endif ?>
			</div>

	</div>
