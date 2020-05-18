/**
 * Block Alert
 */
( function( $ ) {

	$( document ).ready( function() {

		$( '.cnvs-block-alert .cnvs-close' ).on( 'click', function() {
			$( this ).closest( '.cnvs-block-alert' ).remove();
		} );

	} );
} )( jQuery );