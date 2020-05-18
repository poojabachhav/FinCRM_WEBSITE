<?php
/**
 * Social Follow
 *
 * @package    Powerkit
 * @subpackage Extensions
 */

/**
 * Init module
 */
class Powerkit_Social_Follow extends Powerkit_Module {

	/**
	 * Register module
	 */
	public function register() {
		$this->name     = 'Social Follow';
		$this->slug     = 'social_follow';
		$this->type     = 'extension';
		$this->category = 'basic';
		$this->public   = false;
		$this->enabled  = true;
	}

	/**
	 * Transient Prefix
	 *
	 * @since 1.0.0
	 * @var   string $cache_timeout    Cache Timeout (minutes).
	 */
	private $trans_prefix = 'powerkit_social_follow_';

	/**
	 * Initialize module
	 */
	public function initialize() {
		// Reset cache.
		add_action( 'powerkit_ajax_reset_cache', array( $this, 'ajax_reset_cache' ) );
	}

	/**
	 * Register Reset Cache
	 *
	 * @since    1.0.0
	 * @param    array $list Change list reset cache.
	 * @access   private
	 */
	public function ajax_reset_cache( $list ) {
		$slug = powerkit_get_page_slug( $this->slug );

		$list[ $slug ] = array(
			'powerkit_social_follow',
		);

		return $list;
	}

	/**
	 * Return social follow
	 *
	 * @param string $name     Name of social network.
	 * @param string $username Username of social network.
	 * @param string $type     Type of social network.
	 */
	public function get_data( $name, $username, $type = null ) {
		$social_function = sprintf( 'get_%s', $name );

		if ( ! $username ) {
			return;
		}

		if ( method_exists( $this, $social_function ) ) {
			return $this->$social_function( $username, $type );
		}
	}

	/**
	 * Get youtube data.
	 *
	 * @param string $username Username of social network.
	 * @param string $type     Type of social network.
	 */
	public function get_youtube( $username, $type = null ) {

		$result = array();

		// Get data for social network.
		$counter = new Powerkit_Links_Social_Counter();

		$counter->trans_prefix = $this->trans_prefix;

		$counter->users['youtube_slug']         = $username;
		$counter->extra['youtube_channel_type'] = $type;

		$data = $counter->get_count( 'youtube', true );

		if ( isset( $data['error'] ) ) {
			powerkit_alert_warning( $data['error'] );
		}

		// Followers.
		if ( isset( $data['count'] ) && ! isset( $data['error'] ) ) {
			$result['followers'] = $data['count'];
		}

		// Avatar.
		if ( isset( $data['data'] ) && is_object( $data['data'] ) && isset( $data['data']->items[0]->snippet->thumbnails->default->url ) ) {
			$result['avatar_1x'] = $data['data']->items[0]->snippet->thumbnails->default->url;
		}
		if ( isset( $data['data'] ) && is_object( $data['data'] ) && isset( $data['data']->items[0]->snippet->thumbnails->medium->url ) ) {
			$result['avatar_2x'] = $data['data']->items[0]->snippet->thumbnails->medium->url;
		}

		// Username.
		if ( isset( $data['data'] ) && is_object( $data['data'] ) && isset( $data['data']->items[0]->snippet->title ) ) {
			$result['text'] = $data['data']->items[0]->snippet->title;
		}

		// Link.
		if ( 'channel' === $type ) {
			$result['link'] = sprintf( 'https://www.youtube.com/channel/%s/', $username );
		} else {
			$result['link'] = sprintf( 'https://www.youtube.com/user/%s/', $username );
		}

		return $result;
	}

	/**
	 * Get facebook data.
	 *
	 * @param string $username Username of social network.
	 * @param string $type     Type of social network.
	 */
	public function get_facebook( $username, $type = null ) {

		$result = array();

		// Get data for social network.
		$counter = new Powerkit_Links_Social_Counter();

		$counter->trans_prefix = $this->trans_prefix;

		$counter->users['facebook_user'] = $username;

		$data = $counter->get_count( 'facebook', true );

		if ( isset( $data['error'] ) ) {
			powerkit_alert_warning( $data['error'] );
		}

		// Followers.
		if ( isset( $data['count'] ) && ! isset( $data['error'] ) ) {
			$result['followers'] = $data['count'];
		}

		// Link.
		$result['link'] = sprintf( 'https://facebook.com/%s/', $username );

		// Avatar.
		$result['avatar_1x'] = "https://graph.facebook.com/{$username}/picture?width=80&height=80";
		$result['avatar_2x'] = "https://graph.facebook.com/{$username}/picture?width=160&height=160";

		// Username.
		$result['text'] = $username;

		return $result;
	}

	/**
	 * Get instagram data.
	 *
	 * @param string $username Username of social network.
	 * @param string $type     Type of social network.
	 */
	public function get_instagram( $username, $type = null ) {

		$result = array();
		// Get data for social network.
		$counter = new Powerkit_Links_Social_Counter();

		$counter->trans_prefix = $this->trans_prefix . md5( $username ) . powerkit_connect( 'instagram_token' );

		$counter->users['instagram_user'] = $username;

		$data = $counter->get_count( 'instagram', true );

		if ( isset( $data['error'] ) ) {
			powerkit_alert_warning( $data['error'] );
		}

		// Followers.
		if ( isset( $data['count'] ) && ! isset( $data['error'] ) ) {
			$result['followers'] = $data['count'];
		}

		// Avatar parse json.
		if ( isset( $data['data'] ) && is_object( $data['data'] ) && isset( $data['data']->data->profile_picture ) ) {
			$result['avatar_1x'] = $data['data']->data->profile_picture;
		}
		if ( isset( $data['data'] ) && is_object( $data['data'] ) && isset( $data['data']->data->profile_picture ) ) {
			$result['avatar_2x'] = $data['data']->data->profile_picture;
		}

		// Avatar parse html.
		if ( isset( $data['data'] ) && is_array( $data['data'] ) && isset( $data['data']['entry_data']['ProfilePage'][0]['graphql']['user']['profile_pic_url'] ) ) {
			$result['avatar_1x'] = $data['data']['entry_data']['ProfilePage'][0]['graphql']['user']['profile_pic_url'];
		}
		if ( isset( $data['data'] ) && is_array( $data['data'] ) && isset( $data['data']['entry_data']['ProfilePage'][0]['graphql']['user']['profile_pic_url_hd'] ) ) {
			$result['avatar_2x'] = $data['data']['entry_data']['ProfilePage'][0]['graphql']['user']['profile_pic_url_hd'];
		}

		// Link.
		$result['link'] = sprintf( 'https://www.instagram.com/%s/', $username );

		// Username.
		$result['text'] = $username;

		return $result;
	}
}

/**
 * Get social follow
 *
 * @param string $name     Name of social network.
 * @param string $username Username of social network.
 * @param string $type     Type of social network.
 */
function powerkit_get_social_follow( $name, $username, $type = null ) {
	$object = new Powerkit_Social_Follow();

	return $object->get_data( $name, $username, $type );
}

new Powerkit_Social_Follow();
