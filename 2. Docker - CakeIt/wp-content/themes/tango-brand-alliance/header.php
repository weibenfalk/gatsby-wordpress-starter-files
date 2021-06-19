<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tango_Brand_Alliance
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
		<div id="page" class="site" >
			<nav class="navbar navbar-default navbar-fixed-top" role="banner">
				<header id="masthead" class="site-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="site-branding">
									<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
								</div><!-- .site-branding -->
								<nav id="main-nav" role="navigation">
									<?php wp_nav_menu( array( 'menu' => 'mainMenu' ) ); ?>
								</nav><!-- #site-navigation -->
							</div>
						</div>
					</div>
				</header><!-- #masthead -->
			</nav>
			<div id="content" class="site-content">
