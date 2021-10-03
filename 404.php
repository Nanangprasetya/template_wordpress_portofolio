<?php

/**
 * Displaying 404 pages (not found).
 *
 * @package Hikari
 */
?>
<?php wp_head(); ?>

<main id="main">

    <div id="notfound">
        <div class="notfound">
            <div class="pnl-body">
                <h2>404</h2>
            </div>
            <h2>
                <?php echo do_shortcode('[trans 
                  id="Ups! Halaman Tidak Ditemukan" 
                  en="Oops! Page Nothing Found"]'); ?>
            </h2>
            <p>
                <?php echo do_shortcode('[trans 
                  id="Mohon maaf, halaman yang Anda minta tidak ditemukan." 
                  en="We are sorry, but the page you requested was not found."]'); ?>
                <a href="<?php bloginfo('url'); ?>/">
                    <?php echo do_shortcode('[trans 
                  id="Kembali ke halaman awal" 
                  en="Back to home page"]'); ?>
                </a>
            </p>
            <div class="social-links d-flex align-items-center">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php if (!empty(get_theme_mod('bs_about_icon_' . $i))) : ?>
                        <li>
                            <a href="<?php echo esc_attr(get_theme_mod('bs_about_icon_url_' . $i)) ?>">
                                <span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('bs_about_icon_' . $i)) ?>"></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>


        </div>
    </div>


    </div>

</main>