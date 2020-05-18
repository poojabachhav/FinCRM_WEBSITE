<?php
/**
 * The template part for displaying large header layout.
 *
 * @package Squaretype
 */

?>

<?php $class = get_theme_mod( 'header_shadow_submenus', false ) ? 'navbar-shadow-enabled' : null; ?>

<?php
$color_topbar_bg    = strtoupper( get_theme_mod( 'color_large_header_bg', '#FFFFFF' ) );
$color_bottombar_bg = strtoupper( get_theme_mod( 'color_navbar_bg', '#FFFFFF' ) );

$scheme_topbar    = csco_light_or_dark( $color_topbar_bg, null, ' cs-bg-navbar-dark' );
$scheme_bottombar = csco_light_or_dark( $color_bottombar_bg, null, ' cs-bg-navbar-dark' );

// If the background color in the bars is different.
if ( $color_topbar_bg !== $color_bottombar_bg ) {
	$scheme_topbar .= ' navbar-multicolor';
}
?>

<div class="navbar navbar-topbar <?php echo esc_attr( $class ); ?>">

	<div class="navbar-wrap <?php echo esc_attr( $scheme_topbar ); ?>">

		<div class="row navbar-container">

			<div class="col-lg-12 navbar-content">

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_topbar_left' ); ?>
					<img src='http://localhost:8080/FinCRM_WEBSITE/assets/images/logo1.png' height="40" width="140.78"/>
				</div>

				<div class="col-lg-8 navbar-col dropdown_color">
					<?php do_action( 'csco_navbar_topbar_center' ); ?>
				</div>

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_topbar_left' ); ?>
					<button class="sign_btn sign_color">
						Sign In
					</button><?php do_action( 'csco_navbar_topbar_right' ); ?>
					
				</div>
			</div>

		</div>

	</div>

</div>

<nav class="navbar navbar-primary navbar-bottombar <?php echo esc_attr( $class ); ?>">

	<?php do_action( 'csco_navbar_start' ); ?>

	<div class="navbar-wrap <?php echo esc_attr( $scheme_bottombar ); ?>">

		<div class="row navbar-container">

			<div class="col-lg-12 navbar-content">

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_bottombar_left' ); ?>
				</div>

				<div class="col-lg-8 navbar-col">
					<?php do_action( 'csco_navbar_bottombar_center' ); ?>
				</div>

				<div class="col-lg-2 navbar-col">
					<?php do_action( 'csco_navbar_topbar_left' ); ?>
					<?php do_action( 'csco_navbar_bottombar_right' ); ?>
				</div>

			</div><!-- .navbar-content -->

		</div><!-- .navbar-container -->

	</div><!-- .navbar-wrap -->

	<?php do_action( 'csco_navbar_end' ); ?>

</nav><!-- .navbar -->
