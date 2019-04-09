<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome Icons -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css" rel="stylesheet">
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		body{
			margin-bottom: 0px !important;
			margin-top: 50px !important;
		}
	</style>

</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'testtheme' ); ?></a> 

		<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
							<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
							<li><a href="<?php echo esc_url( home_url( '/resources' ) ); ?>">Resources</a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		
		</div>
	</header>

	<div id="content" class="site-content">
