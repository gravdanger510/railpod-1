<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );
//test if all options are empty so we can display default text if they are
$empty     = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
$emtpy_cta = ( empty( $responsive_options['cta_text'] ) ) ? false : true;

?>

<div id="featured" class="grid col-940">

	<div id="featured-content" class="grid col-460">

		<h1 class="featured-title">
			<?php
			if( isset( $responsive_options['home_headline'] ) && $db && $empty )
				echo $responsive_options['home_headline'];
			else {
				_e( 'RailPod', 'responsive' );
			}
			?>
		</h1>

		<h2 class="featured-subtitle">
			<?php
			if( isset( $responsive_options['home_subheadline'] ) && $db && $empty )
				echo $responsive_options['home_subheadline'];
			else
				_e( 'Your subheadline here', 'responsive' );
			?>
		</h2>

		<?php
		if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {
			echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
		} else {
			echo '<p>' . __( 'Here we will add content describing the product in a line or two.' ) . '</p>';
		} ?>


		<?php if( $responsive_options['cta_button'] == 0 ): ?>


		<?php endif; ?>

	</div><!-- end of .col-460 -->

</div><!-- end of #featured -->