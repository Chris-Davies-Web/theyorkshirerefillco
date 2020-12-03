<?php 

/**
 * Fany Lab Theme Customizer
 *
 * @package The Yorkshire Refill Company
 */

function the_yorkshire_refill_co_customizer( $wp_customize ){

// Customizer config

// Homepage
require_once get_template_directory() . '/inc/customiser-pages/homepage/config.php';

// About
require_once get_template_directory() . '/inc/customiser-pages/about/config.php';

// How We Work
require_once get_template_directory() . '/inc/customiser-pages/how-we-work/config.php';

// Our Brands
require_once get_template_directory() . '/inc/customiser-pages/our-brands/config.php';

}
add_action( 'customize_register', 'the_yorkshire_refill_co_customizer' );

function the_yorkshire_refill_co_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}