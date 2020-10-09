<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 template Name:Login
 * @package WordPress
 * 
 */

//get_header();

$user = wp_get_current_user();
$url = site_url().'/home';
if($user->roles[0] == "subscriber" )
 {
 	wp_redirect($url);
 }


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

	<?php wp_head(); ?>
</head>

<script type="text/javascript">
	jQuery(document).ready(function(){
		if(window.location.href.indexOf("logout=true")>-1)
		{
			window.location.href = "https://login.windows.net/05ae0207-0ae4-44d8-9e14-6e6aed27db0b/oauth2/logout?post_logout_redirect_uri=https://opengateanalytics.com/";
		}
 
});
</script>

<?php $background_image = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
<body <?php body_class(); ?> id="login-page-body" style="background-image: url('<?php echo $background_image; ?>')" >

<?php cera_body_open(); ?>

<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to main content', 'cera' ); ?></a>


	
<div  id="site-wrapper" >
	<?php
	/**
	 * Functions hooked into cera_before_site action
	 *
	 * @hooked cera_grimlock_before_site - 10
	 */
	//do_action( 'cera_before_site' ); ?>
	

	<div id="site">
<?php
		/**
		 * Functions hooked into cera_header action
		 *
		 * @hooked cera_header                  - 10
		 * @hooked cera_grimlock_header         - 10
		 * @hooked cera_grimlock_before_content - 20
		 */
		//do_action( 'cera_header' ); ?>

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
	body:not(.grimlock).slideout-mini.grimlock--navigation-fixed-left .vertical-navbar a, body:not(.grimlock).slideout-mini.grimlock--navigation-fixed-right .vertical-navbar a {
    color: #fff !important;
}
.site-content {
	min-height: 530px !important;
}
.menu-item--register {
	display: none !important;
}
.grimlock--navigation-fixed-left #site {
     margin-left: 02px;
}
.grimlock--navigation-fixed-left.grimlock--navigation-fixed .hamburger-navbar {
    left: 2px !important;
}
</style>


<style type="text/css">
	input[type="text"] {
		width: 50% !important;
	}
	.widget-area .sidebar .region__col .region__col--3 {
		display: none !important;
	}
	#secondary-right {
		display: none !important;
	}
	button#navbar-toggler {
    display: none;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="login-wrap">
				<div class="inner-login">
				<div class="heading-block mb-6">
						<h2 class="white-text">OpenGate Capital Portfolio Analytics</h2>
						<h5 class="white-text"><i>
							Data • Insight • Action
					</i></h5>
						<?php echo get_sidebar(); ?>
				</div>
				<div class="mb-2">
					<button onclick="moOAuthLoginNew('OpenGateCapital');" class="btn btn-custom mb-2 mr-5"><span>Portfolio Login</span></button>
					<button onclick="window.location.href='https://opengatecapital.com/'" class="btn btn-custom mb-2"><span>OpenGate Home</span></button>
				</div>
			</div>
			</div>



				<!-- <a style="text-decoration:none" href="javascript:void(0)" onclick="moOAuthLoginNew('OpenGateCapital');" class="btn btn-primary">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a href="#" class="btn btn-primary">Learn More</a> -->
			
		</div>
	</div>
</div>
<?php  get_footer(); ?> 
