<?php
/**
 * Exbico Theme Customizer
 *
 * @package hsi
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


// Sanitize
require trailingslashit( get_template_directory() ) . '/includes/sanitize.php'; 

//  Hsi Theme Settings Customizer Front
add_action( 'customize_register', 'hsi_register_customizer_front' );
function hsi_register_customizer_front( $wp_customize ) {
$wp_customize->add_panel( 'hsi_front_option', array(
	'priority'               => 2,
	'capability'             => 'edit_theme_options',
	'title'                  => __( 'HSI: Front Page', 'hsi' ),
	'description'            => __( 'Hsi sections & theme options', 'hsi' ),
) );  

// Load Options
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-hero-slider.php';
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-about.php';
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-service.php';
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-service-other.php';
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-product.php';
require trailingslashit( get_template_directory() ) . '/includes/hsi-customizer/front/customize-contact.php';
}