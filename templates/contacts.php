<?php
/*
Template Name: contacts
*/
get_header();
?>
<main>
    <section class="contacts">
        <div class="container">
            <div class="contacts__main-title"><?php the_field('contacts_main_title'); ?></div>
            <div class="contacts__wrapper">
                <div class="contacts__form">
                    <?php get_template_part('template-parts/form'); ?>
                </div>
                <div class="contacts__content">
                    <div class="contacts__content-title"><?php the_field('first_title'); ?></div>
                    
                    <div class="contacts__content-body">
                        <div class="contacts__phone">
                        <div class="contacts__content-email"><?php the_field('first_email'); ?></div>
                            <?php if (have_rows('first_phone')) : ?>
                                <?php while (have_rows('first_phone')) : the_row();?>
                                    <div class="contacts__field-name"><?php the_sub_field('first_contact_name'); ?></div>
                                    <div class="contacts__field-number"><?php the_sub_field('first_number'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="contacts__address">
                            <?php if (have_rows('first_address')) : ?>
                                <?php while (have_rows('first_address')) : the_row();?>
                                    <div class="contacts__field-address"><?php the_sub_field('first_adress_type'); ?></div>
                                    <div class="contacts__field-text"><?php the_sub_field('first_address_text'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="contacts__content-title"><?php the_field('second_title'); ?></div>
                    <div class="contacts__content-body">
                        <div class="contacts__phone">
                        <div class="contacts__content-email"><?php the_field('second_email'); ?></div>
                            <?php if (have_rows('second_phone')) : ?>
                                <?php while (have_rows('second_phone')) : the_row();?>
                                    <div class="contacts__field-name"><?php the_sub_field('second_contact_name'); ?></div>
                                    <div class="contacts__field-number"><?php the_sub_field('second_number'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="contacts__address">
                            <?php if (have_rows('second_address')) : ?>
                                <?php while (have_rows('second_address')) : the_row();?>
                                    <div class="contacts__field-address"><?php the_sub_field('second_adress_type'); ?></div>
                                    <div class="contacts__field-text"><?php the_sub_field('second_address_text'); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts__map">
        
            <div class="container map-flex">
                <div class="contacts__map-img">
                    <?php
                    $image = get_field('map');
                    $size = 'full';
                    $custom_class = 'map__img';
                    if ($image) {
                    echo wp_get_attachment_image($image, $size, false, array('class' => $custom_class));
                    }
                    ?>
                     <div>
                    <h2 class="map__title"><?php the_field('text_before'); ?><br><span class="map__title map-span"><?php the_field('map_number'); ?></span><?php the_field('text_after'); ?></h2>
                </div>
                </div>
               
            </div>
        
        
  </section>

    <!-- <div class="contacts__last">
            <?php get_template_part('template-parts/last-part'); ?>
    </div> -->
    </section>
</main> 
<?php get_footer(); ?>
    


