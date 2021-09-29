<?php
$wp_customize->add_section('bs_project_section', array(
  'capability'            => 'edit_theme_options',
  'priority'              => 1,
  'title'                 => __('Project 1st', 'bs'),
  'description'           => __('Project section 1st', 'bs'),
  'panel'                 => 'bs_front_option'
));

$wp_customize->add_setting(
  'bs_project',
  array(
    'default'           => '',
    'sanitize_callback'     => 'bs_sanitize_checkbox'
  )
);

$wp_customize->add_control(
  'bs_project',
  array(
    'label'         => esc_html__('Show Project 1st', 'bs'),
    'section'       => 'bs_project_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Content
// Type
$wp_customize->add_setting('bs_project_icon_type', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('bs_project_icon_type', array(
  'label'                 => sprintf(__('Icon Type', 'bs')),
  'description'           => sprintf(esc_html__('Use font iconify icon, Eg: la:hammer ', 'bs')),
  'section'               => 'bs_project_section',
  'type'                  => 'text',
  'settings' => 'bs_project_icon_type',
));

$wp_customize->add_setting('bs_project_text_type', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_text_type', array(
  'label'                 =>  __('Text Type', 'bs'),
  'section'               => 'bs_project_section',
  'type'                  => 'text',
  'settings'              => 'bs_project_text_type',
));


// Title

$wp_customize->add_setting('bs_project_logo', array(
  'transport'         => 'refresh',
  'width'         => 250,
  'height'         => 250,
  'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_project_logo', array(
  'label'             => __('Image Logo ', 'bs'),
  'section'           => 'bs_project_section',
  'settings'          => 'bs_project_logo',
)));


$wp_customize->add_setting('bs_project_text_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_text_title', array(
  'label'                 =>  __('Text Title', 'bs'),
  'section'               => 'bs_project_section',
  'type'                  => 'text',
  'settings'              => 'bs_project_text_title',
));


$wp_customize->add_setting('bs_project_paragraph', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_paragraph', array(
  'label'                 =>  __('Text Subtitle', 'bs'),
  'section'               => 'bs_project_section',
  'type'                  => 'textarea',
  'settings'              => 'bs_project_paragraph',
));


// Project Aplication
$bs_project_array = array(
  '1' => 'carbon:delivery-truck',
  '2' => 'fluent:food-16-regular',
  '3' => 'simple-line-icons:energy',
  '4' => 'la:hammer',
  '5' => 'la:oil-can',
  '6' => 'la:oil-can',
);
foreach ($bs_project_array as $bs_key => $bs_project) {
  $wp_customize->add_setting('bs_project_icon_' . $bs_key, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ));

  $wp_customize->add_control('bs_project_icon_' . $bs_key, array(
    'label'                 => sprintf(__('%1$s. Icon Aplication', 'bs'), $bs_key),
    'description'           => sprintf(__('Use font iconify icon: Eg: %1$s ( %2$s See more here %3$s )', 'bs'), $bs_project, '<a href="' . esc_url('https://icon-sets.iconify.design/') . '">', '</a>'),
    'section'               => 'bs_project_section',
    'type'                  => 'text',
    'settings' => 'bs_project_icon_' . $bs_key,
  ));
}


// Button CTA
$wp_customize->add_setting('bs_project_text_cta', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_text_cta', array(
  'label'                 =>  __('Text Button CTA ', 'bs'),
  'section'               => 'bs_project_section',
  'type'                  => 'text',
  'settings'              => 'bs_project_text_cta',
));


$wp_customize->add_setting('bs_project_link_cta', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'esc_url_raw'
));

$wp_customize->add_control('bs_project_link_cta', array(
  'label'                 =>  __('Url Button CTA', 'bs'),
  'section'               => 'bs_project_section',
  'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs')),
  'type'                  => 'url',
  'settings' => 'bs_project_link_cta',
));
// End Button CTA

// Img Right 
$wp_customize->add_setting('bs_project_image_right', array(
  'transport'         => 'refresh',
  'width'         => 550,
  'height'         => 740,
  'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_project_image_right', array(
  'label'             => __('Image Right ', 'bs'),
  'section'           => 'bs_project_section',
  'settings'          => 'bs_project_image_right',
)));
//End Img Right 
