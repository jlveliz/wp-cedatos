	<!-- WIDGETS PREFOOTER -->
	<?php if (is_active_sidebar( 'widgets_prefooter_1' )): ?>
		<div class="row justify-content-center align-items-center mt-4 mb-2">
			<?php dynamic_sidebar( 'widgets_prefooter_1' );  ?>
		</div>
	<?php endif ?>

	<?php if (is_active_sidebar( 'widgets_prefooter_2' )): ?>
		<div class="row justify-content-center mt-2">
			<?php dynamic_sidebar( 'widgets_prefooter_2' );  ?>
		</div>
	<?php endif ?>
	<!-- cierra main container -->
	</main>
</div>
<footer id="footer" class="container-fluid">
		<div class="container  pt-2" id="container-footer">
			<div class="row">
				<div class="col-md-4 col-12">
					<img class="img-fluid" src="images/lg.png" alt="">
				</div>
				<div class="col-md-4 col-12">
					<ul class="d-flex justify-content-center list-unstyled list-inline" id="social-networks">
						<?php if (get_theme_mod('facebook_link')): ?>
							<li class="list-inline-item"><a href="<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank" class="social-footer" data-social="facebook"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/icono-facebook-cedatos.png"></a></li>
						<?php endif ?>

						<?php if (get_theme_mod( 'twitter_link' )): ?>
							<li class="list-inline-item"><a href="<?php echo get_theme_mod( 'twitter_link' ) ?>"  target="_blank" class="social-footer" data-social="twitter"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/icono-twitter-cedatos.png"></a> </li>
						<?php endif ?>

						<?php if (get_theme_mod( 'youtube_link' )): ?>
							<li class="list-inline-item"><a href="<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank" class="social-footer" data-social="youtube"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/icono-youtuve-cedatos.png"></a> </li>
						<?php endif ?>
					</ul>
				</div>
				<div class="col-md-4 col-12">
					<?php if (get_theme_mod( 'contact_setting' )): ?>
						<h3 class="widget-header text-uppercase"><?php bloginfo('name'); ?></h3>
						<p class="widget-content"><?php echo get_theme_mod( 'contact_setting' ); ?></p>
					<?php endif ?>
				</div>
			</div>
			<!-- copyright -->
			<?php if (get_theme_mod('copyright_text_setting')): ?>
				<div class="row">
					<p class="col-12 text-center text-white"><small><?php echo get_theme_mod( 'copyright_text_setting' ); ?></small></p>
				</div>
			<?php endif ?>
		</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>