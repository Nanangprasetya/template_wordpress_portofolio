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

            <div class="about-all d-flex flex-column justify-content-center align-items-stretch">

                <div class="profile d-flex align-items-center text-center justify-content-center">
                    <?php if (!empty($bs_about_text_profile)) : ?>
                        <img src="<?php echo esc_html($bs_about_profile); ?>" alt="">
                        <h2>
                            <?php echo esc_html($bs_about_text_profile); ?>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="content text-center justify-content-center">
                    <h2 class="d-flex justify-content-center">
                        <?php echo esc_html($bs_about_title); ?>
                    </h2>
                    <p class=" text-center">
                        <?php echo esc_html($bs_about_paragraph); ?>
                        <a target="blank" href="<?php echo esc_attr($bs_about_link_company) ?>"><?php echo esc_html($bs_about_text_company); ?></a>
                        <?php echo esc_html($bs_about_paragraph_end); ?>
                    </p>
                </div>

                <div class="button-content accordion-list d-flex justify-content-center">
                    <ul>
                        <li>
                            <a href="<?php echo esc_attr($bs_about_link_cta) ?>" class="btn-get-started"><?php echo esc_attr($bs_about_text_cta) ?></a>
                        </li>

                        <?php if (!empty($bs_about_link_cv)) : ?>
                            <div class="download align-items-center">
                                <a target="blank" href="<?php echo esc_html($bs_about_link_cv); ?>">
                                    <i class="iconify" data-inline="false" data-icon="<?php echo esc_attr($bs_about_icon_cv) ?>"></i>
                                    <?php echo esc_html($bs_about_text_cv); ?>
                                </a>

                            </div>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>

            <div class="sosial-media accordion-list justify-content-center">
                <ul>
                    <?php if (!empty($bs_about_link_cv)) : ?>
                        <div class="download align-items-center">
                            <a target="blank" href="<?php echo esc_html($bs_about_link_cv); ?>">
                                <i class="iconify" data-inline="false" data-icon="<?php echo esc_attr($bs_about_icon_cv) ?>"></i>
                                <?php echo esc_html($bs_about_text_cv); ?>
                            </a>

                        </div>
                    <?php endif; ?>
                    
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <?php if (!empty(get_theme_mod('bs_about_icon_' . $i))) : ?>
                            <li>
                                <a target="blank" href=" <?php echo esc_attr(get_theme_mod('bs_about_icon_url_' . $i)) ?>">
                                    <span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('bs_about_icon_' . $i)) ?>"></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
            </div>


        </div>



        </div>
    </section>

<?php endif; ?>