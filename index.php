<?php get_header(); ?> 
			
	<main class="container my-0 <?php if(is_front_page()) : ?> px-0 <?php endif; ?>">
		<div class="row">
			<div class="col-12 col-lg-9 col-md-8 px-0">
				
			<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content() ?>
			<?php endwhile; ?>
			</div>
			<div class="col-12 col-lg-3 col-md-4 p-2">
				<?php get_sidebar(); ?>
			</div>
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</div>
	
<?php get_footer(); ?>