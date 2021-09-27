<?php 
$wp_customize->add_section( 'hsi_product_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'Our Product', 'hsi' ),
	'description'           => __( 'Our Product section', 'hsi' ),
	'panel'                 => 'hsi_front_option'
) );

$wp_customize->add_setting( 'hsi_product',
  array(
    'default'           => '',
    'sanitize_callback'     => 'hsi_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'hsi_product',
  array(
    'label'         => esc_html__( 'Show Our Product', 'hsi' ),
    'section'       => 'hsi_product_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Content
$wp_customize->add_setting( 'hsi_product_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'hsi_product_top_title', array(
    'label'                 =>  __( 'Top Title Text', 'hsi' ),
    'section'               => 'hsi_product_section',
    'type'                  => 'text',
    'settings'              => 'hsi_product_top_title',
) );

$wp_customize->add_setting( 'hsi_product_paragraph', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'hsi_product_paragraph', array(
    'label'                 =>  __( 'Type Subtitle content', 'hsi' ),
    'section'               => 'hsi_product_section',
    'type'                  => 'text',
    'settings'              => 'hsi_product_paragraph',
) );

for ($i=1;$i<=12;$i++) {
	$wp_customize->add_setting('hsi_product_image_' . $i, array(
        'transport'         => 'refresh',
        'width'         => 1200,
        'height'         => 1200,
        'sanitize_callback'     => 'hsi_sanitize_image'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hsi_product_image_' . $i, array(
        'label'             => sprintf(__('Upload image %s', 'hsi'), $i),
        'section'           => 'hsi_product_section',
        'settings'          => 'hsi_product_image_' . $i,
    )));

    $wp_customize->add_setting( 'hsi_product_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'hsi_product_title_'.$i, array(
	    'label'                 =>  sprintf( __( 'Caption Image %s', 'hsi' ), $i ),
	    'section'               => 'hsi_product_section',
	    'type'                  => 'text',
	    'settings' => 'hsi_product_title_'.$i,
	) );
}