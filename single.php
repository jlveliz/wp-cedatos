<?php get_header(); ?>
	<main class="container my-5 p-0">
			<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
			<div class="row mt-4">
				<div class="col-12 col-lg-9 col-md-8">
					<?php the_post_thumbnail('full',['class' => 'img-fluid text-center d-block justify-content-center mb-3 mx-auto']); ?>
					<h4 class="font-italic"><?php the_title(); ?></h4>
					<p class="meta-date"><?php the_date( '', '', '', true ); ?></p>
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