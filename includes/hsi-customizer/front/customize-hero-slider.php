<?php 
$wp_customize->add_section( 'hsi_hero_slider_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'Hero Slider', 'hsi' ),
	'description'           => __( 'Hero slider section', 'hsi' ),
	'panel'                 => 'hsi_front_option'
) );

$wp_customize->add_setting( 'hsi_hero_slider',
  array(
    'default'           => '',
    'sanitize_callback'     => 'hsi_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'hsi_hero_slider',
  array(
    'label'         => esc_html__( 'Show Hero Slider', 'hsi' ),
    'section'       => 'hsi_hero_slider_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Content
for ($i=1;$i<=3;$i++) {
	$wp_customize->add_setting('hsi_hero_slider_image_' . $i, array(
        'transport'         => 'refresh',
        'width'         => 1200,
        'height'         => 385,
        'sanitize_callback'     => 'hsi_sanitize_image'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hsi_hero_slider_image_' . $i, array(
        'label'             => sprintf(__('Upload image %s', 'hsi'), $i),
        'section'           => 'hsi_hero_slider_section',
        'settings'          => 'hsi_hero_slider_image_' . $i,
    )));

	// text
	$wp_customize->add_setting( 'hsi_slider_main_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'hsi_slider_main_title_'.$i, array(
	    'label'                 =>  sprintf( __( 'Slider main heading %s', 'hsi' ), $i ),
	    'section'               => 'hsi_hero_slider_section',
	    'type'                  => 'textarea',
	    'description'           => sprintf( esc_html__( 'Type slider heading title, content you can add/edit from selected page content.', 'hsi' )),
	    'settings' => 'hsi_slider_main_title_'.$i,
	) );

	// text
	$wp_customize->add_setting( 'hsi_slider_main_paragraph_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'hsi_slider_main_paragraph_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider main paragraph %s', 'hsi' ), $i ),
	    'section'               => 'hsi_hero_slider_section',
	    'type'                  => 'textarea',
	    'description'           => sprintf( esc_html__( 'Type Desription title, content you can add/edit from selected page content.', 'hsi' )),
	    'settings' => 'hsi_slider_main_paragraph_'.$i,
	) );
	
	// text
	$wp_customize->add_setting( 'hsi_slider_button_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'hsi_slider_button_title_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider button text %s', 'hsi' ), $i ),
	    'section'               => 'hsi_hero_slider_section',
	    'type'                  => 'text',
	    'settings' => 'hsi_slider_button_title_'.$i,
	) );
	
	// btn URl From
	$wp_customize->add_setting( 'hsi_slider_button_url_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( 'hsi_slider_button_url_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider button URL  %s', 'hsi' ), $i ),
	    'section'               => 'hsi_hero_slider_section',
	    'type'                  => 'url',
	    'settings' => 'hsi_slider_button_url_'.$i,
	) );
	
}