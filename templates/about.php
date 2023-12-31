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

  <section class="expectation">
    <div class="container">
      <div class="expectation-wrapper">
        <?php
        $img = get_field('expectation_img');
        ?>
        <img class="expectation__img" src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
        <div>
          <h2 id="expectationTitle" class="expectation__title"><?php the_field('expectation_title'); ?></h2>

          <?php
          // Отримуємо ID конкретного запису типу "iso" 
          $iso_id = 39;
          $expectation_list = get_field('expectation_list', $iso_id);

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
          <h3 class="expectation__subtitle"><?php echo esc_html(get_field('expectation_subtitle', $iso_id)); ?></h3>
        </div>
      </div>




      



    </div>
  </section>

  <section class="principles">
    <div class="container">
      <div class="principles-wrapper">
        <div class="principles-wrapper-text">
          <?php
          $img1 = get_field('principles_img1');
          ?>
          <img class="principles__img img1" src='<?php echo $img1['url']; ?>' alt='<?php echo $img['alt']; ?>' />
          <?php
          $img2 = get_field('principles_img2');
          ?>
          <img class="principles__img img2" src='<?php echo $img2['url']; ?>' alt='<?php echo $img['alt']; ?>' />
          <?php
          $img3 = get_field('principles_img3');
          ?>
          <img class="principles__img img3" src='<?php echo $img3['url']; ?>' alt='<?php echo $img['alt']; ?>' />
          <?php
          $img4 = get_field('principles_img4');
          ?>
          <img class="principles__img img4" src='<?php echo $img4['url']; ?>' alt='<?php echo $img['alt']; ?>' />
        </div>
        <div class="principles-wrapper-text">
          <h3 id="principlesTitle" class="principles__title"><?php the_field('principles_title'); ?></h3>
          <?php
          $principles_list = get_field('principles_list');
          if ($principles_list) {
            echo '<ul class="principles__list">';

            foreach ($principles_list as $item) {
              $principles_subtitle = $item['principles_subtitle'];
              $principles_text = $item['principles_text'];

              // Змінено $principles_item на $item
              if ($item) {
                echo '<li class="principles__item">
                <p class="principles__subtitle">' . esc_html($principles_subtitle) . '</p>
                <p class="principles__text">' . esc_html($principles_text) . '</p>
            </li>';
              }
            }
            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="partner">
    <div class="container">
      <div class="partner-wraper">
        <h3 id="partnerTitle" class="partner__title"><?php the_field('partner_title'); ?></h3>
        <p class="partner__text"><?php the_field('partner_text'); ?></p>
      </div>
      <div class="work__line">
        <?php
        $circles = get_field('partner_item');
        foreach ($circles as $index => $circle) {
        ?>
          <div class="circles" data-index="<?php echo $index + 1; ?>" style="--index: <?php echo $index + 1; ?>;">
            <span class="circles-number"><?php echo sprintf('%02d', $index + 1); ?></span>
            <?php
            $partner_text = $circle['partner_item_text'];
            ?>
            <p class="circles-description"><?php echo esc_html($partner_text); ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>