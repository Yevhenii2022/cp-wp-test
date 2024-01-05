<?php
/*
Template Name: about
*/
get_header();
?>

<main>
  <section class="about-page">
    <div class="container">
      <h2 class="about-page__title"><?php the_field('about_baner_title'); ?></h2>

      <div class="iso-wrapper">
        <p class="iso-title"><?php the_field('iso_title'); ?></p>
        <p class="iso__subtitle"><?php the_field('iso_text'); ?></p>
      </div>


    </div>
  </section>

</main>

<?php get_footer(); ?>