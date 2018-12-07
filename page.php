<?php get_header(); ?> 
	<div id="main-container" class="container pb-4">
		
		<!-- WIDGETS PREFOOTER -->
			<div class="row">
				<?php if (is_active_sidebar( 'precontent_left' )): ?>
					<div class="col-12 justify-content-md-left justify-content-center text-center text-md-left <?php if(!is_active_sidebar( 'precontent_right' )) : ?>col-md-12<?php else: ?>col-md-8<?php endif; ?> pt-4">
						<?php dynamic_sidebar( 'precontent_left' );  ?>
					</div>
				<?php endif ?>

				<?php if (is_active_sidebar( 'precontent_right' )): ?>
					<div class="col-12 justify-content-md-right justify-content-center mt-2 mt-md-0 text-center text-md-right <?php if(!is_active_sidebar( 'precontent_left' )) : ?>col-md-12<?php else: ?>col-md-4<?php endif; ?> pt-3">
						<?php dynamic_sidebar( 'precontent_right' );  ?>
					</div>
				<?php endif ?>
			</div>

	</div>
			
	<main class="container my-0 p-0">
			<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
			<div class="row">
				<div class="col-12 p-0">
					<?php the_post_thumbnail('full',['class' => 'img-fluid']); ?>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12 col-lg-9 col-md-8">
					<?php the_content() ?>
				</div>
				<div class="col-12 col-lg-3 col-md-4 p-2">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<?php endwhile; ?>
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	
<?php get_footer(); ?>