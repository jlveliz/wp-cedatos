<?php 
class CurrentDateWidget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( 'current_date', 'Fecha Actual', ['description' => __('Present Current Date','jlcdatos')] );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
	 	echo $args['before_widget'];

	 	if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		echo  date_i18n("d ") . __(' de ', 'jlcdatos') . ucfirst(date_i18n('F ')) . __('del ','jlcdatos') . date_i18n('Y');
		echo $args['after_widget'];
	}


	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$order = ! empty( $instance['order'] ) ? $instance['order'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Título:', 'jlcdatos' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
	<?php	

	}
}


/**
 * 
 */
class TitlePost extends WP_Widget
{
	
	private $categories;

	function __construct()
	{
		// Instantiate the parent object
		parent::__construct( 'title_post', 'Título del Post', ['description' => __('Presenta el Título de una publicación','jlcdatos')] );

		$argCategories = [
			'orderby' => 'name'
		];

		$this->categories = get_categories( $argCategories );

		
	}


	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
	 	// echo $args['before_widget'];

	 	if ( ! empty( $instance['title'] ) ) {
			echo '<small>'. $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title']. '</small>';
		}

		$order = $instance['order'];
		$categories = $instance['categories'];

		$posts = new WP_Query([
			'cat' => $categories,
			'order' => $order,
			'paged' => 1,
			// 'posts_per_page' => 1
		]);

		if ($posts->have_posts()) { ?> 
			<!--<div class="row">-->
				<span class="marquee-title d-sm-block">Noticias:
				<marquee class="ptms_marquee" style="color:#000" scrollamount="5" scrolldelay="5" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
				<?php while ($posts->have_posts()) {
					$posts->the_post(); ?>
					<a class="" href="<?php the_permalink() ?> " title="<?php the_title(); ?>" alt="<?php the_title(); ?>"> <?php  ucfirst(the_title())  ?> </a> -
				<?php } ?> 
				 </marquee>
				 </span>
			<!--</div>-->
		<?php } else {
			echo "<h3> No tiene Posts </h3>";
		}


		// echo  date_i18n("d F Y");
		// echo $args['after_widget'];
	}


	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['order'] = isset( $new_instance['order'] )  ? wp_strip_all_tags( $new_instance['order'] ) : 'asc';
		$instance['categories'] = ( ! empty( $new_instance['categories'] ) ) ? esc_sql( $new_instance['categories'] ) : '';
		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$ctSelecteds = !empty($instance['categories']) ? $instance['categories'] : '';
		$order = !empty($instance['order']) ? $instance['order'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Título:', 'jlcdatos' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo $this->get_field_name( 'title' )  ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
			<label for="<?php echo  $this->get_field_id('order') ?>"> <?php esc_attr_e( 'Orden:', 'jlcdatos' ); ?> </label>
			<select name="<?php echo  $this->get_field_name('order') ?>" id="<?php echo  $this->get_field_id('order')  ?>" class="widefat">
				<option value="asc" <?php if ($order =='asc') :  ?> selected  <?php endif; ?> ><?php esc_attr_e( 'Ascendente', 'jlcdatos' )?></option>
				<option value="desc" <?php if ($order =='desc') :  ?> selected  <?php endif; ?>><?php esc_attr_e( 'Descendente', 'jlcdatos' )?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('categories') ); ?>"> <?php esc_attr_e( 'Categorías:', 'jlcdatos' ); ?> </label>
			<select multiple="multiple" name="<?php echo  $this->get_field_name('categories')  ?>[]" id="<?php echo esc_attr( $this->get_field_id('categories') ); ?>" class="widefat">
				<?php foreach ($this->categories as $key => $category): ?>
					<?php $selected = in_array( $category->term_id, $ctSelecteds ) ? ' selected="selected" ' : '' ?>
					<option value="<?php echo $category->term_id ?>" <?php echo $selected ?>><?php echo $category->cat_name ?></option>
				<?php endforeach ?>
			</select>
		</p>
	<?php	

	}
}





function jlcdatos_register_widgets() {
	register_widget( 'CurrentDateWidget' );
	register_widget( 'TitlePost' );
}

add_action( 'widgets_init', 'jlcdatos_register_widgets' );