<?php
/**
 * Get Social Links
 *
 * @package    Powerkit
 * @subpackage Modules/Helper
 */

/**
 * Social Counter Class
 */
class Powerkit_Links_Social_Counter {

	/**
	 * Social users
	 *
	 * @since 1.0.0
	 * @var   array $users    List of user names.
	 */
	public $users = array();

	/**
	 * Extra data
	 *
	 * @since 1.0.0
	 * @var   array $extra    Extra data.
	 */
	public $extra = array();

	/**
	 * Transient Prefix
	 *
	 * @since 1.0.0
	 * @var   string $cache_timeout    Cache Timeout (minutes).
	 */
	public $trans_prefix = 'powerkit_social_links_counter_';

	/**
	 * Cache Results
	 *
	 * @since 1.0.0
	 * @var   int $cache_timeout    Cache Timeout (minutes).
	 */
	public $cache_timeout = 720;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->run_api();
	}

	/**
	 * Run users name , api keys and clients id
	 *
	 * @since 1.0.0
	 */
	public function run_api() {

		$config = new Powerkit_Links_Api_Config();

		// Cache Timeout.
		$this->cache_timeout = $config::$cache_timeout;

		// Users.
		$this->users = $config::$users;

		// Extra.
		$this->extra = $config::$extra;

	}

	/**
	 * Curl request data
	 *
	 * @since 1.0.0
	 * @param array $args   Api params.
	 */
	public function curl_get_api( $args ) {

		// Get Cached Data.
		if ( 'forcibly' === $args['cache'] ) {
			return get_option( $this->trans_prefix . $args['network'] );
		}

		$data = null;

		if ( $args['cache'] && $this->cache_timeout > 0 ) {
			$data = get_transient( $this->trans_prefix . $args['network'] );
		}

		if ( ! $data ) {

			// Generate Url.
			$params     = http_build_query( $args['params'] );
			$remote_url = $params ? $args['url'] . '?' . $params : $args['url'];

			// Request_params.
			$request_params = array(
				'timeout'     => 120,
				'redirection' => 10,
				'sslverify'   => false,
				'user-agent'  => $this->get_random_user_agent(),
				'headers'     => array(
					'Accept-language' => 'en',
				),
			);

			$response = wp_safe_remote_get( $remote_url, $request_params );

			if ( is_wp_error( $response ) ) {
				return false;
			}

			// Retrieve data.
			$data = wp_remote_retrieve_body( $response );

			// JSON Decode.
			if ( $args['decode'] ) {
				$data = json_decode( $data );
			}
		}

		return $data;
	}

	/**
	 * Safe processing of results
	 *
	 * @since 1.0.0
	 * @param string $network Social Network.
	 * @param mixed  $result  Followers Data.
	 */
	public function safe_result( $network, $result ) {

		$option_name = $this->trans_prefix . $network;

		if ( ! is_array( $result ) || ! isset( $result['count'] ) || ! $result['count'] ) {

			$counter = (int) get_option( '_backup_counter_' . $option_name );
			$backup  = (array) get_option( '_backup_' . $option_name );

			if ( $counter <= 5 && isset( $backup['count'] ) && $backup['count'] ) {

				set_transient( $option_name, $backup, 60 * $this->cache_timeout );

				update_option( '_backup_counter_' . $option_name, ++$counter );

				return $backup;

			} elseif ( isset( $backup['count'] ) && $backup['count'] ) {

				$result['count'] = $backup['count'];

			} else {
				delete_option( '_backup_' . $option_name );
			}
		}

		return $result;
	}

	/**
	 * Maybe Set Cache
	 *
	 * @since 1.0.0
	 * @param string $network   Social Network.
	 * @param int    $data      Followers Data.
	 * @param int    $cache     Cache Results.
	 */
	public function maybe_set_cache( $network, $data, $cache = true ) {

		$option_name = $this->trans_prefix . $network;

		if ( $cache && $this->cache_timeout > 0 ) {
			set_transient( $option_name, (array) $data, 60 * $this->cache_timeout );

			// Backup data.
			if ( is_array( $data ) && isset( $data['count'] ) && $data['count'] ) {

				delete_option( '_backup_counter_' . $option_name );

				update_option( '_backup_' . $option_name, (array) $data );
			}
		}
	}

	/**
	 * Get pinterest followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_pinterest( $cache = true ) {

		$network = 'pinterest';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['pinterest_user'] ) {
			$result['error'] = esc_html( 'Please enter a pinterest user name.', 'powerkit' );
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.pinterest.com/v3/pidgets/users/' . $this->users['pinterest_user'] . '/pins',
			'params'  => array(),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( is_object( $data ) && isset( $data->data->user->follower_count ) ) {

			// Live Count.
			$result['count'] = $data->data->user->follower_count;
		} elseif ( is_object( $data ) && isset( $data->status ) && 'failure' === $data->status ) {

			// API Error.
			if ( isset( $data->message ) ) {
				$result['error'] = $data->message;
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get dribbble followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_dribbble( $cache = true ) {

		$network = 'dribbble';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['dribbble_user'] ) {
			$result['error'] = esc_html( 'Please enter a dribbble user name.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'dribbble_token' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.dribbble.com/v1/users/' . $this->users['dribbble_user'],
			'params'  => array(
				'access_token' => powerkit_connect( 'dribbble_token' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->message ) ) {

			// API Error.
			$result['error'] = $data->message;

		} elseif ( isset( $data->followers_count ) ) {

			// Live Count.
			$result['count'] = $data->followers_count;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get facebook fans count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_facebook( $cache = true ) {

		$network = 'facebook';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['facebook_user'] ) {
			$result['error'] = esc_html( 'Please enter a Facebook user name.', 'powerkit' );

			return $result;
		}

		// Check Facebook access token.
		if ( powerkit_connect( 'facebook_api_appid' ) && powerkit_connect( 'facebook_api_appsecret' ) && powerkit_connect( 'facebook_access_token' ) ) {

			// Get OAuth url.
			$oauth_url = add_query_arg( array(
				'grant_type'        => 'fb_exchange_token',
				'client_id'         => powerkit_connect( 'facebook_api_appid' ),
				'client_secret'     => powerkit_connect( 'facebook_api_appsecret' ),
				'fb_exchange_token' => powerkit_connect( 'facebook_access_token' ),
			), 'https://graph.facebook.com/v3.3/oauth/access_token' );

			// Get define access token.
			$define_access_token = get_option( md5( $oauth_url ) );

			// Check define access token.
			if ( ! $define_access_token ) {

				$response = wp_safe_remote_get( $oauth_url );

				// Get OAuth data.
				$oauth_data = json_decode( wp_remote_retrieve_body( $response ) );

				if ( is_object( $oauth_data ) && isset( $oauth_data->error->message ) ) {

					// API Error.
					$result['error'] = $oauth_data->error->message;

				} elseif ( is_object( $oauth_data ) && isset( $oauth_data->access_token ) ) {

					// Get graph page url.
					$graph_page_url = add_query_arg( array(
						'fields'       => 'access_token',
						'access_token' => $oauth_data->access_token,
					), 'https://graph.facebook.com/' . $this->users['facebook_user'] );

					$response = wp_safe_remote_get( $graph_page_url );

					// Get OAuth data.
					$graph_data = json_decode( wp_remote_retrieve_body( $response ) );

					if ( is_object( $graph_data ) && isset( $graph_data->error->message ) ) {

						// API Error.
						$result['error'] = $graph_data->error->message;

					} elseif ( is_object( $graph_data ) && isset( $graph_data->access_token ) ) {

						update_option( md5( $oauth_url ), $graph_data->access_token );

						$define_access_token = $graph_data->access_token;

					} else {
						// API Error.
						$result['error'] = esc_html( 'Graph identification failed.', 'powerkit' );
					}
				} else {
					// API Error.
					$result['error'] = esc_html( 'OAuth identification failed.', 'powerkit' );
				}
			}

			if ( $define_access_token ) {

				// Get Count.
				$data = $this->curl_get_api( array(
					'network' => $network,
					'url'     => 'https://graph.facebook.com/v3.3/' . $this->users['facebook_user'],
					'params'  => array(
						'access_token' => $define_access_token,
						'fields'       => 'fan_count',
					),
					'cache'   => $cache,
					'decode'  => true,
				) );

				// Cached Count.
				if ( is_array( $data ) && isset( $data['count'] ) ) {
					return $data;
				}

				// Set Count.
				if ( isset( $data->error->message ) ) {

					// API Error.
					$result['error'] = $data->error->message;

				} elseif ( isset( $data->fan_count ) ) {

					// Live Count.
					$result['count'] = $data->fan_count;
				}
			}

			// Set message.
			if ( isset( $result['error'] ) ) {
				$result['error'] .= sprintf( '%s <a href="%s">%s</a>', esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=facebook' ), esc_html__( ' Facebook API Settings', 'powerkit' ) );

				if ( false !== strpos( $result['error'], 'Some of the aliases you requested do not exist' ) ) {
					$result['error'] = esc_html( 'Please check your User ID.', 'powerkit' );
				}

				if ( false !== strpos( $result['error'], 'Page Public Content Access' ) ) {
					$result['error'] = esc_html( 'Please make sure you own the page and allowed your Facebook app to manage it.', 'powerkit' );
				}
			}
		} else {

			$url = add_query_arg( array(
				'href'                  => rawurlencode( 'https://www.facebook.com/' . $this->users['facebook_user'] ),
				'domain'                => rawurlencode( home_url() ),
				'origin'                => rawurlencode( home_url() ),
				'adapt_container_width' => 'true',
				'relation'              => 'parent.parent',
				'container_width'       => '300',
				'hide_cover'            => 'false',
				'locale'                => 'en_US',
				'sdk'                   => 'joey',
				'show_facepile'         => 'false',
				'show_posts'            => 'false',
				'small_header'          => 'false',
				'width'                 => '500px',
				'app_id'                => powerkit_connect( 'facebook_app_id' ),
			), 'https://www.facebook.com/plugins/page.php' );

			// Get Count.
			$data = $this->curl_get_api( array(
				'url'     => $url,
				'network' => $network,
				'cache'   => $cache,
				'params'  => array(),
				'decode'  => false,
			));

			// Cached Count.
			if ( is_array( $data ) && isset( $data['count'] ) ) {
				return $data;
			}

			// Set Count.
			$facebook_result = preg_match( '/<div[^>]*?>([^>]*?)like/s', $data, $facebook_data );
			if ( $facebook_result ) {
				$facebook_data_full = array_shift( $facebook_data );
				$facebook_data_json = array_shift( $facebook_data );

				// Live Count.
				$result['count'] = (int) $this->extract_numbers_from_string( strip_tags( $facebook_data_json ) );
			} else {
				$result['error'] = esc_html__( 'Data not found.', 'powerkit' );
			}

			// Set Message.
			if ( isset( $result['error'] ) ) {
				$result['error'] .= sprintf( '%s <a href="%s">%s</a>', esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=facebook' ), esc_html__( ' Facebook API Settings', 'powerkit' ) );
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get instagram followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_instagram( $cache = true ) {

		$network = 'instagram';
		$result  = array(
			'count' => 0,
		);

		// Check Instagram User.
		if ( ! $this->users['instagram_user'] ) {
			$result['error'] = esc_html( 'Please enter an Instagram User.', 'powerkit' );

			return $result;
		}

		// Get Count.
		if ( powerkit_connect( 'instagram_token' ) ) {

			// Get Count.
			$data = $this->curl_get_api( array(
				'network' => $network,
				'url'     => 'https://api.instagram.com/v1/users/self/',
				'params'  => array(
					'access_token' => powerkit_connect( 'instagram_token' ),
				),
				'cache'   => $cache,
				'decode'  => true,
			));

			// Cached Count.
			if ( is_array( $data ) && isset( $data['count'] ) ) {
				return $data;
			}

			// Set count.
			if ( isset( $data->meta->error_message ) ) {

				// API Error.
				$result['error'] = $data->meta->error_message;

			} elseif ( isset( $data->data->counts->followed_by ) ) {

				// Live Count.
				if ( $this->users['instagram_user'] === $data->data->username ) {

					$result['data'] = $data;

					$result['count'] = $data->data->counts->followed_by;
				} else {

					$result['error'] = esc_html__( 'Please check your Instagram User, you do not have access to this account.', 'powerkit' );
				}
			}

			// Set Message.
			if ( isset( $result['error'] ) ) {

				if ( false === strpos( $result['error'], 'Please check your Instagram User' ) ) {
					$result['error'] .= sprintf( '%s <a href="%s">%s</a>', esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Token', 'powerkit' ) );
				}
			}
		} else {
			$data = $this->curl_get_api( array(
				'url'     => 'https://www.instagram.com/' . $this->users['instagram_user'],
				'network' => $network,
				'cache'   => $cache,
				'params'  => array(),
				'decode'  => false,
			) );

			// Cached Count.
			if ( is_array( $data ) && isset( $data['count'] ) ) {
				return $data;
			}

			// Set Count.
			// Get the serialized data string present in the page script.
			preg_match( '/window\._sharedData = (.*);<\/script>/', $data, $ins_data );

			$ins_data_full = array_shift( $ins_data );
			$ins_data_json = array_shift( $ins_data );

			if ( $ins_data_json ) {
				$instagram_json = json_decode( $ins_data_json, true );

				// Live Count.
				if ( ! empty( $instagram_json['entry_data']['ProfilePage'][0]['graphql']['user']['edge_followed_by']['count'] ) ) {

					$result['data'] = $instagram_json;

					$result['count'] = (int) $instagram_json['entry_data']['ProfilePage'][0]['graphql']['user']['edge_followed_by']['count'];
				} else {
					$result['error'] = esc_html__( 'Data not found.', 'powerkit' );
				}
			} else {
				$result['error'] = esc_html__( 'Data not found.', 'powerkit' );
			}

			// Set Message.
			if ( isset( $result['error'] ) ) {
				$result['error'] .= sprintf( '%s <a href="%s">%s</a>', esc_html__( ' Please check your ', 'powerkit' ), powerkit_get_page_url( 'connect&tab=instagram' ), esc_html__( ' Instagram Token', 'powerkit' ) );
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get youtube subscribers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_youtube( $cache = true ) {

		$network = 'youtube';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['youtube_slug'] ) {
			$result['error'] = esc_html( 'Please enter an YouTube User.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'youtube_key' ) ) {
			return $result;
		}

		// Generate Params.
		switch ( $this->extra['youtube_channel_type'] ) {
			case 'channel':
				$params = array(
					'part' => 'snippet,contentDetails,statistics',
					'id'   => $this->users['youtube_slug'],
					'key'  => powerkit_connect( 'youtube_key' ),
				);
				break;

			// User.
			default:
				$params = array(
					'part'        => 'snippet,contentDetails,statistics',
					'forUsername' => $this->users['youtube_slug'],
					'key'         => powerkit_connect( 'youtube_key' ),
				);
				break;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://www.googleapis.com/youtube/v3/channels/',
			'params'  => $params,
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->error->message ) ) {

			// API Error.
			$result['error'] = $data->error->message;

		} elseif ( isset( $data->items[0]->statistics->subscriberCount ) ) {

			$result['data'] = $data;

			// Live Count.
			$result['count'] = $data->items[0]->statistics->subscriberCount;

		} elseif ( isset( $data->items ) && empty( $data->items ) ) {

			// API Error 2.
			$result['error'] = esc_html( 'Please check your username or channel.', 'powerkit' );

		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get telegram followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_telegram( $cache = true ) {

		$network = 'telegram';
		$result  = array(
			'count' => 0,
		);

		// Check chat id.
		if ( ! $this->users['telegram_chat'] ) {
			$result['error'] = esc_html( 'Please enter an Telegram Channel ID.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'telegram_token' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.telegram.org/bot' . powerkit_connect( 'telegram_token' ) . '/getChatMembersCount',
			'params'  => array(
				'chat_id' => '@' . $this->users['telegram_chat'],
			),
			'cache'   => $cache,
			'decode'  => true,
		) );

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->message ) ) {

			// API Error.
			$result['error'] = $data->message;

		} elseif ( isset( $data->result ) ) {

			// Live Count.
			$result['count'] = $data->result;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get soundcloud followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_soundcloud( $cache = true ) {

		$network = 'soundcloud';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['soundcloud_user_id'] ) {
			$result['error'] = esc_html( 'Please enter a SoundCloud User ID.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'soundcloud_client_id' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'http://api.soundcloud.com/users/' . $this->users['soundcloud_user_id'],
			'params'  => array(
				'client_id' => powerkit_connect( 'soundcloud_client_id' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( ! $data ) {

			// API Error.
			$result['error'] = esc_html( 'SoundCloud API Error.', 'powerkit' );

		} elseif ( isset( $data->followers_count ) ) {

			// Live Count.
			$result['count'] = $data->followers_count;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get vimeo followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_vimeo( $cache = true ) {

		$network = 'vimeo';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['vimeo_user'] ) {
			$result['error'] = esc_html( 'Please enter a Vimeo User ID.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'vimeo_token' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.vimeo.com/users/' . $this->users['vimeo_user'] . '/followers',
			'params'  => array(
				'access_token' => powerkit_connect( 'vimeo_token' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->error ) ) {

			// API Error.
			$result['error'] = $data->error;

		} elseif ( isset( $data->total ) ) {

			// Live Count.
			$result['count'] = $data->total;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get twitter followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_twitter( $cache = true ) {
		$network = 'twitter';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['twitter_user'] ) {
			$result['error'] = esc_html( 'Please enter a Twitter User.', 'powerkit' );
			return $result;
		}

		// Check Twitter Consumer Key.
		if ( ! powerkit_connect( 'twitter_consumer_key' ) ) {
			return $result;
		}

		// Check Twitter Consumer Secret.
		if ( ! powerkit_connect( 'twitter_consumer_secret' ) ) {
			return $result;
		}

		// Check Twitter Access Token.
		if ( ! powerkit_connect( 'twitter_access_token' ) ) {
			return $result;
		}

		// Check Twitter Access Token Secret.
		if ( ! powerkit_connect( 'twitter_access_token_secret' ) ) {
			return $result;
		}

		$data = null;

		// Get Cached Data.
		if ( $cache && $this->cache_timeout > 0 ) {
			$data = get_transient( $this->trans_prefix . $network );
		}

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Get Count.
		if ( ! $data ) {

			/* Get Token */
			$token = get_transient( $this->trans_prefix . $network . '_token' );
			if ( ! $token || ! $cache ) {
				$credentials = powerkit_connect( 'twitter_consumer_key' ) . ':' . powerkit_connect( 'twitter_consumer_secret' );
				$to_send     = base64_encode( $credentials );

				$args = array(
					'method'      => 'POST',
					'httpversion' => '1.1',
					'blocking'    => true,
					'headers'     => array(
						'Authorization' => 'Basic ' . $to_send,
						'Content-Type'  => 'application/x-www-form-urlencoded;charset=UTF-8',
					),
					'body'        => array(
						'grant_type' => 'client_credentials',
					),
				);

				add_filter( 'https_ssl_verify', '__return_false' );
				$response = wp_remote_post( esc_url( 'https://api.twitter.com/oauth2/token', null, '' ), $args );

				$keys = json_decode( wp_remote_retrieve_body( $response ) );

				$token = isset( $keys->access_token ) ? $keys->access_token : null;

				set_transient( $this->trans_prefix . $network . '_token', $token, $this->cache_timeout );
			}

			/* Get Data */
			$args = array(
				'httpversion' => '1.1',
				'blocking'    => true,
				'headers'     => array(
					'Authorization' => "Bearer $token",
				),
			);
			add_filter( 'https_ssl_verify', '__return_false' );

			$json_url = add_query_arg( array(
				'screen_name'     => $this->users['twitter_user'],
				'count'           => '1',
				'exclude_replies' => true,
			), 'https://api.twitter.com/1.1/statuses/user_timeline.json' );

			$response = wp_safe_remote_get( $json_url, $args );

			remove_filter( 'https_ssl_verify', '__return_false' );

			/* Set Data Followers */
			if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

				$data = json_decode( wp_remote_retrieve_body( $response ) );

				if ( ! isset( $data->errors ) ) {
					$result['error'] = 'Not available!';
				}
			} else {
				$data = json_decode( wp_remote_retrieve_body( $response ) );
			}
		}

		// Set Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {

			// Cached Count.
			$result['count'] = $data['count'];

		} elseif ( isset( $data->errors ) ) {

			// API Error.
			foreach ( $data->errors as $error ) {
				if ( isset( $error->message ) ) {
					$result['error'] = $error->message;

					break;
				}
			}
		} elseif ( is_array( $data ) && isset( $data[0]->user->followers_count ) ) {

			// Live Count.
			$result['count'] = $data[0]->user->followers_count;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get github followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_github( $cache = true ) {

		$network = 'github';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['github_user'] ) {
			$result['error'] = esc_html( 'Please enter a GitHub User ID.', 'powerkit' );
			return $result;
		}

		// Check client id.
		if ( ! powerkit_connect( 'github_client_id' ) ) {
			return $result;
		}

		// Check client id.
		if ( ! powerkit_connect( 'github_client_secret' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.github.com/users/' . $this->users['github_user'],
			'params'  => array(
				'client_id'     => powerkit_connect( 'github_client_id' ),
				'client_secret' => powerkit_connect( 'github_client_secret' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->message ) ) {

			// API Error.
			$result['error'] = $data->message;

		} elseif ( isset( $data->followers ) ) {

			// Live Count.
			$result['count'] = $data->followers;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get behance followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_behance( $cache = true ) {

		$network = 'behance';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['behance_user'] ) {
			$result['error'] = esc_html( 'Please enter a Behance User ID.', 'powerkit' );
			return $result;
		}

		// Check client id.
		if ( ! powerkit_connect( 'behance_client_id' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.behance.net/v2/users/' . $this->users['behance_user'],
			'params'  => array(
				'client_id' => powerkit_connect( 'behance_client_id' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->valid ) && 0 === $data->valid ) {

			// API Error.
			if ( isset( $data->messages ) ) {
				foreach ( (array) $data->messages as $message ) {
					if ( 'error' === $message->type ) {
						$result['error'] = $message->message;
					}
				}
			} else {
				$result['error'] = esc_html( 'Please check your username and client_id.', 'powerkit' );
			}
		} elseif ( isset( $data->user->stats->followers ) ) {

			// Live Count.
			$result['count'] = $data->user->stats->followers;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get twitch followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_twitch( $cache = true ) {

		$network = 'twitch';
		$result  = array(
			'count' => 0,
		);

		// Check channel id.
		if ( ! $this->users['twitch_user_id'] ) {
			$result['error'] = esc_html( 'Please enter a Twitch User ID.', 'powerkit' );
			return $result;
		}

		// Check client id.
		if ( ! powerkit_connect( 'twitch_client_id' ) ) {
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://api.twitch.tv/kraken/channels/' . $this->users['twitch_user_id'],
			'params'  => array(
				'client_id' => powerkit_connect( 'twitch_client_id' ),
			),
			'cache'   => $cache,
			'decode'  => true,
		) );

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->message ) ) {

			// API Error.
			$result['error'] = $data->message;

		} elseif ( isset( $data->followers ) ) {

			// Live Count.
			$result['count'] = $data->followers;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get flickr count
	 *
	 * @since 1.0.0
	 * @param bool $cache Cache Results.
	 */
	public function get_flickr( $cache = true ) {

		$network = 'flickr';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['flickr_user_id'] ) {
			$result['error'] = esc_html( 'Please enter a flickr user id.', 'powerkit' );

			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'url'     => 'https://www.flickr.com/photos/' . $this->users['flickr_user_id'],
			'network' => $network,
			'cache'   => $cache,
			'params'  => array(),
			'decode'  => false,
		));

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		$data = str_replace( '.', '', $data );
		$data = str_replace( 'K', '000', $data );
		$data = str_replace( 'M', '000000', $data );

		$flickr_result = preg_match( '/<p class="followers[^"]*?">(.*?)\s[^<]*?<em>/s', $data, $flickr_data );

		if ( $flickr_result ) {
			$flickr_data_full   = array_shift( $flickr_data );
			$flickr_data_number = array_shift( $flickr_data );

			// Live Count.
			$result['count'] = (int) $flickr_data_number;
		} else {
			$result['error'] = esc_html__( 'Data not found. Please check your user ID.', 'powerkit' );
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get medium followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache Cache Results.
	 */
	public function get_medium( $cache = true ) {

		$network = 'medium';
		$result  = array(
			'count' => 0,
		);

		// Check user.
		if ( ! $this->users['medium_user'] ) {
			$result['error'] = esc_html( 'Please enter a Medium User.', 'powerkit' );
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://medium.com/' . $this->users['medium_user'],
			'params'  => array(
				'format' => 'json',
			),
			'cache'   => $cache,
			'decode'  => false,
		) );

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( isset( $data->message ) ) {

			// API Error.
			$result['error'] = $data->message;

		} elseif ( $data ) {
			$data = str_replace( '])}while(1);</x>', '', $data );

			$data = json_decode( $data, true );

			if ( isset( $data['payload']['user']['userId'] ) ) {

				$user_id = $data['payload']['user']['userId'];

				if ( isset( $data['payload']['references']['SocialStats'][ $user_id ]['usersFollowedByCount'] ) ) {
					// Live Count.
					$result['count'] = $data['payload']['references']['SocialStats'][ $user_id ]['usersFollowedByCount'];
				}
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get reddit subscribers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_reddit( $cache = true ) {

		$network = 'reddit';
		$result  = array(
			'count' => null,
		);

		// Check channel id.
		if ( ! $this->users['reddit_user'] ) {
			$result['error'] = esc_html( 'Please enter Reddit User or Subreddit Name.', 'powerkit' );
			return $result;
		}

		if ( 'subreddit' === $this->extra['reddit_type'] ) {
			$url = sprintf( 'https://www.reddit.com/r/%s/about.json', $this->users['reddit_user'] );
		} else {
			$url = sprintf( 'https://www.reddit.com/user/%s/about.json', $this->users['reddit_user'] );
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => $url,
			'params'  => array(),
			'cache'   => $cache,
			'decode'  => true,
		) );

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( 'subreddit' === $this->extra['reddit_type'] ) {
			if ( isset( $data->data->subscribers ) ) {
				// Live Count.
				$result['count'] = $data->data->subscribers;
			}
		} else {
			if ( isset( $data->data->link_karma ) ) {
				// Live Count.
				$result['count'] += $data->data->link_karma;
			}
			if ( isset( $data->data->comment_karma ) ) {
				// Live Count.
				$result['count'] += $data->data->comment_karma;
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get ok followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache Cache Results.
	 */
	public function get_ok( $cache = true ) {

		$network = 'ok';
		$result  = array(
			'count' => 0,
		);

		// Check username.
		if ( ! $this->users['ok_slug'] ) {
			$result['error'] = esc_html( 'Please enter a Odnoklassniki Slug or ID.', 'powerkit' );
			return $result;
		}

		// Check application key.
		if ( ! powerkit_connect( 'ok_application_key' ) ) {
			return $result;
		}

		// Check access token.
		if ( ! powerkit_connect( 'ok_access_token' ) ) {
			return $result;
		}

		// Check session secret key.
		if ( ! powerkit_connect( 'ok_session_secret_key' ) ) {
			return $result;
		}

		$data = null;

		$object_id = null;

		// Get info by slug.
		if ( 'profile_name' === $this->extra['ok_type'] || 'group_name' === $this->extra['ok_type'] ) {
			$params = array(
				'application_key' => powerkit_connect( 'ok_application_key' ),
				'format'          => 'json',
				'method'          => 'url.getInfo',
				'url'             => 'https://ok.ru/' . $this->users['ok_slug'],
			);

			$query = http_build_query( $params, '', '' );

			$params['access_token'] = powerkit_connect( 'ok_access_token' );

			$params['sig'] = md5( urldecode( $query . powerkit_connect( 'ok_session_secret_key' ) ) );

			// Get Count.
			$data = $this->curl_get_api( array(
				'network' => $network,
				'url'     => 'https://api.ok.ru/fb.do',
				'params'  => $params,
				'cache'   => $cache,
				'decode'  => true,
			));

			if ( isset( $data->objectId ) ) {
				$object_id = $data->objectId;
			}
		} else {
			$object_id = $this->users['ok_slug'];
		}

		if ( $object_id ) {
			if ( 'group' === $this->extra['ok_type'] || 'group_name' === $this->extra['ok_type'] ) {
				$params = array(
					'application_key' => powerkit_connect( 'ok_application_key' ),
					'counterTypes'    => 'members',
					'format'          => 'json',
					'group_id'        => $object_id,
					'method'          => 'group.getCounters',
				);

				$query = http_build_query( $params, '', '' );

				$params['access_token'] = powerkit_connect( 'ok_access_token' );

				$params['sig'] = md5( urldecode( $query . powerkit_connect( 'ok_session_secret_key' ) ) );

				// Get Count.
				$data = $this->curl_get_api( array(
					'network' => $network,
					'url'     => 'https://api.ok.ru/fb.do',
					'params'  => $params,
					'cache'   => $cache,
					'decode'  => true,
				));
			}

			if ( 'profile' === $this->extra['ok_type'] || 'profile_name' === $this->extra['ok_type'] ) {
				$params = array(
					'application_key' => powerkit_connect( 'ok_application_key' ),
					'fid'             => $object_id,
					'format'          => 'json',
					'method'          => 'friends.get',
				);

				$query = http_build_query( $params, '', '' );

				$params['access_token'] = powerkit_connect( 'ok_access_token' );

				$params['sig'] = md5( urldecode( $query . powerkit_connect( 'ok_session_secret_key' ) ) );

				// Get Count.
				$data = $this->curl_get_api( array(
					'network' => $network,
					'url'     => 'https://api.ok.ru/fb.do',
					'params'  => $params,
					'cache'   => $cache,
					'decode'  => true,
				));

				if ( is_array( $data ) && count( $data ) > 0 ) {
					$data = (int) count( $data );
				}
			}
		}

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		if ( is_object( $data ) && isset( $data->error_msg ) ) {

			// API Error.
			$result['error'] = $data->error_msg;

		} elseif ( is_object( $data ) && isset( $data->counters->members ) ) {

			// Live Count.
			$result['count'] = $data->counters->members;
		} elseif ( is_numeric( $data ) ) {

			// Live Count.
			$result['count'] = $data;
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get vk followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache  Cache Results.
	 */
	public function get_vk( $cache = true ) {

		$network = 'vk';
		$result  = array(
			'count' => 0,
		);

		// Check vk id.
		if ( ! $this->users['vk_id'] ) {
			$result['error'] = esc_html( 'Please enter a Group/Page ID.', 'powerkit' );
			return $result;
		}

		// Check token.
		if ( ! powerkit_connect( 'vk_token' ) ) {
			return $result;
		}

		// Get Count.
		if ( 'user' === $this->users['vk_type'] ) {

			$data = $this->curl_get_api( array(
				'network' => $network,
				'url'     => 'https://api.vk.com/method/users.get',
				'params'  => array(
					'access_token' => powerkit_connect( 'vk_token' ),
					'user_ids'     => $this->users['vk_id'],
					'fields'       => 'counters',
					'v'            => '5.101',
				),
				'cache'   => $cache,
				'decode'  => true,
			));

			// Cached Count.
			if ( is_array( $data ) && isset( $data['count'] ) ) {
				return $data;
			}

			// Set Count.
			if ( isset( $data->error->error_msg ) ) {

				// API Error.
				$result['error'] = $data->error->error_msg;

			} elseif ( isset( $data->response[0]->counters->friends ) ) {

				// Live Count.
				$result['count'] = $data->response[0]->counters->friends;
			}
		} else {

			$data = $this->curl_get_api( array(
				'network' => $network,
				'url'     => 'https://api.vk.com/method/groups.getById',
				'params'  => array(
					'access_token' => powerkit_connect( 'vk_token' ),
					'group_id'     => $this->users['vk_id'],
					'fields'       => 'members_count',
					'v'            => '5.101',
				),
				'cache'   => $cache,
				'decode'  => true,
			));

			// Cached Count.
			if ( is_array( $data ) && isset( $data['count'] ) ) {
				return $data;
			}

			// Set Count.
			if ( isset( $data->error->error_msg ) ) {

				// API Error.
				$result['error'] = $data->error->error_msg;

			} elseif ( isset( $data->response[0]->members_count ) ) {

				// Live Count.
				$result['count'] = $data->response[0]->members_count;
			}
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}
	/**
	 * Get strava followers count
	 *
	 * @since 1.0.0
	 * @param bool $cache Cache Results.
	 */
	public function get_strava( $cache = true ) {

		$network = 'strava';
		$result  = array(
			'count' => 0,
		);

		// Check user.
		if ( ! $this->users['strava_user'] ) {
			$result['error'] = esc_html( 'Please enter a Strava User.', 'powerkit' );
			return $result;
		}

		// Get Count.
		$data = $this->curl_get_api( array(
			'network' => $network,
			'url'     => 'https://www.strava.com/athletes/' . $this->users['strava_user'],
			'params'  => array(
				'format' => 'json',
			),
			'cache'   => $cache,
			'decode'  => false,
		) );

		// Cached Count.
		if ( is_array( $data ) && isset( $data['count'] ) ) {
			return $data;
		}

		// Set Count.
		$strava_result = preg_match( '/followersCount&quot;:(\d*?),&quot;/s', $data, $strava_data );

		if ( $strava_result ) {
			$strava_data_full   = array_shift( $strava_data );
			$strava_data_number = array_shift( $strava_data );

			// Live Count.
			$result['count'] = (int) $strava_data_number;
		} else {
			$result['error'] = esc_html__( 'Data not found. Please check your user ID.', 'powerkit' );
		}

		// Maybe Set Cache.
		$this->maybe_set_cache( $network, $result, $cache );

		return $result;
	}

	/**
	 * Get random user agent
	 *
	 * @since 1.0.0
	 */
	public function get_random_user_agent() {
		$user_agents = array(
			'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
			'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
			'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
			'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246',
		);

		$random = rand( 0, count( $user_agents ) - 1 );

		return $user_agents[ $random ];
	}

	/**
	 * Parse all characters in a string and retrieve only the numeric ones.
	 *
	 * @param string $td_string The string.
	 */
	private function extract_numbers_from_string( $td_string ) {
		$buffy     = null;
		$td_string = preg_split( '//u', $td_string, -1, PREG_SPLIT_NO_EMPTY );

		foreach ( $td_string as $td_char ) {
			if ( is_numeric( $td_char ) ) {
				$buffy .= $td_char;
			}
		}
		return $buffy;
	}

	/**
	 * Error format
	 *
	 * @param int $value The message.
	 */
	public function error_format( $value = null ) {
		return (string) $value;
	}

	/**
	 * Count format
	 *
	 * @param int $value  Count number.
	 */
	public function count_format( $value = 0 ) {
		$result = '';
		$value  = (int) $value;

		$count_format = apply_filters( 'powerkit_social_links_count_format', true );

		if ( $count_format ) {
			if ( $value > 999 && $value <= 999999 ) {
				$result = round( $value / 1000 ) . esc_html( 'K', 'powerkit' );
			} elseif ( $value > 999999 ) {
				$result = number_format( $value / 1000000, 1, '.', '' ) . esc_html( 'M', 'powerkit' );

				$result = str_replace( '.0', '', $result );
			} else {
				$result = $value;
			}
		} else {
			$result = $value;
		}

		return $result;
	}

	/**
	 * Get Network Count
	 *
	 * @param string $network    Social network name.
	 * @param bool   $cache      Cache Results.
	 */
	public function get_count( $network, $cache = true ) {
		$count_function = 'get_' . str_replace( '-', '_', $network );

		// Get Count.
		if ( method_exists( $this, $count_function ) ) {
			$data = $this->$count_function( $cache );

			return $this->safe_result( $network, $data );
		}
	}
}

/**
 * Get Count
 *
 * @param string $network      Social network name.
 * @param bool   $labels       Show network labels.
 * @param bool   $cache        Cache results.
 * @param bool   $array_format Format of output.
 */
function powerkit_social_links_get_count( $network = '', $labels = true, $cache = true, $array_format = false ) {

	// Get Count.
	$counter = new Powerkit_Links_Social_Counter();

	$result = $counter->get_count( $network, $cache );

	$result = apply_filters( 'powerkit_social_links_count', $result, $network );

	if ( $array_format ) {

		if ( isset( $result['count'] ) ) {
			$result['count'] = $counter->count_format( $result['count'] );
		}

		return $result;
	} else {

		if ( isset( $result['error'] ) ) {
			$output = $counter->error_format( $result['error'] );
		} else {
			$output = $counter->count_format( $result['count'] );
		}

		return $output;
	}
}
