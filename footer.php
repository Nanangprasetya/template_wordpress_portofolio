<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <?php if (is_active_sidebar('bs_footer')) : ?>
                <div class="col-lg-9 footer-left">
                    <?php dynamic_sidebar('bs_footer'); ?>

                    <?php if (get_theme_mod('bs_about')) : ?>
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

                    <?php endif; ?>

                </div>
            <?php endif; ?>

            <div class="col-lg-3 footer-right">
                <?php if (get_theme_mod('bs_about')) : ?>
                    <a href="<?php echo esc_attr(get_theme_mod('bs_about_link_cta')) ?>" class="btn-get-started"><?php echo esc_attr(get_theme_mod('bs_about_text_cta')) ?></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</footer>

<!-- End Footer -->
<div id="preloader"></div>

<?php
wp_footer();
?>

</body>

</html>