<?php
$wp_customize->add_section('hsi_service_other_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 1,
    'title'                 => __('Service Other', 'hsi'),
    'description'           => __('Service Other section', 'hsi'),
    'panel'                 => 'hsi_front_option'
));

$wp_customize->add_setting(
    'hsi_service_other',
    array(
        'default'           => '',
        'sanitize_callback'     => 'hsi_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'hsi_service_other',
    array(
        'label'         => esc_html__('Show Service Other', 'hsi'),
        'section'       => 'hsi_service_other_section',
        'type'          => 'checkbox',
        'priority'      => 1,
    )
);

// Content
$wp_customize->add_setting('hsi_service_other_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('hsi_service_other_text', array(
    'label'                 =>  __('Text Description', 'hsi'),
    'section'               => 'hsi_service_other_section',
    'type'                  => 'textarea',
    'settings'              => 'hsi_service_other_text',
));

for ($i = 1; $i <= 3; $i++) {
    $wp_customize->add_setting('hsi_service_other_image_' . $i, array(
        'transport'         => 'refresh',
        'width'         => 1200,
        'height'         => 385,
        'sanitize_callback'     => 'hsi_sanitize_image'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hsi_service_other_image_' . $i, array(
        'label'             => sprintf(__('Upload image %s', 'hsi'), $i),
        'section'           => 'hsi_service_other_section',
        'settings'          => 'hsi_service_other_image_' . $i,
    )));
}
