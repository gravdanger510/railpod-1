<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Railpod
 * @author         Delmar Senties
 * @filesource     wp-content/themes/responsive/header.php
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>

<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="/wp-content/themes/railpod/core/images/favicon.png" />
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>

		<?php responsive_in_header(); // header hook ?>

		<div id="logo_nav">
			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>">
					<img src="/wp-content/themes/railpod/core/images/railpod_logo.png" />
				</a>
			</div><!-- end of #logo -->
			<ul id="nav">
				<li id="nav1">
					<a href="#">First</a>
					<ul>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
					</ul>
				</li>
				<li id="nav2">
					<a href="#">Second</a>
					<ul>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
					</ul>
				</li>
				<li id="nav3">
					<a href="#">Third</a>
					<ul>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
						<li>
							<a href="#">Subnav item</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div><!-- /#logo_nav -->
		

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>