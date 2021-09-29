<?php
/**
 * Exbico Theme Customizer
 *
 * @package bs
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


// Sanitize
require trailingslashit( get_template_directory() ) . '/includes/sanitize.php'; 

//  Hsi Theme Settings Customizer Front
add_action( 'customize_register', 'bs_register_customizer_front' );
function bs_register_customizer_front( $wp_customize ) {
$wp_customize->add_panel( 'bs_front_option', array(
	'priority'               => 2,
	'capability'             => 'edit_theme_options',
	'title'                  => __( 'BISCUIT: Front Page', 'bs' ),
	'description'            => __( 'Biscuit sections & theme options', 'bs' ),
) );  

// Load Options
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-about.php';
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-project.php';
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-project-1.php';
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-project-2.php';
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-project-3.php';
require trailingslashit( get_template_directory() ) . '/includes/bs-customizer/front/customize-tools.php';
}