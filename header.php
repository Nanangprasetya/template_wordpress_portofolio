<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Team Money (Teamo) by Panemu" />
    <meta property="og:description" content="Team Money (Teamo) aplikasi pencatatan keuangan tim atau kelompok yang mudah, transparan dan dapat diaudit bersama." />
    <meta property="og:url" content="https://teamo.panemu.com/id/" />
    <meta property="og:image" content="https://teamo.panemu.com/id/assets/img/intro/web-intro.webp" />
    <meta property="og:site_name" content="Team Money (Teamo) by Panemu" />

    <?php wp_head(); ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">

                <div class="logo">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) {
                        the_custom_logo();
                    } ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><span><?php echo get_bloginfo('name'); ?></span></a>
                </div>

                <div class="right-nav d-flex align-items-center">
                    <nav id="navbar" class="navbar">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'nav-link scrollto',
                        ));
                        ?>
                        <i class="bi mobile-nav-toggle"> <span class="menu-text">Menu</span> </i>
                    </nav>

                    <a class="toggle-mode">
                        <span class="is-light"> &#127770;</span>
                        <span class="is-dark"> &#127773;</span>
                    </a>
                </div>

            </div>
        </div>
    </header>
    <!-- End Header -->