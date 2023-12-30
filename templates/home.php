<?php
/*
Template Name: home
*/
get_header();
?>

<main>
  <section class="banner">

    <video autoplay muted loop class="banner__video">
      <source src="<?php echo get_template_directory_uri() ?>/assets/images/video.mp4" type="video/mp4">
      Ваш браузер не підтримує тег video.
    </video>

    <div class="container banner-wrapper">
      <h1 class="banner__title"><?php the_field('banner_title'); ?></h1>

      <a href="#" class="button">
        <?php the_field('banner_btn_text'); ?>
        <svg class="arrow-icon stroke">
          <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
        </svg>
      </a>
    </div>
  </section>

  <section class="iso">

    <div class="container">
      <div class="iso-wrapper">
        <h2 class="iso-title"><?php the_field('iso_title'); ?></h2>
        <p class="iso__subtitle"><?php the_field('iso_text'); ?></p>
      </div>

      <ul class="iso__list">
        <li>
          <a href="#">
            <article class="iso__card">
              <div class="iso__card-wrapper">
                <img class="iso__img" src="<?php echo get_template_directory_uri() ?>/assets/images/iso.png" alt="iso logo">
                <svg class="iso__icon">
                  <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                </svg>
              </div>
              <p class="iso__text">система менеджменту якості</p>
            </article>
          </a>
        </li>
      </ul>

    </div>

    </div>
  </section>

</main>

<?php get_template_part('template-parts/form'); ?>

<?php get_footer(); ?>