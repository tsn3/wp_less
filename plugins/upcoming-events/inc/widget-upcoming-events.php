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

	}


	public function update( $new_instance, $old_instance ) {

	}


	public function widget( $args, $instance ) {

	}

}


function uep_register_widget() {
	register_widget( 'Upcoming_Events' );
}
add_action( 'widgets_init', 'uep_register_widget' );