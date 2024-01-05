<?php
/*
Template Name: iso
*/
get_header();
?>

<main>
  <?php $banner_image = get_field('banner_iso');  ?>
  <section class="isobanner" style="background-image: url('<?php echo esc_url($banner_image['url']); ?>');">
    <div class="container">
      <div class="isobanner-wrapper">
        <h1 class="isobanner__title">Сертифікація</h1>
        <span class="isobanner__title"><?php the_field('iso_number'); ?></span>
      </div>
      <p class="isobanner__text"><?php the_field('banner_text'); ?></p>

      <div class="isobanner-flex">
        <a href="#form" class="button">
          <?php the_field('banner_btn'); ?>
          <svg class="arrow-icon stroke">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
          </svg>
        </a>
        <button id="toggleAccordion" class="accordeon-btn">Читати більше</button>
      </div>
    </div>
  </section>

  <!-- accordeon -->
  <div class="container">
    <div id="accordeon" style="display:none;">

      <?php
      $accordion_items = get_field('accordion');

      if ($accordion_items) :
        foreach ($accordion_items as $accordion_item) :
          $accordion_title = $accordion_item['accordion_title'];
          $accordion_text = $accordion_item['accordion_text'];
      ?>
          <div class="acc-item">
            <div class="acc-wrapper">
              <h3 class="acc-head">
                <?php echo esc_html($accordion_title); ?>
              </h3>
              <button class="toggle-btn">+</button>
            </div>
            <p class="acc-body">
              <?php echo esc_html($accordion_text); ?>
            </p>
          </div>
      <?php
        endforeach;
      endif;
      ?>

    </div>
  </div>
  <!-- accordeon -->

  <section class="expectation">
    <div class="container">

      <div class="expectation-wrapper">
        <img class="expectation__img" src="https://test4.cursorpointer.agency/wp-content/uploads/2024/01/about.webp" alt="conversation at the table">
        <div>
          <h2 class="expectation__title"><?php the_field('expectation_title'); ?></h2>

          <?php
          $expectation_list = get_field('expectation_list');
          if ($expectation_list) {
            echo '<ul class="expectation__list">';

            foreach ($expectation_list as $item) {
              $expectation_item = $item['expectation_item'];
              if ($expectation_item) {
                echo '<li class="expectation__item"><p>' . esc_html($expectation_item) . '</p></li>';
              }
            }
            echo '</ul>';
          }
          ?>

          <h3 class="expectation__subtitle"><?php the_field('expectation_subtitle'); ?></h3>
        </div>
      </div>
    </div>
  </section>

  <section class="stages">
    <div class="container">
      <div class="stages-wrapper">
        <div>
          <h2 class="stages__title stages-color">Етапи сертифікації</h2>
          <h2 class="stages__title"><?php the_field('iso_number'); ?></h2>
        </div>
        <p class="stages__text"><?php the_field('stages_text'); ?></p>
      </div>

      <?php get_template_part('template-parts/tooltip'); ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>