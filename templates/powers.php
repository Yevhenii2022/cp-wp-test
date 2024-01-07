<?php
/*
Template Name: powers
*/
get_header();
?>

<main>
  <section class="powers">
    <div class="container">
      <h2 class="powers__title"><?php the_title(); ?></h2>
    </div>
  </section>
  <section class="powers__acr">
    <div class="container">
      <div class="powers__text">
        <?php the_content(); ?>
      </div>

      <?php get_template_part('template-parts/accordion'); ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>