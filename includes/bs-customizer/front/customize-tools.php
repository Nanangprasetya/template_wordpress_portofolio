<?php
$wp_customize->add_section('bs_tools_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 1,
    'title'                 => __('Aplications and tools', 'bs'),
    'description'           => __('Aplications and tools section', 'bs'),
    'panel'                 => 'bs_front_option'
));

$wp_customize->add_setting(
    'bs_tools',
    array(
        'default'           => '',
        'sanitize_callback'     => 'bs_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'bs_tools',
    array(
        'label'         => esc_html__('Show Aplications and tools', 'bs'),
        'section'       => 'bs_tools_section',
        'type'          => 'checkbox',
        'priority'      => 1,
    )
);

// Content
// Image

$wp_customize->add_setting('bs_tools_text_top', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_tools_text_top', array(
    'label'                 => sprintf(__('Text Top', 'bs')),
    'section'               => 'bs_tools_section',
    'type'                  => 'text',
    'settings'              => 'bs_tools_text_top',
));


for ($i = 1; $i <= 12; $i++) {
    $wp_customize->add_setting('bs_tools_logo_' . $i, array(
        'transport'         => 'refresh',
        'width'         => 250,
        'height'         => 250,
        'sanitize_callback'     => 'bs_sanitize_image'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_tools_logo_' . $i, array(
        'label'             => sprintf(__('%s. Image Logo ', 'bs'), $i),
        'section'           => 'bs_tools_section',
        'settings'          => 'bs_tools_logo_' . $i,
    )));


    $wp_customize->add_setting('bs_tools_text_title_' . $i, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control('bs_tools_text_title_' . $i, array(
        'label'             => sprintf(__('%s. Text Title ', 'bs'), $i),
        'section'               => 'bs_tools_section',
        'type'                  => 'text',
        'settings'              => 'bs_tools_text_title_' . $i,
    ));


    $wp_customize->add_setting('bs_tools_paragraph_' . $i, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control('bs_tools_paragraph_' . $i, array(
        'label'                 => sprintf(__('%s. Text Subtitle ', 'bs'), $i),
        'section'               => 'bs_tools_section',
        'type'                  => 'textarea',
        'settings'              => 'bs_tools_paragraph_' . $i,
    ));
}
