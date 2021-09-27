<?php
$wp_customize->add_section('hsi_contact_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 1,
    'title'                 => __('Contact', 'hsi'),
    'description'           => __('Contact section', 'hsi'),
    'panel'                 => 'hsi_front_option'
));

$wp_customize->add_setting(
    'hsi_contact',
    array(
        'default'           => '',
        'sanitize_callback'     => 'hsi_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'hsi_contact',
    array(
        'label'         => esc_html__('Show Contact', 'hsi'),
        'section'       => 'hsi_contact_section',
        'type'          => 'checkbox',
        'priority'      => 1,
    )
);


// Content

$wp_customize->add_setting('hsi_contact_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('hsi_contact_top_title', array(
    'label'                 =>  __('Top Title Text', 'hsi'),
    'section'               => 'hsi_contact_section',
    'type'                  => 'text',
    'settings'              => 'hsi_contact_top_title',
));

$wp_customize->add_setting('hsi_contact_form', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control('hsi_contact_form', array(
    'label'                 =>  __('Contact Form Code', 'hsi'),
    'description'           => esc_html__( 'You can get code on menu Contact Form 7 ', 'hsi' ),
    'section'               => 'hsi_contact_section',
    'type'                  => 'text',
    'settings'              => 'hsi_contact_form',
));

for ($i=1; $i <= 3; $i++) { 
    $wp_customize->add_setting('hsi_contact_google_map_'.$i, array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('hsi_contact_google_map_'.$i, array(
        'label'                 =>  sprintf(__('Url Google Map  %s', 'hsi'), $i),
        'section'               => 'hsi_contact_section',
        'description'           => sprintf( esc_html__( 'You can paste the url embed only! (%2$s See more here %3$s) ', 'hsi' ), $hsi_service,'<a href="https://www.embedgooglemap.net/'.esc_url('').'">','</a>'),
        'type'                  => 'url',
        'settings' => 'hsi_contact_google_map_'.$i,
    ));
    
}