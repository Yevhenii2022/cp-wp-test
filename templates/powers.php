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

  <?php get_template_part('template-parts/accordion'); ?>

</main>

<?php get_footer(); ?>