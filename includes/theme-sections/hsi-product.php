<?php if (get_theme_mod('hsi_product')) : ?>

    <section id="products" class="portfoio">
        <?php
        $hsi_product_top_title = get_theme_mod('hsi_product_top_title');
        $hsi_product_paragraph = get_theme_mod('hsi_product_paragraph');
        ?>
        <?php if (!empty($hsi_product_top_title)) : ?>
            <div class="section-title">
                <h2>
                    <?php echo esc_html($hsi_product_top_title); ?>
                </h2>
                <div class="divider"></div>
            </div>
        <?php endif; ?>

        <?php if (!empty($hsi_product_paragraph)) : ?>

            <div class="container des-portfoio">
                <p>
                    <?php echo esc_html($hsi_product_paragraph); ?>
                </p>
            </div>
        <?php endif; ?>


        <div class="container" data-aos="fade-up">

            <div class="row portfolio-container">
                <?php for ($i = 1; $i <= 12; $i++) : ?>

                    <?php if (!empty(get_theme_mod('hsi_product_image_' . $i))) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src=" <?php echo esc_attr(get_theme_mod('hsi_product_image_' . $i)) ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>
                                <?php echo esc_attr(get_theme_mod('hsi_product_title_' . $i)) ?>
                                </h4>
                                <a href=" <?php echo esc_attr(get_theme_mod('hsi_product_image_' . $i)) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link details-link" title="
                                <?php echo esc_attr(get_theme_mod('hsi_product_title_' . $i)) ?>">
                                    <i class='bx bx-show'></i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

        </div>
    </section>
<?php endif; ?>