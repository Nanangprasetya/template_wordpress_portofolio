<?php
$wp_customize->add_section('bs_project_2_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 1,
    'title'                 => __('Project 3rd', 'bs'),
    'description'           => __('Project section 3rd', 'bs'),
    'panel'                 => 'bs_front_option'
));

$wp_customize->add_setting(
    'bs_project_2',
    array(
        'default'           => '',
        'sanitize_callback'     => 'bs_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'bs_project_2',
    array(
        'label'         => esc_html__('Show Project 3rd', 'bs'),
        'section'       => 'bs_project_2_section',
        'type'          => 'checkbox',
        'priority'      => 1,
    )
);

// Content
// Type
$wp_customize->add_setting('bs_project_2_icon_type', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('bs_project_2_icon_type', array(
    'label'                 => sprintf(__('Icon Type', 'bs')),
    'description'           => sprintf(esc_html__('Use font iconify icon, Eg: la:hammer ', 'bs')),
    'section'               => 'bs_project_2_section',
    'type'                  => 'text',
    'settings' => 'bs_project_2_icon_type',
));

$wp_customize->add_setting('bs_project_2_text_type', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_2_text_type', array(
    'label'                 =>  __('Text Type', 'bs'),
    'section'               => 'bs_project_2_section',
    'type'                  => 'text',
    'settings'              => 'bs_project_2_text_type',
));


// Title

$wp_customize->add_setting('bs_project_2_logo', array(
    'transport'         => 'refresh',
    'width'         => 250,
    'height'         => 250,
    'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_project_2_logo', array(
    'label'             => __('Image Logo ', 'bs'),
    'section'           => 'bs_project_2_section',
    'settings'          => 'bs_project_2_logo',
)));


$wp_customize->add_setting('bs_project_2_text_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_2_text_title', array(
    'label'                 =>  __('Text Title', 'bs'),
    'section'               => 'bs_project_2_section',
    'type'                  => 'text',
    'settings'              => 'bs_project_2_text_title',
));


$wp_customize->add_setting('bs_project_2_paragraph', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_2_paragraph', array(
    'label'                 =>  __('Text Subtitle', 'bs'),
    'section'               => 'bs_project_2_section',
    'type'                  => 'textarea',
    'settings'              => 'bs_project_2_paragraph',
));


// Project Aplication
$bs_project_2_array = array(
    '1' => 'carbon:delivery-truck',
    '2' => 'fluent:food-16-regular',
    '3' => 'simple-line-icons:energy',
    '4' => 'la:hammer',
    '5' => 'la:oil-can',
    '6' => 'la:oil-can',
);
foreach ($bs_project_2_array as $bs_key => $bs_project_2) {
    $wp_customize->add_setting('bs_project_2_icon_' . $bs_key, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control('bs_project_2_icon_' . $bs_key, array(
        'label'                 => sprintf(__('%1$s. Icon Aplication', 'bs'), $bs_key),
        'description'           => sprintf(__('Use font iconify icon: Eg: %1$s ( %2$s See more here %3$s )', 'bs'), $bs_project_2, '<a href="' . esc_url('https://icon-sets.iconify.design/') . '">', '</a>'),
        'section'               => 'bs_project_2_section',
        'type'                  => 'text',
        'settings' => 'bs_project_2_icon_' . $bs_key,
    ));
}


// Button CTA
$wp_customize->add_setting('bs_project_2_text_cta', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_project_2_text_cta', array(
    'label'                 =>  __('Text Button CTA ', 'bs'),
    'section'               => 'bs_project_2_section',
    'type'                  => 'text',
    'settings'              => 'bs_project_2_text_cta',
));


$wp_customize->add_setting('bs_project_2_link_cta', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
));

$wp_customize->add_control('bs_project_2_link_cta', array(
    'label'                 =>  __('Url Button CTA', 'bs'),
    'section'               => 'bs_project_2_section',
    'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs')),
    'type'                  => 'url',
    'settings' => 'bs_project_2_link_cta',
));
// End Button CTA

// Img Right 
$wp_customize->add_setting('bs_project_2_image_right', array(
    'transport'         => 'refresh',
    'width'         => 550,
    'height'         => 740,
    'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_project_2_image_right', array(
    'label'             => __('Image Right ', 'bs'),
    'section'           => 'bs_project_2_section',
    'settings'          => 'bs_project_2_image_right',
)));
//End Img Right 
