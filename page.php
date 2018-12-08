<?php get_header(); ?> 
	
			
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