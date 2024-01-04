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

      <div class="isobanner-wrapper">
        <a href="#form" class="button">
          <?php the_field('banner_btn'); ?>
          <svg class="arrow-icon stroke">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
          </svg>
        </a>
      </div>

    </div>
  </section>

  <section class="expectation">
    <div class="container">

      <div class="expectation-wrapper">
        <img class="expectation__img" src="http://cp-wp-test/wp-content/uploads/2024/01/about.webp" alt="conversation at the table">
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



</main>

<?php get_footer(); ?>