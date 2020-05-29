<?php
/**
 * Connect
 *
 * @package    Powerkit
 * @subpackage Extensions
 */

/**
 * Init module
 */
class Powerkit_Connect extends Powerkit_Module {

	/**
	 * Register module
	 */
	public function register() {
		$this->name     = 'connect';
		$this->slug     = 'connect';
		$this->type     = 'extension';
		$this->category = 'basic';
		$this->public   = false;
		$this->enabled  = true;
	}

	/**
	 * Initialize module
	 */
	public function initialize() {
		add_action( 'admin_menu', array( $this, 'register_options_page' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_ajax_powerkit_reset_cache', array( $this, 'ajax_reset_cache' ) );
		add_action( 'wp_ajax_nopriv_powerkit_reset_cache', array( $this, 'ajax_reset_cache' ) );
		add_filter( 'powerkit_connect_return', array( $this, 'access_token_refresh' ), 10, 2 );
	}

	/**
	 * Register admin page
	 *
	 * @since 1.0.0
	 */
	public function register_options_page() {
		add_options_page( esc_html__( 'Connect', 'powerkit' ), esc_html__( 'Connect', 'powerkit' ), 'manage_options', powerkit_get_page_slug( $this->slug ), array( $this, 'build_options_page' ) );
	}

	/**
	 * Build admin page
	 *
	 * @since 1.0.0
	 */
	public function build_options_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'You do not have sufficient rights to view this page.', 'powerkit' ) );
		}
		$this->logout_account();
		$this->save_options_page();
		$this->user_reset_cache();
		?>

			<div class="wrap">
				<h2><?php esc_html_e( 'Connect', 'powerkit' ); ?></h2>

				<div class="settings">
					<?php $connect_list = apply_filters( 'powerkit_register_connect_list', array() ); ?>

					<?php if ( $connect_list ) : ?>
						<div class="tabs">
							<?php
							$connect_list = array_values( $connect_list );

							$tab = isset( $_GET['tab'] ) ? esc_attr( $_GET['tab'] ) : $connect_list[0]['id']; // Input var ok; sanitization ok.
							?>

							<nav class="nav-tab-wrapper woo-nav-tab-wrapper">
								<?php
								foreach ( $connect_list as $item ) {
									$class = ( $item['id'] === $tab ) ? 'nav-tab-active' : ''; // Input var ok.
									printf( '<a class="nav-tab %4$s" href="%1$s&tab=%2$s">%3$s</a>',
										esc_url( powerkit_get_page_url( $this->slug ) ), esc_attr( $item['id'] ), esc_html( $item['name'] ), esc_attr( $class )
									);
								}
								?>
							</nav>

							<?php
							foreach ( $connect_list as $item ) {
								// Instagram tab.
								if ( 'instagram' === $item['id'] && $item['id'] === $tab ) { // Input var ok.
									?>
										<div id="tab-<?php echo esc_attr( $item['id'] ); ?>" class="tab-wrap">
											<?php $this->instagram_custom_tab( $tab ); ?>
										</div>
									<?php
								// Facebook tab.
								} elseif ( 'facebook' === $item['id'] && $item['id'] === $tab ) { // Input var ok.
									?>
										<div id="tab-<?php echo esc_attr( $item['id'] ); ?>" class="tab-wrap">
											<?php $this->facebook_custom_tab( $tab ); ?>
										</div>
									<?php
								// Twitter tab.
								} elseif ( 'twitter' === $item['id'] && $item['id'] === $tab ) { // Input var ok.
									?>
										<div id="tab-<?php echo esc_attr( $item['id'] ); ?>" class="tab-wrap">
											<?php $this->twitter_custom_tab( $tab ); ?>
										</div>
									<?php
								} elseif ( $item['id'] === $tab ) {
									?>
									<form class="basic" method="post">
										<div id="tab-<?php echo esc_attr( $item['id'] ); ?>" class="tab-wrap">
											<!-- Render Fields -->
											<?php
											if ( isset( $item['fields'] ) && $item['fields'] ) {
												?>
												<table class="form-table">
													<tbody>
														<?php
														foreach ( $item['fields'] as $field ) {
															?>
																<tr>
																	<th scope="row"><label class="title" for="<?php echo esc_attr( $field['key'] ); ?>"><?php echo esc_html( $field['caption'] ); ?></label></th>
																	<td>
																		<input class="regular-text" id="<?php echo esc_attr( $field['key'] ); ?>" name="<?php echo esc_attr( $field['key'] ); ?>" type="text" value="<?php echo esc_attr( powerkit_connect( $field['key'] ) ); ?>" />

																		<?php if ( isset( $field['instruction'] ) ) { ?>
																			<p><?php echo wp_kses_post( $field['instruction'] ); ?></p>
																		<?php } ?>
																	</td>
																</tr>
															<?php
														}
														?>
													</tbody>
												</table>
												<?php
											}
											?>
										</div>

										<?php wp_nonce_field(); ?>

										<p class="submit">
											<input class="button button-primary" name="save_settings" type="submit" value="<?php esc_html_e( 'Save changes', 'powerkit' ); ?>" />
										</p>
									</form>
									<?php
								}
							}
							?>
						</div>

						<hr>

						<form method="post" class="form-reset">
							<?php wp_nonce_field(); ?>

							<p class="submit"><input class="button" name="powerkit_reset_cache" type="submit" value="<?php esc_html_e( 'Reset cache', 'powerkit' ); ?>" /></p>
						</form>
					<?php else : ?>
						<p class="submit">
							<?php esc_html_e( 'The list of social network settings is empty!!!', 'powerkit' ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<style>
			.tab-badge-success {
				display: inline-block;
				border: 1px solid #46b450;
				padding: 0.5rem 0.75rem;
				color: #32373c;
				font-weight: 600;
				border-radius: 5px;
				margin-top: 1rem;
			}
			</style>
		<?php
	}

	/**
	 * Instagram custom tab
	 *
	 * @param string $tab The name of tab.
	 */
	public function instagram_custom_tab( $tab ) {

		// Update connect settigs.
		if ( isset( $_POST['type'] ) && ( 'instagram-connect' === $_POST['type'] || 'facebook-connect' === $_POST['type'] ) ) {
			$ig_status       = isset( $_POST['status'] ) && $_POST['status'] ? $_POST['status'] : null;
			$ig_content      = isset( $_POST['content'] ) && $_POST['content'] ? $_POST['content'] : null;
			$ig_access_token = isset( $_POST['access_token'] ) && $_POST['access_token'] ? $_POST['access_token'] : null;
			$ig_user_id      = isset( $_POST['user_id'] ) && $_POST['user_id'] ? $_POST['user_id'] : null;
			$ig_username     = isset( $_POST['username'] ) && $_POST['username'] ? $_POST['username'] : null;
			$ig_expires_in   = isset( $_POST['expires_in'] ) && $_POST['expires_in'] ? $_POST['expires_in'] : 5183944;

			if ( $ig_user_id && strpos( $ig_user_id, '{+}', true ) ) {
				$ig_user_data = explode( '{+}', $ig_user_id );

				$ig_user_id  = $ig_user_data[0];
				$ig_username = $ig_user_data[1];
			}

			if ( 'success' === $ig_status && $ig_access_token && $ig_user_id ) {
				set_transient( 'powerkit_connect_instagram_app_type', 'instagram-connect' === $_POST['type'] ? 'personal' : 'business', $ig_expires_in );
				set_transient( 'powerkit_connect_instagram_app_access_token', $ig_access_token, $ig_expires_in );
				set_transient( 'powerkit_connect_instagram_app_user_id', $ig_user_id, $ig_expires_in );
				set_transient( 'powerkit_connect_instagram_app_username', $ig_username ? $ig_username : $ig_user_id, $ig_expires_in );
				set_transient( 'powerkit_connect_instagram_app_refresh', true, WEEK_IN_SECONDS );

				$this->location_reset_cache( 'instagram' );
			}
		}

		// Notice.
		if ( isset( $ig_status ) && isset( $ig_content ) && 'success' === $ig_status ) {
			?>
				<div class="notice notice-success is-dismissible"><p><?php echo esc_html( wp_unslash( $ig_content ) ); ?></p></div>
			<?php
		} elseif ( isset( $ig_status ) && isset( $ig_content ) && 'error' === $ig_status ) {
			?>
				<div class="notice notice-error is-dismissible"><p><?php echo esc_html( wp_unslash( $ig_content ) ); ?></p></div>
			<?php
		}
		?>

		<?php
		// Select Business Profile.
		if ( isset( $_POST['type'] ) && 'facebook-connect' === $_POST['type'] ) {
			$ig_type         = isset( $_POST['type'] ) && $_POST['type'] ? $_POST['type'] : null;
			$ig_status       = isset( $_POST['status'] ) && $_POST['status'] ? $_POST['status'] : null;
			$ig_content      = isset( $_POST['content'] ) && $_POST['content'] ? $_POST['content'] : null;
			$ids_business    = isset( $_POST['ids_business'] ) && $_POST['ids_business'] ? $_POST['ids_business'] : null;
			$ig_access_token = isset( $_POST['access_token'] ) && $_POST['access_token'] ? $_POST['access_token'] : null;
			$ig_expires_in   = isset( $_POST['expires_in'] ) && $_POST['expires_in'] ? $_POST['expires_in'] : null;

			$ids_business = maybe_unserialize( base64_decode( $ids_business ) );

			if ( is_array( $ids_business ) && $ids_business ) {
				$form_business = true;
				?>
				<form method="post" class="form-business">
					<?php wp_nonce_field(); ?>

					<br><h3><?php esc_html_e( 'Instagram Business Profiles for This Account', 'powerkit' ); ?></h3>

					<p><?php esc_html_e( 'You need to select a Business profile below.', 'powerkit' ); ?></p>

					<?php
					$id_counter = 0;
					foreach ( $ids_business as $item ) {
						$id_counter++;
						?>
						<label>
							<input type="radio" name="user_id" <?php checked( $id_counter, 1 ); ?> value="<?php echo esc_attr( $item['id'] ); ?>{+}<?php echo esc_attr( $item['username'] ); ?>">

							<?php echo esc_attr( $item['name'] ); ?> (<?php echo esc_attr( $item['id'] ); ?>)
						</label>
						<?php
					}
					?>

					<input type="hidden" name="type" value="<?php echo esc_attr( $ig_type ); ?>">
					<input type="hidden" name="status" value="<?php echo esc_attr( $ig_status ); ?>">
					<input type="hidden" name="content" value="<?php echo esc_attr( $ig_content ); ?>">
					<input type="hidden" name="access_token" value="<?php echo esc_attr( $ig_access_token ); ?>">
					<input type="hidden" name="expires_in" value="<?php echo esc_attr( $ig_expires_in ); ?>">

					<p class="submit">
						<input class="button" name="save_business" type="submit" value="<?php esc_html_e( 'Select this profile', 'powerkit' ); ?>" />
					</p>
				</form>
				<?php
			}
		}
		?>

		<?php
		// Display information or sign buttons.
		if ( powerkit_connect( 'instagram_app_access_token' ) ) {
			?>

			<?php if ( 'business' === powerkit_connect( 'powerkit_connect_instagram_app_type' ) ) { ?>
				<br><h3><?php esc_html_e( 'Business Instagram Account', 'powerkit' ); ?></h3>
			<?php } else { ?>
				<br><h3><?php esc_html_e( 'Personal Instagram Account', 'powerkit' ); ?></h3>
			<?php } ?>

			<p><span class="tab-badge-success"><?php esc_html_e( '✓ Account', 'powerkit' ); ?> (<a href="https://www.instagram.com/<?php echo esc_attr( powerkit_connect( 'instagram_app_username' ) ); ?>" target="_blank"><?php echo esc_attr( powerkit_connect( 'instagram_app_username' ) ); ?></a>) <?php esc_html_e( 'successfully connected', 'powerkit' ); ?></span></p>

			<p><?php esc_html_e( 'Your Instagram User ID:', 'powerkit' ); ?> <code><?php echo esc_attr( powerkit_connect( 'instagram_app_username' ) ); ?></code> <?php esc_html_e( 'Please use this ID in settings when requested.', 'powerkit' ); ?></p>

			<form method="post" class="form-logout">
				<?php wp_nonce_field(); ?>

				<input type="hidden" name="logout_account_type" value="instagram">

				<p class="submit">
					<input class="button button-primary" name="logout_account" type="submit" value="<?php esc_html_e( 'Disconnect', 'powerkit' ); ?>" />
				</p>
			</form>

		<?php } elseif ( ! isset( $form_business ) ) { ?>

			<br><h3><?php esc_html_e( 'Personal Account', 'powerkit' ); ?></h3>

			<p><?php esc_html_e( 'Used for displaying user feeds from a Personal Instagram account.', 'powerkit' ); ?></p>

			<?php
				$app_authorize = add_query_arg( array(
					'app_id'        => powerkit_connect( 'instagram_app_id' ),
					'redirect_uri'  => rawurlencode( powerkit_connect( 'instagram_app_url' ) ),
					'response_type' => 'code',
					'scope'         => 'user_profile,user_media',
					'state'         => base64_encode( sprintf( '%s&tab=%s', powerkit_get_page_url( $this->slug ), $tab ) ),
				), 'https://www.instagram.com/oauth/authorize' );
			?>


			<a class="button button-primary" href="<?php echo esc_url( $app_authorize ); ?>">
				<?php esc_html_e( 'Connect', 'powerkit' ); ?>
			</a>

			<br><h3><?php esc_html_e( 'Business Account', 'powerkit' ); ?></h3>

			<p><?php esc_html_e( 'Used for displaying user feeds from a Business or Creator Instagram account.', 'powerkit' ); ?><br><?php esc_html_e( 'A Business or Creator account is required for displaying comments, like/comment counts, user avatar, and bio', 'powerkit' ); ?></p>

			<?php
				$app_authorize = add_query_arg( array(
					'client_id'    => powerkit_connect( 'instagram_app_fb_client_id' ),
					'redirect_uri' => rawurlencode( powerkit_connect( 'instagram_app_fb_url' ) ),
					'scope'        => 'manage_pages,instagram_basic',
					'state'        => base64_encode( sprintf( '%s&tab=%s', powerkit_get_page_url( $this->slug ), $tab ) ),
				), 'https://www.facebook.com/dialog/oauth' );
			?>

			<a class="button button-primary" href="<?php echo esc_url( $app_authorize ); ?>">
				<?php esc_html_e( 'Connect', 'powerkit' ); ?>
			</a>

			<br><br>
			<?php
		}
		?>
		<form class="basic" method="post">
			<br><h3><?php esc_html_e( 'Manual Settings', 'powerkit' ); ?></h3>

			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="powerkit_connect_instagram_following" class="title">
								<?php esc_html_e( 'Number of Following', 'powerkit' ); ?>
							</label>
						</th>
						<td>
							<input class="regular-text" name="powerkit_connect_instagram_following" id="powerkit_connect_instagram_following" type="number" value="<?php echo esc_attr( get_option( 'powerkit_connect_instagram_following' ) ); ?>" />
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="powerkit_connect_instagram_custom_followers" class="title">
								<?php esc_html_e( 'Custom Followers', 'powerkit' ); ?>
							</label>
						</th>
						<td>
							<input class="regular-text" name="powerkit_connect_instagram_custom_followers" id="powerkit_connect_instagram_custom_followers" type="number" value="<?php echo esc_attr( get_option( 'powerkit_connect_instagram_custom_followers' ) ); ?>" />
							<p class="description"><?php esc_html_e( 'Numbers of followers is automatically retrieved from Instagram for Business accounts.', 'powerkit' ); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="powerkit_connect_instagram_custom_name" class="title">
								<?php esc_html_e( 'Custom Name', 'powerkit' ); ?>
							</label>
						</th>
						<td>
							<input class="regular-text" name="powerkit_connect_instagram_custom_name" id="powerkit_connect_instagram_custom_name" type="text" value="<?php echo esc_attr( get_option( 'powerkit_connect_instagram_custom_name' ) ); ?>" />
							<p class="description"><?php esc_html_e( 'Name is automatically retrieved from Instagram for Business accounts.', 'powerkit' ); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="powerkit_connect_instagram_custom_avatar" class="title">
								<?php esc_html_e( 'Custom Avatar', 'powerkit' ); ?>
							</label>
						</th>
						<td>
							<input placeholder="https://example.com/avatar.jpg" class="regular-text" name="powerkit_connect_instagram_custom_avatar" id="powerkit_connect_instagram_custom_avatar" type="text" value="<?php echo esc_attr( get_option( 'powerkit_connect_instagram_custom_avatar' ) ); ?>" />
							<p class="description"><?php esc_html_e( 'Avatar is automatically retrieved from Instagram for Business accounts.', 'powerkit' ); ?></p>
						</td>
					</tr>
				</tbody>
			</table>

			<?php wp_nonce_field(); ?>

			<p class="submit">
				<input class="button button-primary" name="save_instagram_settings" type="submit" value="<?php esc_html_e( 'Save settings', 'powerkit' ); ?>" />
			</p>
		</form>
		<?php
	}

	/**
	 * Facebook custom tab
	 *
	 * @param string $tab The name of tab.
	 */
	public function facebook_custom_tab( $tab ) {

		// Update connect settigs.
		if ( isset( $_POST['type'] ) && 'facebook-connect' === $_POST['type'] ) {
			$fb_status       = isset( $_POST['status'] ) && $_POST['status'] ? $_POST['status'] : null;
			$fb_content      = isset( $_POST['content'] ) && $_POST['content'] ? $_POST['content'] : null;
			$fb_access_token = isset( $_POST['access_token'] ) && $_POST['access_token'] ? $_POST['access_token'] : null;
			$fb_expires_in   = isset( $_POST['expires_in'] ) && $_POST['expires_in'] ? $_POST['expires_in'] : 0;
			$fb_accounts     = isset( $_POST['ids_accounts'] ) && $_POST['ids_accounts'] ? maybe_unserialize( base64_decode( $_POST['ids_accounts'] ) ) : array();

			if ( 'success' === $fb_status && $fb_access_token ) {
				set_transient( 'powerkit_connect_facebook_app_access_token', $fb_access_token, $fb_expires_in );
				set_transient( 'powerkit_connect_facebook_app_accounts', $fb_accounts, $fb_expires_in );
				set_transient( 'powerkit_connect_facebook_app_refresh', true, WEEK_IN_SECONDS );

				$this->location_reset_cache( 'facebook' );
			}
		}

		// Notice.
		if ( isset( $fb_status ) && isset( $fb_content ) && 'success' === $fb_status ) {
			?>
				<div class="notice notice-success is-dismissible"><p><?php echo esc_html( wp_unslash( $fb_content ) ); ?></p></div>
			<?php
		} elseif ( isset( $fb_status ) && isset( $fb_content ) && 'error' === $fb_status ) {
			?>
				<div class="notice notice-error is-dismissible"><p><?php echo esc_html( wp_unslash( $fb_content ) ); ?></p></div>
			<?php
		}
		?>

		<?php
		// Display information or sign buttons.
		if ( powerkit_connect( 'facebook_app_access_token' ) ) {
			?>

			<br><h3><?php esc_html_e( 'Facebook Account', 'powerkit' ); ?></h3>

			<p><span class="tab-badge-success"><?php esc_html_e( '✓ Account successfully connected', 'powerkit' ); ?></span></p>

			<?php
			$accounts = powerkit_connect( 'facebook_app_accounts' );

			if ( $accounts ) {
				$usernames = array();

				foreach ( $accounts as $account ) {
					if ( isset( $account['username'] ) ) {
						$usernames[] = sprintf( '<code>%s</code>', $account['username'] );
					} else {
						$usernames[] = sprintf( '<code>%s</code>', $account['id'] );
					}
				}

				if ( 1 === count( $usernames ) ) {
					?>
					<p><?php esc_html_e( 'Your Facebook page ID:', 'powerkit' ); ?> <?php echo wp_kses_post( implode( ', ', $usernames ) ); ?><?php esc_html_e( '. Please use this ID in settings when requested.', 'powerkit' ); ?></p>
					<?php
				} else {
					?>
					<p><?php esc_html_e( 'Available Facebook page IDs:', 'powerkit' ); ?> <?php echo wp_kses_post( implode( ', ', $usernames ) ); ?><?php esc_html_e( '. Please use one of these IDs in settings when requested.', 'powerkit' ); ?></p>
					<?php

				}
			}
			?>

			<form method="post" class="form-logout">
				<?php wp_nonce_field(); ?>

				<input type="hidden" name="logout_account_type" value="facebook">

				<p class="submit">
					<input class="button button-primary" name="logout_account" type="submit" value="<?php esc_html_e( 'Disconnect', 'powerkit' ); ?>" />
				</p>
			</form>
		<?php } else { ?>

				<br><h3><?php esc_html_e( 'Facebook Account', 'powerkit' ); ?></h3>

				<?php
					$app_authorize = add_query_arg( array(
						'client_id'    => powerkit_connect( 'facebook_app_id' ),
						'redirect_uri' => rawurlencode( powerkit_connect( 'facebook_app_url' ) ),
						'scope'        => 'manage_pages',
						'state'        => base64_encode( sprintf( '%s&tab=%s', powerkit_get_page_url( $this->slug ), $tab ) ),
					), 'https://www.facebook.com/dialog/oauth' );
				?>

				<a class="button button-primary" href="<?php echo esc_url( $app_authorize ); ?>">
					<?php esc_html_e( 'Connect', 'powerkit' ); ?>
				</a>

				<br><br>
			<?php
		}
	}

	/**
	 * Facebook custom tab
	 *
	 * @param string $tab The name of tab.
	 */
	public function twitter_custom_tab( $tab ) {

		// Update connect settigs.
		if ( isset( $_POST['type'] ) && 'twitter-connect' === $_POST['type'] ) {
			$tw_status             = isset( $_POST['status'] ) && $_POST['status'] ? $_POST['status']               : null;
			$tw_content            = isset( $_POST['content'] ) && $_POST['content'] ? $_POST['content']            : null;
			$tw_user_id            = isset( $_POST['user_id'] ) && $_POST['user_id'] ? $_POST['user_id']            : null;
			$tw_screen_name        = isset( $_POST['screen_name'] ) && $_POST['screen_name'] ? $_POST['screen_name']: null;
			$tw_oauth_token        = isset( $_POST['oauth_token'] ) && $_POST['oauth_token'] ? $_POST['oauth_token']: null;
			$tw_oauth_token_secret = isset( $_POST['oauth_token_secret'] ) && $_POST['oauth_token_secret'] ? $_POST['oauth_token_secret'] : null;

			if ( 'success' === $tw_status && $tw_oauth_token && $tw_oauth_token_secret ) {
				set_transient( 'powerkit_connect_twitter_app_user_id', $tw_user_id, 0 );
				set_transient( 'powerkit_connect_twitter_app_screen_name', $tw_screen_name, 0 );
				set_transient( 'powerkit_connect_twitter_app_oauth_token', $tw_oauth_token, 0 );
				set_transient( 'powerkit_connect_twitter_app_oauth_token_secret', $tw_oauth_token_secret, 0 );

				$this->location_reset_cache( 'twitter' );
			}
		}

		// Notice.
		if ( isset( $tw_status ) && isset( $tw_content ) && 'success' === $tw_status ) {
			?>
				<div class="notice notice-success is-dismissible"><p><?php echo esc_html( wp_unslash( $tw_content ) ); ?></p></div>
			<?php
		} elseif ( isset( $tw_status ) && isset( $tw_content ) && 'error' === $tw_status ) {
			?>
				<div class="notice notice-error is-dismissible"><p><?php echo esc_html( wp_unslash( $tw_content ) ); ?></p></div>
			<?php
		}
		?>

		<?php
		// Display information or sign buttons.
		if ( powerkit_connect( 'powerkit_connect_twitter_app_oauth_token' ) ) {
			?>

			<br><h3><?php esc_html_e( 'Twitter Account', 'powerkit' ); ?></h3>

			<p><span class="tab-badge-success"><?php esc_html_e( '✓ Account', 'powerkit' ); ?> (<a href="https://twitter.com/<?php echo esc_attr( powerkit_connect( 'twitter_app_screen_name' ) ); ?>" target="_blank"><?php echo esc_attr( powerkit_connect( 'twitter_app_screen_name' ) ); ?></a>) <?php esc_html_e( 'successfully connected', 'powerkit' ); ?></span></p>

			<p><?php esc_html_e( 'Your Twitter User ID:', 'powerkit' ); ?> <code><?php echo esc_attr( powerkit_connect( 'twitter_app_screen_name' ) ); ?></code> <?php esc_html_e( 'Please use this ID in settings when requested.', 'powerkit' ); ?></p>

			<form method="post" class="form-logout">
				<?php wp_nonce_field(); ?>

				<input type="hidden" name="logout_account_type" value="twitter">

				<p class="submit">
					<input class="button button-primary" name="logout_account" type="submit" value="<?php esc_html_e( 'Disconnect', 'powerkit' ); ?>" />
				</p>
			</form>
		<?php } else { ?>
				<br><h3><?php esc_html_e( 'Twitter Account', 'powerkit' ); ?></h3>

				<?php
					$app_authorize = add_query_arg( array(
						'state' => rawurlencode( sprintf( '%s&tab=%s', powerkit_get_page_url( $this->slug ), $tab ) ),
					), powerkit_connect( 'twitter_app_url' ) );
				?>

				<a class="button button-primary" href="<?php echo esc_url( $app_authorize ); ?>">
					<?php esc_html_e( 'Connect', 'powerkit' ); ?>
				</a>

				<br><br>
			<?php
		}
	}

	/**
	 * Refresh access token
	 *
	 * @param string $name  The name of access.
	 * @param string $value The value of access.
	 */
	public function access_token_refresh( $name, $value ) {
		if ( ! $value ) {
			return $value;
		}

		if ( 'instagram_app_access_token' === $name ) {
			$data = array();

			// Check refresh trace.
			if ( get_transient( 'powerkit_connect_instagram_app_refresh' ) ) {
				return $value;
			}

			if ( 'business' === powerkit_connect( 'instagram_app_type' ) ) {

				$data = array(
					'access_token' => $value,
					'expires_in'   => '5183944',
				);

			} else {
				$remote_link = add_query_arg( array(
					'grant_type'   => 'ig_refresh_token',
					'access_token' => $value,
				), 'https://graph.instagram.com/refresh_access_token' );

				$response = wp_safe_remote_get( $remote_link, array(
					'timeout' => 3,
				) );

				$response = wp_remote_retrieve_body( $response );

				$data = json_decode( $response, true );
			}

			// Update settings.
			if ( isset( $data['access_token'] ) && isset( $data['expires_in'] ) ) {
				set_transient( 'powerkit_connect_instagram_app_access_token', $data['access_token'], $data['expires_in'] );
				set_transient( 'powerkit_connect_instagram_app_type', get_transient( 'powerkit_connect_instagram_app_type' ), $data['expires_in'] );
				set_transient( 'powerkit_connect_instagram_app_user_id', get_transient( 'powerkit_connect_instagram_app_user_id' ), $data['expires_in'] );
				set_transient( 'powerkit_connect_instagram_app_username', get_transient( 'powerkit_connect_instagram_app_username' ), $data['expires_in'] );
				set_transient( 'powerkit_connect_instagram_app_refresh', true, WEEK_IN_SECONDS );
			}
		}

		if ( 'facebook_app_access_token' === $name ) {
			// Check refresh trace.
			if ( get_transient( 'powerkit_connect_facebook_app_refresh' ) ) {
				return $value;
			}

			set_transient( 'powerkit_connect_facebook_app_access_token', $value, '5183944' );
			set_transient( 'powerkit_connect_facebook_app_accounts', get_transient( 'powerkit_connect_facebook_app_accounts' ), '5183944' );
			set_transient( 'powerkit_connect_facebook_app_refresh', true, WEEK_IN_SECONDS );
		}

		return $value;
	}

	/**
	 * Logout account
	 *
	 * @since 1.0.0
	 */
	public function logout_account() {
		if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'] ) ) { // Input var ok; sanitization ok.
			return;
		}

		if ( isset( $_POST['logout_account'] ) ) { // Input var ok.

			// Logout Instagram.
			if ( isset( $_POST['logout_account_type'] ) && 'instagram' === $_POST['logout_account_type'] ) {
				delete_transient( 'powerkit_connect_instagram_app_type' );
				delete_transient( 'powerkit_connect_instagram_app_access_token' );
				delete_transient( 'powerkit_connect_instagram_app_user_id' );
				delete_transient( 'powerkit_connect_instagram_app_username' );
			}

			// Logout Facebook.
			if ( isset( $_POST['logout_account_type'] ) && 'facebook' === $_POST['logout_account_type'] ) {
				delete_transient( 'powerkit_connect_facebook_app_access_token' );
				delete_transient( 'powerkit_connect_facebook_app_accounts' );
			}

			// Logout Facebook.
			if ( isset( $_POST['logout_account_type'] ) && 'twitter' === $_POST['logout_account_type'] ) {
				delete_transient( 'powerkit_connect_twitter_app_user_id' );
				delete_transient( 'powerkit_connect_twitter_app_screen_name' );
				delete_transient( 'powerkit_connect_twitter_app_oauth_token' );
				delete_transient( 'powerkit_connect_twitter_app_oauth_token_secret' );
			}

			if ( isset( $_POST['logout_account_type'] ) ) {
				$this->location_reset_cache( $_POST['logout_account_type'] );
			}

			printf( '<div id="message" class="updated fade"><p><strong>%s</strong></p></div>', esc_html__( 'Account disabled successfully.', 'powerkit' ) );
		}
	}

	/**
	 * Tab reset cache
	 *
	 * @param string $slug Slug of tab.
	 */
	public function location_reset_cache( $slug ) {

		// Base.
		$list = array(
			'powerkit_social_follow',
			'powerkit_social_links_counter',
		);

		// Instagram.
		if ( 'instagram' === $slug ) {
			$list = array_merge( $list, array(
				'powerkit_instagram_data',
				'powerkit_instagram_recent',
			) );

		}

		// Twitter.
		if ( 'twitter' === $slug ) {
			$list = array_merge( $list, array(
				'powerkit_twitter_data',
				'powerkit_twitter_block_cache',
				'powerkit_twitter_shortcode_cache',
				'powerkit_twitter_widget_cache',
			) );
		}

		self::reset_cache( $list );
	}

	/**
	 * User reset cache
	 *
	 * @param bool $forcibly Force clear the cache.
	 */
	public function user_reset_cache( $forcibly = false ) {
		if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'] ) ) { // Input var ok; sanitization ok.
			return;
		}

		if ( isset( $_POST['powerkit_reset_cache'] ) ) { // Input var ok.
			self::reset_cache();
		}
	}

	/**
	 * Settings save
	 */
	public function save_options_page() {
		if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'] ) ) { // Input var ok; sanitization ok.
			return;
		}

		if ( isset( $_POST['save_settings'] ) ) { // Input var ok.
			// Save social params.
			$connect_list = apply_filters( 'powerkit_register_connect_list', array() );
			foreach ( $connect_list as $item ) {
				$id = $item['id'];
				if ( isset( $item['fields'] ) && $item['fields'] ) {
					foreach ( $item['fields'] as $field ) {
						if ( isset( $_POST[ $field['key'] ] ) ) { // Input var ok.
							update_option( $field['key'], sanitize_text_field( wp_unslash( $_POST[ $field['key'] ] ) ) ); // Input var ok.
						}
					}
				}
			}

			self::reset_cache();

			printf( '<div id="message" class="updated fade"><p><strong>%s</strong></p></div>', esc_html__( 'The settings are saved.', 'powerkit' ) );
		}

		if ( isset( $_POST['save_instagram_settings'] ) ) { // Input var ok.
			// Custom fields.
			if ( isset( $_POST['powerkit_connect_instagram_following'] ) ) { // Input var ok.
				update_option( 'powerkit_connect_instagram_following', sanitize_text_field( wp_unslash( $_POST['powerkit_connect_instagram_following'] ) ) ); // Input var ok.
			}
			if ( isset( $_POST['powerkit_connect_instagram_custom_followers'] ) ) { // Input var ok.
				update_option( 'powerkit_connect_instagram_custom_followers', sanitize_text_field( wp_unslash( $_POST['powerkit_connect_instagram_custom_followers'] ) ) ); // Input var ok.
			}
			if ( isset( $_POST['powerkit_connect_instagram_custom_name'] ) ) { // Input var ok.
				update_option( 'powerkit_connect_instagram_custom_name', sanitize_text_field( wp_unslash( $_POST['powerkit_connect_instagram_custom_name'] ) ) ); // Input var ok.
			}
			if ( isset( $_POST['powerkit_connect_instagram_custom_avatar'] ) ) { // Input var ok.
				update_option( 'powerkit_connect_instagram_custom_avatar', sanitize_text_field( wp_unslash( $_POST['powerkit_connect_instagram_custom_avatar'] ) ) ); // Input var ok.
			}

			$this->location_reset_cache( 'instagram' );

			printf( '<div id="message" class="updated fade"><p><strong>%s</strong></p></div>', esc_html__( 'The settings are saved.', 'powerkit' ) );
		}
	}

	/**
	 * Register the stylesheets and JavaScript for the admin area.
	 *
	 * @param string $page Current page.
	 */
	public function enqueue_scripts( $page ) {
		if ( is_customize_preview() || 'toplevel_page_powerkit_manager' === $page ) {

			wp_enqueue_script( 'admin-powerkit-connect', plugin_dir_url( __FILE__ ) . 'js/admin-powerkit-connect.js', array( 'jquery' ), powerkit_get_setting( 'version' ), false );

			wp_localize_script( 'admin-powerkit-connect', 'pk_connect', array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
			) );
		}
	}

	/**
	 * Ajax Reset cache
	 */
	public function ajax_reset_cache() {
		wp_verify_nonce( null );

		$list = apply_filters( 'powerkit_ajax_reset_cache', array() );

		if ( ! isset( $_POST['page'] ) ) { // Input var ok.
			return false;
		}

		$page = sanitize_key( $_POST['page'] ); // Input var ok; sanitization ok.

		if ( ! isset( $list[ $page ] ) ) {
			return false;
		}

		self::reset_cache( $list[ $page ] );

		die();
	}

	/**
	 * Reset cache
	 *
	 * @param array $list Reset list.
	 */
	public static function reset_cache( $list = false ) {
		if ( is_array( $list ) ) {

			$list = $list;

		} elseif ( is_string( $list ) && $list ) {

			$list = explode( ' ', $list );

		} else {
			$list = apply_filters( 'powerkit_reset_cache', array() );

			$puck = array();

			foreach ( $list as $item ) {
				if ( is_array( $item ) ) {
					$puck = array_merge( $puck, $item );
				} elseif ( is_string( $item ) ) {
					$puck = array_merge( $puck, explode( ' ', $item ) );
				}
			}

			$list = $puck;
		}

		if ( $list ) {
			global $wpdb;

			foreach ( $list as $option_name ) {
				$wpdb->query( $wpdb->prepare( "DELETE FROM $wpdb->options WHERE option_name LIKE '%%%s%%'", $option_name ) ); // db call ok; no-cache ok.
				$wpdb->query( $wpdb->prepare( "DELETE FROM $wpdb->postmeta WHERE meta_key LIKE '%%%s%%'", $option_name ) ); // db call ok; no-cache ok.
			}

			printf( '<div id="message" class="updated fade"><p><strong>%s</strong></p></div>', esc_html__( 'Cache purged.', 'powerkit' ) );
		}
	}
}

new Powerkit_Connect();
