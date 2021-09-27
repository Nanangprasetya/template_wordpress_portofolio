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
            <div class="social-links">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </div>


    </div>

</main>