<div class="col-12 col-lg-3 col-md-4 pl-lg-0">
	<?php if(has_nav_menu( 'secundary' )) : ?>
		<nav class="nav-bar mb-2 mt-2">
			<?php 
				$args = [
					'theme_location' => 'secundary',
					'container_class' => 'pl-0',
					'menu_class' => 'pl-0'
				];
				wp_nav_menu($args); 
			?>
		</nav>
	<?php endif ?>
	

	<?php if (is_active_sidebar( 'widgets_sidebar' )): ?>
		<?php dynamic_sidebar( 'widgets_sidebar' );  ?>
	<?php endif ?>
</div>