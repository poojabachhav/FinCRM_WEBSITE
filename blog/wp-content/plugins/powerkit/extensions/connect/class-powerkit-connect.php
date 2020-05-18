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
		$this->save_options_page();
		$this->user_reset_cache();
		?>

			<div class="wrap">
				<h2><?php esc_html_e( 'Connect', 'powerkit' ); ?></h2>

				<div class="settings">
					<?php $connect_list = apply_filters( 'powerkit_register_connect_list', array() ); ?>

					<?php if ( $connect_list ) : ?>
						<form class="basic" method="post">
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
									if ( $item['id'] === $tab ) { // Input var ok.
									?>
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
								<?php
									}
								}
								?>
							</div>

							<?php wp_nonce_field(); ?>

							<p class="submit">
								<input class="button button-primary" name="save_settings" type="submit" value="<?php esc_html_e( 'Save changes', 'powerkit' ); ?>" />
							</p>
						</form>

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
		<?php
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
			$this->reset_cache( array(
				'powerkit_social_links_counter',
				'powerkit_social_follow',
				'powerkit_data_instagram',
			) );
		}
	}

	/**
	 * Settings save
	 *
	 * @since 1.0.0
	 */
	protected function save_options_page() {
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

			$this->reset_cache( array(
				'powerkit_social_links_counter',
				'powerkit_social_follow',
				'powerkit_data_instagram',
			) );

			printf( '<div id="message" class="updated fade"><p><strong>%s</strong></p></div>', esc_html__( 'The settings are saved.', 'powerkit' ) );
		}
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
}

new Powerkit_Connect();
