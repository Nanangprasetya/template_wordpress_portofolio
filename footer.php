<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <?php if (is_active_sidebar('hsi_footer_1')) : ?>
                    <div class="col-lg-6 footer-info">
                        <?php dynamic_sidebar('hsi_footer_1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('hsi_footer_2')) : ?>
                    <div class="col-lg-3 footer-links">
                        <?php dynamic_sidebar('hsi_footer_2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('hsi_footer_3')) : ?>
                    <div class="col-lg-3 social-links">
                        <?php dynamic_sidebar('hsi_footer_3'); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; PT.Hikari Seiko Indonesia
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>

<?php
wp_footer();
?>

</body>

</html>