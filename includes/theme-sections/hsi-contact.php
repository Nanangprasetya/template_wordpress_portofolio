<?php if (get_theme_mod('hsi_contact')) : ?>

    <?php if (!empty(get_theme_mod('hsi_contact_top_title'))) : ?>
        <section id="contact" class="contact">
            <div class="section-title">
                <h2>
                    <?php echo esc_attr(get_theme_mod('hsi_contact_top_title')) ?>
                </h2>
                <div class="divider"></div>
            </div>
        <?php endif; ?>


        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <?php if (!empty(get_theme_mod('hsi_contact_google_map_' . $i))) : ?>
                    <iframe style="border:0; width: 100%; height: 250px;" src=" <?php echo esc_attr(get_theme_mod('hsi_contact_google_map_' . $i)) ?>" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <?php if (!empty(get_theme_mod('hsi_contact_form'))) : ?>
            <div class="container content">
                <div data-aos="fade-left" data-aos-delay="100">
                    <?php
                    echo do_shortcode(esc_attr(get_theme_mod('hsi_contact_form')));
                    ?>
                </div>
            </div>
        <?php endif; ?>

        </section>
    <?php endif; ?>