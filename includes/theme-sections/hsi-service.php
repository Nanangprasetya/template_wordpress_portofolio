<?php if (get_theme_mod('hsi_service')) : ?>

    <section id="services" class="about">
        <?php
        $hsi_service_image = get_theme_mod('hsi_service_image');
        $hsi_service_top_title = get_theme_mod('hsi_service_top_title');
        $hsi_service_title = get_theme_mod('hsi_service_title');
        $hsi_service_paragraph = get_theme_mod('hsi_service_paragraph');
        $hsi_service_title_list = get_theme_mod('hsi_service_title_list');
        ?>

        <?php if (!empty($hsi_service_top_title)) : ?>
            <div class="section-title">
                <h2><?php echo esc_html($hsi_service_top_title); ?></h2>
                <div class="divider"></div>
            </div>
        <?php endif; ?>

        <div class="container-fluid">
            <div class="row reverse">

                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                    <div class="content">
                        <h2>
                            <?php echo esc_html($hsi_service_title); ?>
                        </h2>
                        <p>
                            <?php echo esc_html($hsi_service_paragraph); ?>
                        </p>
                        <?php if (!empty($hsi_service_title_list)) : ?>
                            <h3>
                                <?php echo esc_html($hsi_service_title_list); ?>
                            </h3>
                        <?php endif; ?>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>

                                <?php if (!empty(get_theme_mod('hsi_service_icon_' . $i))) : ?>
                                    <li><span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('hsi_service_icon_' . $i)) ?>"></span>
                                        <p>
                                            <?php echo esc_attr(get_theme_mod('hsi_service_list_' . $i)) ?>
                                        </p>
                                    </li>
                                <?php endif; ?>

                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($hsi_service_image)) : ?>
                    <div class="col-lg-6 img-about align-items-stretch position-relative video-box" style='background-image: url("<?php echo esc_html($hsi_service_image); ?>");' data-aos="fade-down">
                    </div>
                <?php endif; ?>


            </div>

        </div>
    </section>
<?php endif; ?>