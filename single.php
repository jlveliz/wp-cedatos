<?php get_header(); ?>
	<main class="container my-5 p-0">
			<?php if (have_posts()): ?>
			<div class="row mt-4">
				<div class="col-12 col-lg-9 col-md-8 p-lg-0">
					<?php while(have_posts()): the_post(); ?>
					<?php the_post_thumbnail('full',['class' => 'img-fluid text-center d-block justify-content-center mb-5 mx-auto']); ?>
					<h2 class="font-italic"><?php the_title(); ?></h2>
					<p class="meta-date"><?php the_date( 'd \d\e F Y', '', '', true ); ?></p>
						<?php the_content() ?>
					<?php endwhile; ?>

					<div class="mt-5 text-center">
						<div class="row single-paginator">
							<div class="col-6 prev text-right"><?php previous_post_link('%link', ' Noticia Anterior ') ?></div>
							<div class="col-6 next text-left"><?php next_post_link('%link', ' Siguiente Noticia ') ?></div>
						</div>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
			
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
<?php get_footer(); ?>