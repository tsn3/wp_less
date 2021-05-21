<?php

class Upcoming_Events extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'class'			=>	'uep_upcoming_events',
			'description'	=>	__( 'A widget to display a list of upcoming events', 'uep' )
		);

		parent::__construct(
			'uep_upcoming_events',			//base id
			__( 'Upcoming Events', 'uep' ),	//title
			$widget_ops
		);
	}

	public function form( $instance ) {
		$widget_defaults = array(
			'status'			=>	'Upcoming Events',
			'number_events'	=>	5
		);

		$instance  = wp_parse_args( (array) $instance, $widget_defaults );
		?>

		<!-- Rendering the widget form in the admin -->
		<p>
			<label for="<?php echo $this->get_field_id( 'status' ); ?>">
				<?php _e( 'Status', 'uep' ); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'status' ); ?>"
			       name="<?php echo $this->get_field_name( 'status' ); ?>"
			       class="widefat" value="<?php echo esc_attr( $instance['status'] ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'number_events' ); ?>">
				<?php _e( 'Number of events to show', 'uep' ); ?></label>
			<select id="<?php echo $this->get_field_id( 'number_events' ); ?>"
			        name="<?php echo $this->get_field_name( 'number_events' ); ?>"
			        class="widefat">
				<?php for ( $i = 1; $i <= 10; $i++ ): ?>
					<option value="<?php echo $i; ?>"
						<?php selected( $i, $instance['number_events'], true ); ?>>
						<?php echo $i; ?>
					</option>
				<?php endfor; ?>
			</select>
		</p>

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['status'] = $new_instance['status'];
		$instance['number_events'] = $new_instance['number_events'];

		return $instance;
	}

	public function widget( $args, $instance ) {

		extract( $args );
		$status = apply_filters( 'widget_title', $instance['status'] );

		//Preparing the query for events
		$meta_quer_args = array(
			'relation'	=>	'AND',
//			array(
//				'key'		=>	'event-start-date',
//				'value'		=>	time(),
//				'compare'	=>	'>='
//			),
//			array(
//				'key'   => 'events-status',
//				'value' => $status
//			),
			array(
				'relation' => 'AND',
				array(
					'key'		=>	'event-start-date',
					'value'		=>	time(),
					'compare'	=>	'>='
				),
				array(
					'key'   => 'event-status',
					'value' => $status ?? 'open',
				),
			),

		);

		$query_args = array(
			'post_type'				=>	'event',
			'posts_per_page'		=>	$instance['number_events'],
			'post_status'			=>	'publish',
			'ignore_sticky_posts'	=>	true,
			'meta_key'				=>	'event-start-date',
			'orderby'				=>	'meta_value_num',
			'order'					=>	'ASC',
			'meta_query'			=>	$meta_quer_args
		);

		$upcoming_events = new WP_Query( $query_args );

		//Preparing to show the events
		echo $before_widget;
		if ( $status ) {
			echo $before_title . $status . $after_title;
		}
		?>

		<ul class="uep_event_entries">
			<?php while( $upcoming_events->have_posts() ): $upcoming_events->the_post();
				$event_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
				$event_status = get_post_meta( get_the_ID(), 'event-status', true );
				?>
				<li class="uep_event_entry">
					<h4><a href="<?php the_permalink(); ?>" class="uep_event_title"><?php the_title(); ?></a> <span class="event_status">Status: <?php echo $event_status; ?></span></h4>
					<time class="uep_event_date"><?php echo date( 'F d, Y', $event_start_date ); ?></time>
				</li>
			<?php endwhile; ?>
		</ul>

		<?php
		wp_reset_query();

		echo $after_widget;
	}
}

function uep_register_widget() {
	register_widget( 'Upcoming_Events' );
}
add_action( 'widgets_init', 'uep_register_widget' );
