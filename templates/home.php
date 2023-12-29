<?php
/*
Template Name: home
*/
get_header();
?>

<main>
  <section class="banner">
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

</main>

<?php get_template_part('template-parts/form'); ?>

<?php get_footer(); ?>