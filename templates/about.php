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

  <section class="experience">
    <div class="container">

      <div class="expectation-wrapper">
        <img class="expectation__img" src="https://test4.cursorpointer.agency/wp-content/uploads/2024/01/about.webp" alt="conversation at the table">
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