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

      <div class="about-page-wrapper">
        <div>
          <?php
          $img = get_field('about_baner_img');
          ?>
          <img class="about-page__img" src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
        </div>
        <div>
          <p class="about-page__subtitle"><?php the_field('about_baner_subtitle'); ?></p>
          <p class="about-page__text"><?php the_field('about_baner_text'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-fact">
    <div class="container">

      <div class="about-fact-flex">
        <div class="about-fact-wrapper">
          <div class="about-fact-text">
            <h3 class="about-fact__title"><?php the_field('fact_title'); ?></h3>
            <span class="about-fact__title about-fact-color"><?php the_field('first_text'); ?></span>
          </div>
          <p class="about-fact__text"><?php the_field('first_card_text'); ?></p>
        </div>
        <div class="about-fact-wrapper">
          <div class="about-fact-text">
            <h3 class="about-fact__title"><?php the_field('fact_title'); ?></h3>
            <span class="about-fact__title about-fact-color"><?php the_field('second_text'); ?></span>
          </div>
          <p class="about-fact__text"><?php the_field('second_card_text'); ?></p>
        </div>
      </div>
    </div>
  </section>



</main>

<?php get_footer(); ?>