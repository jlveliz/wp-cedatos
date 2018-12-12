<?php get_header(); ?> 
			
	<main class="container my-0 <?php if(is_front_page()) : ?> px-0 <?php endif; ?>">
		<div class="row">
			<div class="col-12 col-lg-9 col-md-8 px-0">
			<?php if (class_exists('RevSlider')): 

					putRevSlider("blog");

				?>
			<?php endif ?>
			<?php if (have_posts()): ?>
				<div class="row">
			<?php while(have_posts()): the_post(); ?>
					<div class="col-12 col-md-5 ml-2 mb-2 p-0 the-post">
						<div class="post-header p-5" style="background: url(<?php the_post_thumbnail_url( 'fullwidth' ); ?>);">
							<a href="<?php the_permalink( ) ?>" class="position-absolute read-more-post read-more">Leer más</a>
							<?php the_post_thumbnail( 'fullwidth',['class'=>'img-fluid hidden']); ?>
						</div>
						<div class="p-2 bg-dark">
							<div class="vc_custom_heading text-light no-border vc_gitem-post-data vc_gitem-post-data-source-post_title">
								<h3 class="text-left"><a href="<?php the_permalink( )?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
					</div>
			<?php endwhile; ?>
				</div>
			</div>
			<div class="col-12 col-lg-3 col-md-4 p-2">
				<?php get_sidebar(); ?>
			</div>
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</div>
	
<?php get_footer(); ?>