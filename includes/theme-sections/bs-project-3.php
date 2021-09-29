<?php if (get_theme_mod('bs_project_3')) : ?>

<section id="projects" class="project">
    <?php
    $bs_project_3_icon_type = get_theme_mod('bs_project_3_icon_type');
    $bs_project_3_text_type = get_theme_mod('bs_project_3_text_type');
    $bs_project_3_logo = get_theme_mod('bs_project_3_logo');
    $bs_project_3_text_title = get_theme_mod('bs_project_3_text_title');
    $bs_project_3_paragraph = get_theme_mod('bs_project_3_paragraph');
    $bs_project_3_text_cta = get_theme_mod('bs_project_3_text_cta');
    $bs_project_3_link_cta = get_theme_mod('bs_project_3_link_cta');
    $bs_project_3_image_right = get_theme_mod('bs_project_3_image_right');
    ?>

    <div class="container">
        <div class="chart">
            <div class="row">
                <div class="col-lg-6 left">
                    <div class="type d-flex align-items-center">
                        <i class="iconify" data-inline="false" data-icon="<?php echo esc_attr($bs_project_3_icon_type) ?>"></i>
                        <p><?php echo esc_html($bs_project_3_text_type); ?></p>
                    </div>

                    <div class="title d-flex align-items-center">
                        <img src="<?php echo esc_html($bs_project_3_logo); ?>" alt="">
                        <h1><?php echo esc_html($bs_project_3_text_title); ?></h1>
                    </div>

                    <div class="content">
                        <p><?php echo esc_html($bs_project_3_paragraph); ?></p>
                    </div>

                    <div class="icon-project d-flex align-items-center">
                        <?php for ($i = 1; $i <= 6; $i++) : ?>
                            <?php if (!empty(get_theme_mod('bs_project_3_icon_' . $i))) : ?>
                                <li>
                                    <span class="iconify" data-inline="false" data-icon="<?php echo esc_attr(get_theme_mod('bs_project_3_icon_' . $i)) ?>"></span>
                                </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    
                    <a href="<?php echo esc_attr($bs_project_3_link_cta) ?>" class="btn-get-started"><?php echo esc_attr($bs_project_3_text_cta) ?></a>

                </div>
                <div class="col-lg-6 right">
                    <img class="img-responsive" height="550" width="740" src="<?php echo esc_html($bs_project_3_image_right); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>