<?php
/*
Template Name: home
*/
get_header();
?>

<main>
  <section class="banner">
    <video autoplay muted loop class="banner__video">
      <source src="<?php echo get_template_directory_uri() ?>/assets/images/video.mp4" type="video/mp4">
      Ваш браузер не підтримує тег video.
    </video>

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
              <a href="<?php the_permalink(); ?>">
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
                      <use href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#arrow"></use>
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
        $size = 'medium';
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
        <a href="#" class="button  about-margin">
          <?php the_field('about_btn_text'); ?>
          <svg class="arrow-icon stroke">
            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
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

</main>

<?php get_footer(); ?>