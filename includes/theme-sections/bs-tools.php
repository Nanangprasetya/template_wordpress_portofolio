<?php if (get_theme_mod('bs_tools')) : ?>

    <section id="tools" class="tools">
        <?php
        $bs_tools_text_top = get_theme_mod('bs_tools_text_top');
        ?>
        <?php if (!empty($bs_tools_text_top)) : ?>
            <div class="section-title">
                <h2>
                    <?php echo esc_html($bs_tools_text_top); ?>
                </h2>
            </div>
        <?php endif; ?>

        <div class="container" data-aos="fade-up">

            <div class="row tools-container">
                <?php for ($i = 1; $i <= 12; $i++) : ?>

                    <?php if (!empty(get_theme_mod('bs_tools_logo_' . $i))) : ?>
                        
                        <div class="col-lg-4 col-md-6 tools-item">
                            <img src=" <?php echo esc_attr(get_theme_mod('bs_tools_logo_' . $i)) ?>" class="img-responsive" alt="">
                            <div class="tools-info">
                                <h4>
                                    <?php echo esc_attr(get_theme_mod('bs_tools_text_title_' . $i)) ?>
                                </h4>
                                <p>
                                    <?php echo esc_attr(get_theme_mod('bs_tools_paragraph_' . $i)) ?>
                                </p>
                            </div>
                        </div>

                    <?php endif; ?>
                <?php endfor; ?>
            </div>

            <div class="tools-more">
                <a class="btn-get-started btn-load-more">Load More <?php echo esc_attr($bs_tools_text_top) ?></a>
            </div>

        </div>
    </section>
<?php endif; ?>