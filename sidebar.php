<nav class="nav-bar mb-2">
	<?php 
		$args = [
			'theme_location' => 'secundary',
			'container_class' => 'pl-0',
			// 'container_id' => 'navbarNav',
			'menu_class' => 'pl-0',
			// 'walker' => new bootstrap_4_walker_nav_menu()
		];
		wp_nav_menu($args); 
	?>
</nav>

<?php if (is_active_sidebar( 'widgets_sidebar' )): ?>
	<?php dynamic_sidebar( 'widgets_sidebar' );  ?>
<?php endif ?>
