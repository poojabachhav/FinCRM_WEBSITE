<?php
/**
 * Register Connect List
 *
 * @package    Powerkit
 * @subpackage Modules/Helper
 */

/**
 * Add all items to list
 *
 * @param array $list Array social list.
 */
function powerkit_connect_total( $list = array() ) {

	// Facebook.
	$list['facebook'] = array(
		'id'     => 'facebook',
		'name'   => esc_html__( 'Facebook', 'powerkit' ),
		'fields' => array(
			array(
				'key'     => 'powerkit_connect_facebook_api_appid',
				'caption' => esc_html__( 'App ID', 'powerkit' ),
			),
			array(
				'key'     => 'powerkit_connect_facebook_api_appsecret',
				'caption' => esc_html__( 'App Secret', 'powerkit' ),
			),
			array(
				'key'         => 'powerkit_connect_facebook_access_token',
				'caption'     => esc_html__( 'User Access Token', 'powerkit' ),
				'instruction' => wp_kses_post( __( '<a href="https://codesupply.co/documentation/powerkit/social-integrations/facebook-integration/#api-keys" target="_blank">How to obtaint API Keys of Facebook</a>', 'powerkit' ) ),
			),
		),
	);

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
add_filter( 'powerkit_register_connect_list', 'powerkit_connect_total' );
