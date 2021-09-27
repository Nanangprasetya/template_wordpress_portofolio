<?php if (get_theme_mod('hsi_about')) : ?>

    <section id="about" class="about">
        <?php
        $hsi_about_image = get_theme_mod('hsi_about_image');
        $hsi_about_top_title = get_theme_mod('hsi_about_top_title');
        $hsi_about_title = get_theme_mod('hsi_about_title');
        $hsi_about_paragraph = get_theme_mod('hsi_about_paragraph');
        $hsi_about_title_list = get_theme_mod('hsi_about_title_list');
        ?>

        <?php if (!empty($hsi_about_top_title)) : ?>
            <div class="section-title">
                <h2><?php echo esc_html($hsi_about_top_title); ?></h2>
                <div class="divider"></div>
            </div>
        <?php endif; ?>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 img-about align-items-stretch position-relative video-box" style='background-image: url("<?php echo esc_html($hsi_about_image); ?>");' data-aos="fade-down">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                    <div class="content">
                        <h2>
                            <?php echo esc_html($hsi_about_title); ?>
                        </h2>
                        <p>
                            <?php echo esc_html($hsi_about_paragraph); ?>
                        </p>
                        <?php if (!empty($hsi_about_top_title)) : ?>
                            <h3>
                                <?php echo esc_html($hsi_about_title_list); ?>
                            </h3>
                        <?php endif; ?>

                    </div>


                    <div class="accordion-list">
                        <ul>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>

                                <?php if (!empty(get_theme_mod('hsi_about_icon_' . $i))) : ?>
                                    <li><span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('hsi_about_icon_' . $i)) ?>"></span>
                                        <p>
                                            <?php echo esc_attr(get_theme_mod('hsi_about_list_' . $i)) ?>
                                        </p>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </ul>
                    </div>


                </div>

            </div>

        </div>
    </section>

<?php endif; ?>