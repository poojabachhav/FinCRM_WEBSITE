<?php
/**
 * The template part for displaying default header layout.
 *
 * @package Squaretype
 */

?>

<?php $class = get_theme_mod( 'header_shadow_submenus', false ) ? 'navbar-shadow-enabled' : null; ?>

<?php $scheme = csco_light_or_dark( get_theme_mod( 'color_navbar_bg', '#FFFFFF' ), null, ' cs-bg-navbar-dark' ); ?>

<nav class="navbar navbar-primary <?php echo esc_attr( $class ); ?>">

	<?php do_action( 'csco_navbar_start' ); ?>

	<div class="navbar-wrap <?php echo esc_attr( $scheme ); ?>">

		<div class="row navbar-container">

			<div class="col-lg-12 navbar-content">

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_content_left' ); ?>
					<img src='http://localhost:8080/FinCRM_WEBSITE/assets/images/logo1.png' height="40" width="140.78"/>
				</div>

				<div class="col-lg-8 navbar-col dropdown_color">
					<?php do_action( 'csco_navbar_content_center' ); ?>
				</div>

				<div class="col-lg-2 navbar-col">
					<button class="sign_btn sign_color">
						Sign In
					</button>
					<?php do_action( 'csco_navbar_content_right' ); ?>
					<?php do_action( 'csco_navbar_content_left' ); ?>
				</div>

			</div><!-- .navbar-content -->

		</div><!-- .navbar-container -->
       	<div class="row navbar-container">

			<div class="col-lg-12 navbar-content">

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_content_left' ); ?>
					<img src='http://localhost:8080/FinCRM_WEBSITE/assets/images/logo1.png' height="40" width="140.78"/>
				</div>

				<div class="col-lg-8 navbar-col dropdown_color">
					<?php do_action( 'csco_navbar_content_center' ); ?>
				</div>

				<div class="col-lg-2 navbar-col">
					<button class="sign_btn sign_color">
						Sign In
					</button><br>
	           
				<?php do_action( 'csco_navbar_content_right' ); ?>
					<?php do_action( 'csco_navbar_content_left' ); ?>
					
				</div>

			</div><!-- .navbar-content -->

		</div><!-- .navbar-container -->
	</div><!-- .navbar-wrap -->

	<?php do_action( 'csco_navbar_end' ); ?>

</nav><!-- .navbar -->
