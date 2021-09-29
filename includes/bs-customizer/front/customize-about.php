<?php
// Controller
$wp_customize->add_section('bs_about_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 1,
    'title'                 => __('About', 'bs'),
    'description'           => __('About section', 'bs'),
    'panel'                 => 'bs_front_option'
));

// Check Box
$wp_customize->add_setting(
    'bs_about',
    array(
        'default'           => '',
        'sanitize_callback'     => 'bs_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'bs_about',
    array(
        'label'         => esc_html__('Show About', 'bs'),
        'section'       => 'bs_about_section',
        'type'          => 'checkbox',
        'priority'      => 1,
    )
);
// end Check Box

// Content

// Circular img
$wp_customize->add_setting('bs_about_profile', array(
    'transport'         => 'refresh',
    'width'         => 250,
    'height'         => 250,
    'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_about_profile', array(
    'label'             => __('Image Profile ', 'bs'),
    'section'           => 'bs_about_section',
    'settings'          => 'bs_about_profile',
)));
// end Circular img

// text_profile
$wp_customize->add_setting('bs_about_text_profile', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('bs_about_text_profile', array(
    'label'                 =>  __('Text Profile', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings'              => 'bs_about_text_profile',
));
// end text_profile

$wp_customize->add_setting('bs_about_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_title', array(
    'label'                 =>  __('Title content', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings'              => 'bs_about_title',
));

// Text Paragraft start
$wp_customize->add_setting('bs_about_paragraph', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_paragraph', array(
    'label'                 =>  __('Subtitle content', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'textarea',
    'settings'              => 'bs_about_paragraph',
));
//End Text Paragraft start


// Company Url
$wp_customize->add_setting('bs_about_text_company', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_text_company', array(
    'label'                 =>  __('Text Company', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'textarea',
    'settings'              => 'bs_about_text_company',
));


// Text Paragraft start
$wp_customize->add_setting('bs_about_paragraph_end', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_paragraph_end', array(
    'label'                 =>  __('Subtitle content', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'textarea',
    'settings'              => 'bs_about_paragraph_end',
));
// End Text Paragraft start


$wp_customize->add_setting('bs_about_link_company', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
));

$wp_customize->add_control('bs_about_link_company', array(
    'label'                 =>  __('Url Company', 'bs'),
    'section'               => 'bs_about_section',
    'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs')),
    'type'                  => 'url',
    'settings' => 'bs_about_link_company',
));
// end Company Url

// Button CTA
$wp_customize->add_setting('bs_about_text_cta', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_text_cta', array(
    'label'                 =>  __('Text Button CTA ', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings'              => 'bs_about_text_cta',
));


$wp_customize->add_setting('bs_about_link_cta', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
));

$wp_customize->add_control('bs_about_link_cta', array(
    'label'                 =>  __('Url Button CTA', 'bs'),
    'section'               => 'bs_about_section',
    'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs')),
    'type'                  => 'url',
    'settings' => 'bs_about_link_cta',
));
// End Button CTA


// Button CV
$wp_customize->add_setting('bs_about_icon_cv', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('bs_about_icon_cv', array(
    'label'                 => sprintf(__('Icon Button Download CV', 'bs')),
    'description'           => sprintf(esc_html__('Use font iconify icon, Eg: la:hammer ', 'bs')),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings' => 'bs_about_icon_cv',
));


$wp_customize->add_setting('bs_about_text_cv', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_text_cv', array(
    'label'                 =>  __('Text Button Download CV ', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings'              => 'bs_about_text_cv',
));


$wp_customize->add_setting('bs_about_link_cv', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
));

$wp_customize->add_control('bs_about_link_cv', array(
    'label'                 =>  __('Url Button Download CV', 'bs'),
    'section'               => 'bs_about_section',
    'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs')),
    'type'                  => 'url',
    'settings' => 'bs_about_link_cv',
));
// End Button Download

// About Customizer
$bs_about_array = array(
    '1' => 'carbon:delivery-truck',
    '2' => 'fluent:food-16-regular',
    '3' => 'simple-line-icons:energy',
    '4' => 'la:hammer',
    '5' => 'la:oil-can',
);
foreach ($bs_about_array as $bs_key => $bs_about) {
    $wp_customize->add_setting('bs_about_icon_' . $bs_key, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control('bs_about_icon_' . $bs_key, array(
        'label'                 => sprintf(__('%1$s. Icon Social', 'bs'), $bs_key),
        'description'           => sprintf(__('Use font iconify icon: Eg: %1$s ( %2$s See more here %3$s )', 'bs'), $bs_about, '<a href="' . esc_url('https://icon-sets.iconify.design/') . '">', '</a>'),
        'section'               => 'bs_about_section',
        'type'                  => 'text',
        'settings' => 'bs_about_icon_' . $bs_key,
    ));

    $wp_customize->add_setting('bs_about_icon_url_' . $bs_key, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'esc_url_raw'
    ));

    $wp_customize->add_control('bs_about_icon_url_' . $bs_key, array(
        'label'                 =>  sprintf(__('%1$s. Url Icon Social', 'bs'), $bs_key),
        'section'               => 'bs_about_section',
        'type'                  => 'url',
        'description'           => sprintf(esc_html__('You can paste the url only! ', 'bs'), $bs_key),
        'settings'              => 'bs_about_icon_url_' . $bs_key,
    ));
}

// Img Right 
$wp_customize->add_setting('bs_about_image_right', array(
    'transport'         => 'refresh',
    'width'         => 620,
    'height'         => 500,
    'sanitize_callback'     => 'bs_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bs_about_image_right', array(
    'label'             => __('Image Right ', 'bs'),
    'section'           => 'bs_about_section',
    'settings'          => 'bs_about_image_right',
)));
//End Img Right 


// Animation Lottie
$wp_customize->add_setting('bs_about_lottie_file', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_lottie_file', array(
    'label'                 =>  __('Lottie File ', 'bs'),
    'section'               => 'bs_about_section',
    'description'           => sprintf(esc_html__('Only use file .json ', 'bs')),
    'type'                  => 'text',
    'settings'              => 'bs_about_lottie_file',
));


$wp_customize->add_setting('bs_about_text_lottie', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('bs_about_text_lottie', array(
    'label'                 =>  __('Text Lottie File ', 'bs'),
    'section'               => 'bs_about_section',
    'type'                  => 'text',
    'settings'              => 'bs_about_text_lottie',
));
// End Animation Lottie
