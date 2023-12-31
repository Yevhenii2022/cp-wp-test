<?php
/*
Template Name: home
*/
get_header();
?>

<main>
  <section class="banner">
    <video autoplay muted loop class="banner__video">
      <source src="<?php echo get_template_directory_uri() ?>/assets/images/video3.mp4" type="video/mp4">
      Ваш браузер не підтримує тег video.
    </video>

    <div class="container banner-wrapper">
      <h1 class="banner__title"><?php the_field('banner_title'); ?></h1>

      <a href="#form" class="button" aria-label="link to form">
        <?php the_field('banner_btn_text'); ?>
        <svg class="arrow-icon stroke">
          <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
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
        <?php
        $args = array(
          'post_type' => 'iso',
          'posts_per_page' => -1,
        );

        $iso_posts = new WP_Query($args);

        if ($iso_posts->have_posts()) :
          while ($iso_posts->have_posts()) : $iso_posts->the_post();
        ?>
            <li>
              <a href="<?php the_permalink(); ?>" aria-label="link to iso card page">
                <article class="iso__card">
                  <div class="iso__card-wrapper">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail('thumbnail', array('class' => 'iso__img', 'alt' => get_the_title()));
                    else :
                    ?>
                      <img class="iso__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/iso.png" alt="iso logo">
                    <?php endif; ?>
                    <svg class="iso__icon">
                      <use href="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sprite.svg#arrow"></use>
                    </svg>
                  </div>
                  <p class="iso__text"><?php the_title(); ?></p>
                </article>
              </a>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>
  </section>

  <section class="about">
    <div class="container about-wraper">
      <div class="about-flex">
        <?php
        $image = get_field('about_img');
        $size = 'full';
        $custom_class = 'about__img';

        if ($image) {
          echo wp_get_attachment_image($image, $size, false, array('class' => $custom_class));
        }
        ?>
      </div>

      <div class="about-flex">

        <?php
        // Заміна кольору тексту
        $text = get_field('about_title');
        $changed_text = get_field('about_title_chn');
        $changed_color = 'rgba(103, 107, 112, 0.31)';
        $text_with_color = '<span style="color: ' . $changed_color . ';">' . $changed_text . '</span>';
        $modified_text = str_replace($changed_text, $text_with_color, $text);
        ?>

        <h2 class="about__title"><?php echo $modified_text; ?></h2>
        <p class="about__text"><?php the_field('about_text_first'); ?></p>
        <p class="about__text"><?php the_field('about_text_second'); ?></p>
        <a href="<?php echo esc_attr(get_field('about_btn_link')); ?>" class="button  about-margin" aria-label="link to about company page">
          <?php the_field('about_btn_text'); ?>
          <svg class="arrow-icon stroke">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section class="work">
    <div class="container">
      <div class="work-wraper">
        <div class="work-flex">
          <h2 class="work__title work-color"><?php the_field('work_title_first'); ?></h2>
          <h2 class="work__title"><?php the_field('work_title_second'); ?></h2>
        </div>
        <p class="work__text"><?php the_field('work_text'); ?></p>
      </div>

      <?php get_template_part('template-parts/tooltip'); ?>

    </div>
  </section>

  <section class="team">
    <div class="team-container">

      <?php if (have_rows('team_slider')) : ?>
        <div class="swiper-flex">
          <div class="swiper-flex__quotes">“</div>
          <div class="swiper mySwiper3">
            <div class="swiper-wrapper">

              <?php while (have_rows('team_slider')) : the_row();
                $quote = get_sub_field('quote');
                $member = get_sub_field('team_member');
                $position = get_sub_field('position');
              ?>

                <div class="swiper-slide slider-text">
                  <h3 class="slider-text__quote"><?php echo $quote; ?></h3>
                  <p class="slider-text__member"><?php echo $member; ?></p>
                  <p class="slider-text__position"><?php echo $position; ?></p>
                </div>

              <?php endwhile; ?>
            </div>
          </div>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper swiper-flex-img">

              <?php while (have_rows('team_slider')) : the_row();
                $img = get_sub_field('team_img');
              ?>

                <div class="swiper-slide swiper-img__wrapper">
                  <div class="swiper-empty__wrap"></div>
                  <div class="swiper-img-sm element-animation">
                    <img src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
          <div class="swiper mySwiper2">
            <div class="swiper-wrapper">

              <?php while (have_rows('team_slider')) : the_row();
                $img = get_sub_field('team_img');
              ?>
                <div class="swiper-slide">
                  <div class="swiper-img-bg">
                    <img src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div class="swiper_pagination custom-pagination">
        <div class="pagination-wrap">
          <div class="custom-prev-icon"></div>
          <div class="custom-next-icon"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="team-flex">
        <h3 class="team__title"><?php the_field('team_title'); ?></h3>
        <p class="team__text"><?php the_field('work_text'); ?></p>
      </div>

      <div class="team-wraper">
        <?php
        $team_numbers = get_field('team_number_list');

        if ($team_numbers) {
          foreach ($team_numbers as $team_item) {
            $team_number = $team_item['team_number'];
            $team_text = $team_item['team_number_text'];

            echo '<div class="team__item">';
            echo '<h4 class="team__number">' . esc_html($team_number) . '</h4>';
            echo '<p class="team__desc">' . esc_html($team_text) . '</p>';
            echo '</div>';
          }
        }
        ?>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container map-flex">
      <div>
        <?php
        $image = get_field('map');
        $size = 'full';
        $custom_class = 'map__img';
        if ($image) {
          echo wp_get_attachment_image($image, $size, false, array('class' => $custom_class));
        }
        ?>
      </div>
      <div>
        <h2 class="map__title"><?php the_field('text_before'); ?><span class="map__title map-span"><?php the_field('map_number'); ?></span><?php the_field('text_after'); ?></h2>
        <p class="map__text"><?php the_field('work_text'); ?></p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>