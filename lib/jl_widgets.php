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

		echo  date_i18n("d F Y");
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
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Título:', 'text_domain' ); ?></label> 
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
	
	function __construct(argument)
	{
		# code...
	}
}

function jlcdatos_register_widgets() {
	register_widget( 'CurrentDateWidget' );
}

add_action( 'widgets_init', 'jlcdatos_register_widgets' );