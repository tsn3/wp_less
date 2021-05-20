<?php
/**
 * Plugin Name: Upcoming Events
 * Description: A plugin to show a list of upcoming events on the front-end.
 * Version: 1.0
 * Author: Serhii Mykolaivovich
 * Author URI: http://mysite.com
 */

define( 'ROOT', plugins_url( '', __FILE__ ) );
define( 'IMAGES', ROOT . '/img/' );
define( 'STYLES', ROOT . '/css/' );
define( 'SCRIPTS', ROOT . '/js/' );

function uep_custom_post_type() {
	$labels = array(
		'name'                  =>   __( 'Events', 'uep' ),
		'singular_name'         =>   __( 'Event', 'uep' ),
		'add_new_item'          =>   __( 'Add New Event', 'uep' ),
		'all_items'             =>   __( 'All Events', 'uep' ),
		'edit_item'             =>   __( 'Edit Event', 'uep' ),
		'new_item'              =>   __( 'New Event', 'uep' ),
		'view_item'             =>   __( 'View Event', 'uep' ),
		'not_found'             =>   __( 'No Events Found', 'uep' ),
		'not_found_in_trash'    =>   __( 'No Events Found in Trash', 'uep' )
	);

	$supports = array(
		'title',
		'editor',
		'excerpt'
	);

	$args = array(
		'label'         =>   __( 'Events', 'uep' ),
		'labels'        =>   $labels,
		'description'   =>   __( 'A list of upcoming events', 'uep' ),
		'public'        =>   true,
		'show_in_menu'  =>   true,
		'menu_icon'     =>   IMAGES . 'event.svg',
		'has_archive'   =>   true,
		'rewrite'       =>   true,
		'supports'      =>   $supports
	);

	register_post_type( 'event', $args );
}
add_action( 'init', 'uep_custom_post_type' );

function uep_add_event_info_metabox() {
	add_meta_box(
		'uep-event-info-metabox',
		__( 'Event Info', 'uep' ),
		'uep_render_event_info_metabox',
		'event',
		'side',
		'core'
	);
}
add_action( 'add_meta_boxes', 'uep_add_event_info_metabox' );


function uep_render_event_info_metabox( $post ) {
	//generate a nonce field
	wp_nonce_field( basename( __FILE__ ), 'uep-event-info-nonce' );

	//get previously saved meta values (if any)
	$event_start_date = get_post_meta( $post->ID, 'event-start-date', true );
	$event_end_date = get_post_meta( $post->ID, 'event-end-date', true );
	$event_venue = get_post_meta( $post->ID, 'event-venue', true );

	//if there is previously saved value then retrieve it, else set it to the current time
	$event_start_date = ! empty( $event_start_date ) ? $event_start_date : time();

	//we assume that if the end date is not present, event ends on the same day
	$event_end_date = ! empty( $event_end_date ) ? $event_end_date : $event_start_date;

	?>
	<p>
		<label for="uep-event-start-date"><?php _e( 'Event Start Date:', 'uep' ); ?></label>
		<input type="text" id="uep-event-start-date" name="uep-event-start-date" class="widefat uep-event-date-input" value="<?php echo date( 'F d, Y', $event_start_date ); ?>" placeholder="Format: February 18, 2014">
	</p>
<!--	<p>-->
<!--		<label for="uep-event-end-date">--><?php //_e( 'Event End Date:', 'uep' ); ?><!--</label>-->
<!--		<input type="text" id="uep-event-end-date" name="uep-event-end-date" class="widefat uep-event-date-input" value="--><?php //echo date( 'F d, Y', $event_end_date ); ?><!--" placeholder="Format: February 18, 2014">-->
<!--	</p>-->
	<p>
		<label for="uep-event-venue"><?php _e( 'Status:', 'uep' ); ?>
            <select class="widefat" id="uep-event-venue" required name="uep-event-venue">
                <option>Open</option>
                <option>Invitation</option>
            </select>
        </label>
<!--		<input type="text" id="uep-event-venue" name="uep-event-venue" class="widefat" value="--><?php //echo $event_venue; ?><!--" placeholder="eg. Times Square">-->
	</p>
	<?php
}

function uep_save_event_info( $post_id ) {

	// checking if the post being saved is an 'event',
	// if not, then return
	if ( 'event' != $_POST['post_type'] ) {
		return;
	}

	// checking for the 'save' status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['uep-event-info-nonce'] ) && ( wp_verify_nonce( $_POST['uep-event-info-nonce'], basename( __FILE__ ) ) ) ) ? true : false;

	// exit depending on the save status or if the nonce is not valid
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	// checking for the values and performing necessary actions
	if ( isset( $_POST['uep-event-start-date'] ) ) {
		update_post_meta( $post_id, 'event-start-date', strtotime( $_POST['uep-event-start-date'] ) );
	}

	if ( isset( $_POST['uep-event-end-date'] ) ) {
		update_post_meta( $post_id, 'event-end-date', strtotime( $_POST['uep-event-end-date'] ) );
	}

	if ( isset( $_POST['uep-event-venue'] ) ) {
		update_post_meta( $post_id, 'event-venue', sanitize_text_field( $_POST['uep-event-venue'] ) );
	}
}
add_action( 'save_post', 'uep_save_event_info' );

function uep_custom_columns_head( $defaults ) {
	unset( $defaults['date'] );

	$defaults['event_start_date'] = __( 'Start Date', 'uep' );
	$defaults['event_end_date'] = __( 'End Date', 'uep' );
	$defaults['event_venue'] = __( 'Venue', 'uep' );

	return $defaults;
}
add_filter( 'manage_edit-event_columns', 'uep_custom_columns_head', 10 );

function uep_custom_columns_content( $column_name, $post_id ) {

	if ( 'event_start_date' == $column_name ) {
		$start_date = get_post_meta( $post_id, 'event-start-date', true );
		echo date( 'F d, Y', $start_date );
	}

	if ( 'event_end_date' == $column_name ) {
		$end_date = get_post_meta( $post_id, 'event-end-date', true );
		echo date( 'F d, Y', $end_date );
	}

	if ( 'event_venue' == $column_name ) {
		$venue = get_post_meta( $post_id, 'event-venue', true );
		echo $venue;
	}
}
add_action( 'manage_event_posts_custom_column', 'uep_custom_columns_content', 10, 2 );

include( 'inc/widget-upcoming-events.php' );