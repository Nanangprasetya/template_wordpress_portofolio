<?php 
$wp_customize->add_section( 'hsi_about_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'About Us', 'hsi' ),
	'description'           => __( 'About Us section', 'hsi' ),
	'panel'                 => 'hsi_front_option'
) );

$wp_customize->add_setting( 'hsi_about',
  array(
    'default'           => '',
    'sanitize_callback'     => 'hsi_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'hsi_about',
  array(
    'label'         => esc_html__( 'Show About Us', 'hsi' ),
    'section'       => 'hsi_about_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);


// Content
$wp_customize->add_setting( 'hsi_about_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'hsi_about_top_title', array(
    'label'                 =>  __( 'Top Title Text', 'hsi' ),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings'              => 'hsi_about_top_title',
) );


$wp_customize->add_setting( 'hsi_about_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'hsi_about_title', array(
    'label'                 =>  __( 'Type Title content', 'hsi' ),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings'              => 'hsi_about_title',
) );


$wp_customize->add_setting( 'hsi_about_paragraph', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'hsi_about_paragraph', array(
    'label'                 =>  __( 'Type Subtitle content', 'hsi' ),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings'              => 'hsi_about_paragraph',
) );

$wp_customize->add_setting( 'hsi_about_title_list', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'hsi_about_title_list', array(
    'label'                 =>  __( 'Type Title List', 'hsi' ),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings'              => 'hsi_about_title_list',
) );

$wp_customize->add_setting('hsi_about_image', array(
    'transport'         => 'refresh',
    'width'         => 1200,
    'height'         => 385,
	'sanitize_callback'     => 'hsi_sanitize_image'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hsi_about_image', array(
    'label'             => __('Upload image', 'hsi'),
    'section'           => 'hsi_about_section',
    'settings'          => 'hsi_about_image',
)));


// Services Customizer
$hsi_service_array = array(
	'1'=>'carbon:delivery-truck',
	'2'=>'fluent:food-16-regular',
	'3'=>'simple-line-icons:energy',
	'4'=>'la:hammer',
	'5'=>'la:oil-can',
);
foreach ($hsi_service_array as $hsi_key => $hsi_service) {
$wp_customize->add_setting( 'hsi_about_icon_'.$hsi_key, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'hsi_about_icon_'.$hsi_key, array(
    'label'                 => sprintf( __( 'Type icon %1$s', 'hsi' ), $hsi_key),
    'description'           => sprintf( __( 'Use font iconify icon: Eg: %1$s ( %2$s See more here %3$s )', 'hsi' ), $hsi_service,'<a href="'.esc_url('https://icon-sets.iconify.design/').'">','</a>'),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings' => 'hsi_about_icon_'.$hsi_key,
) );

$wp_customize->add_setting( 'hsi_about_list_'.$hsi_key, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'hsi_about_list_'.$hsi_key, array(
    'label'                 =>  sprintf(__( 'Type Title List %1$s', 'hsi' ), $hsi_key),
    'section'               => 'hsi_about_section',
    'type'                  => 'text',
    'settings'              => 'hsi_about_list_'.$hsi_key,
) );
}