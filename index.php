<?php get_header(); ?> 
			
	<main class="container my-0 p-0">
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
	
<?php get_footer(); ?>