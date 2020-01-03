<?php get_header(); ?> 		
	<main class="container my-0">
		<div class="row mt-2">
				
			<div class="col-12 col-lg-9 col-md-8 mb-3 pl-0">
			<?php if (class_exists('RevSlider') && checkRevSliderExists("blog")): ?>
					<?php putRevSlider("blog"); ?> 
			<?php endif ?>
			<?php if (have_posts()): ?>
				<div class="row mt-3">
				<?php while(have_posts()): the_post();   
					$title = strlen(get_the_title()) > 75 ? substr(get_the_title(),0,75)."..." : get_the_title();
				?>
						<div class="col-12 col-md-6 mb-3 the-post">
							<div class="post-header p-4" style="background: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
								<a href="<?php the_permalink( ) ?>" class="position-absolute read-more-post read-more">Leer más</a>
								<?php the_post_thumbnail( 'large',['class'=>'img-fluid hidden']); ?>
							</div>
							<div class="p-2 bg-dark">
								<div class="vc_custom_heading text-light no-border vc_gitem-post-data vc_gitem-post-data-source-post_title">
									<h3 class="text-left"><a href="<?php the_permalink( )?>"><?php echo $title; ?></a></h3>
								</div>
							</div>
						</div>
				<?php endwhile; ?>
					
				</div>
				
				<div class="row">
					<div class="col-12 text-center mt-2">
						<?php 
							the_posts_pagination( array(
								'mid_size'  => 2,
								'prev_text' => __( '<<', 'jlcdatos' ),
								'next_text' => __( '>>', 'jlcdatos' ),
								'screen_reader_text' => ''
							) ); 
						?>
					</div>
				</div>

			</div>
			
			<?php get_sidebar(); ?>
			
		<?php else: ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</div>
	

<?php get_footer(); ?>