<?php

/**
 * biscuit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Biscuit
 */

/* Shortcode Form Search*/


function biscuit_setup()
{
    if (!class_exists('Montserrat')) {
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800', false);
    }

    wp_enqueue_style('biscuit-animate',  get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('biscuit-bootstrap',  get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('biscuit-aos',  get_template_directory_uri() . '/assets/vendor/aos/aos.css');
    wp_enqueue_style('biscuit-bootstrap-icons',  get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('biscuit-boxicons',  get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('biscuit-glightbox',  get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('biscuit-remixicon',  get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
    wp_enqueue_style('swiper-bundle',  get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('biscuit-style',  get_template_directory_uri() . '/assets/css/style.css"');

    // Include Script JS
    wp_enqueue_script('biscuit-js-aos',  get_theme_file_uri() . '/assets/vendor/aos/aos.js');
    wp_enqueue_script('biscuit-js-bootstrap.bundle',  get_theme_file_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('biscuit-js-glightbox',  get_theme_file_uri() . '/assets/vendor/glightbox/js/glightbox.min.js');
    wp_enqueue_script('biscuit-js-isotope',  get_theme_file_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js');
    wp_enqueue_script('biscuit-js-validate',  get_theme_file_uri() . '/assets/vendor/php-email-form/validate.js');
    wp_enqueue_script('biscuit-js-swiper',  get_theme_file_uri() . '/assets/vendor/swiper/swiper-bundle.min.js');
    wp_enqueue_script('biscuit-js-main',  get_theme_file_uri() . '/assets/js/main.js', array('jquery'), 1.1, true);
    wp_enqueue_script('iconify', "https://code.iconify.design/1/1.0.6/iconify.min.js");
    wp_enqueue_script('iconify', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");
}

#Stup LOGO
function bs_custom_logo_setup()
{
    $defaults = array(
        'height'               => 250,
        'width'                => 250,
        'flex-height'          => true,
        'flex-width'           => true
    );

    add_theme_support('custom-logo', $defaults);
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bs_custom_logo_setup');

// Stup MENU
function bs_register_nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Menus', 'bs'),
        )
    );
}

add_action('after_setup_theme', 'bs_register_nav_menus');

/**
 * Widget FOOTER.
 *
 */
function bs_widgets_init()
{

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget', 'bs'),
        'id'            => 'bs_footer',
        'description'   => esc_html__('Add footer widget here.', 'bs'),
        'before_widget' => '<div id="%1$s" class="single-widget lists widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'bs_widgets_init');



// this translite string
function translite_data($atts)
{
    $trans = shortcode_atts(
        array(
            'id' => '',
            'en' => '',
        ),
        $atts
    );

    if (get_locale() == 'id_ID') {
        return $trans['id'];
    } else {
        return $trans['en'];
    }
}

function locale_trans()
{
    if (get_locale() == 'id_ID') {
        return "ID";
    } else {
        return "EN";
    }
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

function imageviewer_custom_options()
{
?>
    <script>
        imageviewer_custom_options = {
            zoomValue: 100,
            snapView: true,
            maxZoom: 500,
            refreshOnResize: true,
            zoomOnMouseWheel: true
        };
    </script>
<?php
}

add_action('wp_enqueue_scripts', 'biscuit_setup');
add_shortcode("trans", 'translite_data');
add_shortcode("locale_trans", 'locale_trans');
add_action('wp_footer', 'imageviewer_custom_options');
