<?php
/**
 * Register Connect List
 *
 * @package    Powerkit
 * @subpackage Modules/Helper
 */

/**
 * Add item instagram to list
 *
 * @param array $list Array social list.
 */
function powerkit_connect_instagram( $list = array() ) {

	// Instagram.
	$list['instagram'] = array(
		'id'     => 'instagram',
		'name'   => esc_html__( 'Instagram', 'powerkit' ),
		'fields' => array(
			array(
				'key'         => 'powerkit_connect_instagram_token',
				'caption'     => esc_html__( 'Instagram Token', 'powerkit' ),
				'instruction' => wp_kses_post( __( '<a href="https://codesupply.co/documentation/powerkit/social-integrations/instagram-integration/#instagram-token" target="_blank">How to obtaint the Instagram Token</a>', 'powerkit' ) ),
			),
		),
	);

	return $list;
}
add_filter( 'powerkit_register_connect_list', 'powerkit_connect_instagram' );
