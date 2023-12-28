<?php
/*
Template Name: home
*/
get_header();
?>

<div class="container">
  <h2 class="home">Home page</h2>
  <button class="button">
    Надіслати
    <svg class="arrow-icon stroke">
      <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
    </svg>
  </button>
</div>

<?php get_footer(); ?>