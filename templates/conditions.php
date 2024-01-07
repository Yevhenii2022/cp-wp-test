<?php
/*
Template Name: conditions
*/
get_header();
?>

<main>
  <section class="conditions">
    <div class="container">
      <h2 class="conditions__title"><?php the_title(); ?></h2>
    </div>
  </section>
  <section class="conditions__acr">
    <div class="container">
      <div class="conditions__text">
        <?php the_content(); ?>
      </div>

      <?php get_template_part('template-parts/accordion'); ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>