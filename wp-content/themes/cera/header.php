<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cera
 */

$user = wp_get_current_user();
$url = site_url();
if($user->roles[0] == '')
 {
 	wp_redirect($url);
 } 
 //print_r($user);

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>">
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
	<meta name="theme-color" content="<?php echo esc_attr( apply_filters( 'cera_theme_color', '#ffffff' ) ); ?>">
	<meta name="msapplication-TileColor" content="<?php echo esc_attr( apply_filters( 'cera_theme_color', '#ffffff' ) ); ?>">

	<link rel="profile" href="<?php echo esc_url( 'http' . ( is_ssl() ? 's' : '' ) . '://gmpg.org/xfn/11' ); ?>">

	<!-- Icons -->
	<?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) : ?>
		<link rel="apple-touch-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/apple-touch-icon.png' ); ?>" sizes="180x180"/>
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/favicon-32x32.png' ); ?>" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/favicon-16x16.png' ); ?>" sizes="16x16">
		<link rel="manifest" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/site.webmanifest' ); ?> ">
		<link rel="mask-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icons/safari-pinned-tab.svg' ); ?>" color="#000000">
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<style type="text/css">
	#custom_header {
		background-color: #3d404a !important;
	}
	.btn-primary {
		background-color: #3d404a !important;
	}
	.search-icon {
		display: none !important;
	}
	body:not(.grimlock) .site-footer .region__inner {
		background-color: #0F0F10 !important;
	}
	
.site-content {
	min-height: 530px !important;
}
.menu-item--register {
	display: none !important;
}
</style>
<body <?php body_class(); ?>>

<?php cera_body_open(); ?>

<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to main content', 'cera' ); ?></a>

<div id="site-wrapper">
	<?php
	/**
	 * Functions hooked into cera_before_site action
	 *
	 * @hooked cera_grimlock_before_site - 10
	 */
	do_action( 'cera_before_site' ); ?>
	

	<div id="site">




		<?php
		/**
		 * Functions hooked into cera_header action
		 *
		 * @hooked cera_header                  - 10
		 * @hooked cera_grimlock_header         - 10
		 * @hooked cera_grimlock_before_content - 20
		 */
		do_action( 'cera_header' ); ?>

