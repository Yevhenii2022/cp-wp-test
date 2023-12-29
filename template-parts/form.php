    <button class="button">
      Надіслати
      <svg class="arrow-icon stroke">
        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
      </svg>
    </button>

    <section>
      <h2 class="form__title"><?php the_field('form_title', 'option'); ?></h2>
      <?php
      $form = get_field('form', 'option');
      if ($form) : ?>
        <?php echo $form ?>
      <?php endif; ?>

      <div class="notification visually-hidden" id="notification">
        <div>
          <svg class="notification__icon" width="24px" height="24px">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/сheckbox.svg"></use>
          </svg>
        </div>
        <p class="notification__text">Дякуємо за Ваше звернення!</p>
      </div>
    </section>