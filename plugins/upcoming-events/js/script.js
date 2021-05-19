add_action( 'admin_enqueue_scripts', 'uep_admin_script_style' );
(function( $ ) {

	$( '#uep-event-start-date' ).datepicker({
		dateFormat: 'MM dd, yy',
		onClose: function( selectedDate ){
			$( '#uep-event-end-date' ).datepicker( 'option', 'minDate', selectedDate );
		}
	});
	$( '#uep-event-end-date' ).datepicker({
		dateFormat: 'MM dd, yy',
		onClose: function( selectedDate ){
			$( '#uep-event-start-date' ).datepicker( 'option', 'maxDate', selectedDate );
		}
	});

})( jQuery );