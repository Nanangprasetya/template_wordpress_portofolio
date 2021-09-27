<?php if (get_theme_mod('hsi_hero_slider')) : ?>

    <section id="hero">
        <div class="container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">

                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php if (!empty(get_theme_mod('hsi_hero_slider_image_' . $i))) : ?>
                            <div class="carousel-item  <?php if ($i == 1) : ?> active <?php endif; ?>" style="background-image: url('<?php echo  get_theme_mod('hsi_hero_slider_image_' . $i) ?>'); background-position: bottom;">
                                <div class="carousel-container">
                                    <div class="container">
                                        <div class="bg-hero">
                                            <h2 class="animate__animated animate__fadeInDown">
                                                <?php echo esc_html(get_theme_mod('hsi_slider_main_title_' . $i)); ?>
                                            </h2>
                                            <p class="animate__animated animate__fadeInUp">
                                                <?php echo esc_html(get_theme_mod('hsi_slider_main_paragraph_' . $i)); ?>
                                            </p>

                                            <div class="btn-slide">
                                                <a href="<?php echo esc_url(get_theme_mod('hsi_slider_button_url_' . $i)); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo esc_html(get_theme_mod('hsi_slider_button_title_' . $i)); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

<?php endif; ?>   