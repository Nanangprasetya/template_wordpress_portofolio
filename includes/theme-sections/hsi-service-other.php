<?php if (get_theme_mod('hsi_service_other')) : ?>

  <section class="service-other">
    <div class="row">
      <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if (!empty(get_theme_mod('hsi_service_other_image_' . $i))) : ?>
          <div class="col-lg-4 img-about align-items-stretch position-relative video-box" style='background-image: url("<?php echo esc_attr(get_theme_mod('hsi_service_other_image_' . $i)) ?>");' data-aos="fade-down">
          </div>
        <?php endif; ?>
      <?php endfor; ?>
    </div>

    <?php if (!empty(get_theme_mod('hsi_service_other_text'))) : ?>
    <div class="container" data-aos="fade-up">
      <p>
      <?php echo esc_html(get_theme_mod('hsi_service_other_text')); ?>
      </p>
    </div>
    <?php endif; ?>

  </section>

<?php endif; ?>