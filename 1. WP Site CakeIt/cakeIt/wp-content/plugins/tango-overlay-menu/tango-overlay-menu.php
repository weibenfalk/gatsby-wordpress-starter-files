<?php
/**
 * Plugin Name: Tango Overlay Menu
 * Plugin URI: http://weibenfalk.com
 * Description: Creates a mobile overlaymenu for the Tango Brand Alliance website
 * Version: 1.0
 * Author: Thomas Weibenfalk
 * Author URI: http://weibenfalk.com
 */

function wbn_overlay_register_stylesheet(){
	wp_register_style( 'wbn_overlay_stylesheet', plugins_url( '/styles/style.css', __FILE__ ) );
	wp_enqueue_style( 'wbn_overlay_stylesheet' );
}

function wbn_add_script() {
  wp_register_script('wbn_script', plugins_url('scripts/wbn-overlay.js', __FILE__), array('jquery') );
  wp_enqueue_script('wbn_script');
}

// Load the styles
add_action( 'wp_enqueue_scripts', 'wbn_overlay_register_stylesheet' );

// Load the JQuery script
add_action( 'wp_enqueue_scripts', 'wbn_add_script' );

// Initiate the plugin in the footer
add_action( 'wp_footer', 'wbn_overlay_menu' );

function wbn_overlay_menu(){ ?>
	
	<!-- The Div for the overlay menu -->
	<div id="wbn-ovrly-menu">
		<span class="wbn-ovrly-closeButton">
			<img src="/wp-content/themes/tango-brand-alliance/img/tango_close_button.svg">
		</span>

		<div class="wbn-tango-white-logo">
			<a href=" <?php echo get_site_url(); ?> "><img src="/wp-content/themes/tango-brand-alliance/img/logo-inverted.svg"></a>
		</div>

		<nav id="wbn-ovrly-nav" role="navigation">
			<?php wp_nav_menu( array( 'menu' => 'mainMenu' ) ); ?>
		</nav>
	</div>

	<!-- The Span for the hamburger button -->
	<span class="wbn-ovrly-hamburger">
		<img src="/wp-content/themes/tango-brand-alliance/img/tango_heart_hamburger.svg">
	</span>
	
<?php }