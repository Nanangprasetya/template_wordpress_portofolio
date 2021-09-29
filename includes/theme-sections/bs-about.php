<?php if (get_theme_mod('bs_about')) : ?>

    <section id="about" class="about">
        <?php

        $bs_about_profile = get_theme_mod('bs_about_profile');
        $bs_about_text_profile = get_theme_mod('bs_about_text_profile');
        $bs_about_title = get_theme_mod('bs_about_title');
        $bs_about_paragraph = get_theme_mod('bs_about_paragraph');
        $bs_about_paragraph_end = get_theme_mod('bs_about_paragraph_end');
        $bs_about_text_company = get_theme_mod('bs_about_text_company');
        $bs_about_link_company = get_theme_mod('bs_about_link_company');
        $bs_about_text_cta = get_theme_mod('bs_about_text_cta');
        $bs_about_link_cta = get_theme_mod('bs_about_link_cta');
        $bs_about_icon_cv = get_theme_mod('bs_about_icon_cv');
        $bs_about_text_cv = get_theme_mod('bs_about_text_cv');
        $bs_about_link_cv = get_theme_mod('bs_about_link_cv');
        $bs_about_image_right = get_theme_mod('bs_about_image_right');
        $bs_about_lottie_file = get_theme_mod('bs_about_lottie_file');
        $bs_about_text_lottie = get_theme_mod('bs_about_text_lottie');
        ?>

        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="profile d-flex align-items-center">
                        <?php if (!empty($bs_about_text_profile)) : ?>
                            <img src="<?php echo esc_html($bs_about_profile); ?>" alt="">
                            <h2>
                                <?php echo esc_html($bs_about_text_profile); ?>
                            </h2>
                        <?php endif; ?>
                    </div>

                    <div class="content">
                        <h2>
                            <?php echo esc_html($bs_about_title); ?>
                        </h2>
                        <p>
                            <?php echo esc_html($bs_about_paragraph); ?>
                            <a href="<?php echo esc_attr($bs_about_link_company) ?>"><?php echo esc_html($bs_about_text_company); ?></a>
                            <?php echo esc_html($bs_about_paragraph_end); ?>
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a href="<?php echo esc_attr($bs_about_link_cta) ?>" class="btn-get-started"><?php echo esc_attr($bs_about_text_cta) ?></a>
                            </li>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <?php if (!empty(get_theme_mod('bs_about_icon_' . $i))) : ?>
                                    <li>
                                        <a href=" <?php echo esc_attr(get_theme_mod('bs_about_icon_url_' . $i)) ?>">
                                            <span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('bs_about_icon_' . $i)) ?>"></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </ul>
                </div>

                    <?php if (!empty($bs_about_link_company)) : ?>
                        <div class="download d-flex align-items-center">
                            <a href="<?php echo esc_html($bs_about_link_company); ?>">
                                <i class="iconify" data-inline="false" data-icon="<?php echo esc_attr($bs_about_icon_cv) ?>"></i>
                                <?php echo esc_html($bs_about_text_cv); ?>
                            </a>

                        </div>
                    <?php endif; ?>


                </div>

                <div class="col-lg-6 img-about">
                    <img class="img-responsive" height="500" width="620" src="<?php echo esc_html($bs_about_image_right); ?>" alt="">
                    <?php if (!empty($bs_about_text_profile)) : ?>
                        <h2>
                            <?php echo esc_html($bs_about_text_lottie); ?>
                            <span class="txt-rotate" data-period="2000" data-rotate='[ "UI/UX Designer.", "Software Development."]'></span>
                        </h2>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>

<?php endif; ?>