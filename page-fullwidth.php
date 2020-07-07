<<<<<<< HEAD
<?php /* Template Name: fullwidth */ ?>
<?php get_header(); ?> 
			
	<main class="container my-0">
			<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content() ?>
			<?php endwhile; ?>
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	
=======
<?php /* Template Name: fullwidth */ ?>
<?php get_header(); ?> 
			
	<main class="container my-0">
			<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content() ?>
			<?php endwhile; ?>
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	
>>>>>>> e0cbd162b7116550e0ee173de5172d66e874cf96
<?php get_footer(); ?>