<?php
/*
Template Name: iso
*/
get_header();
?>

<main>

  <section class="isoo">
    <div class="container">

      <?php
      // Виведення заголовка поста
      the_title('<h1>', '</h1>');

      // Отримання значення поля "banner_iso"
      $banner_image = get_field('banner_iso');

      // Отримання значення поля "iso_number"
      $iso_number = get_field('iso_number');

      // Виведення мініатюри
      if ($banner_image) {
        echo '<img src="' . esc_url($banner_image['url']) . '" alt="' . esc_attr($banner_image['alt']) . '" />';
      }

      // Виведення тексту з поля "iso_number"
      if ($iso_number) {
        echo '<p>' . esc_html($iso_number) . '</p>';
      }

      // Виведення вмісту поста
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>

    </div>
  </section>



</main>

<?php get_footer(); ?>