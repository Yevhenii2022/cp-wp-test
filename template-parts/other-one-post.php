<article class="one-post">
    <div class="one-post__image">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
        
            <p class="one-post__time"><?php the_time('d.m.y'); ?></p>
            <div class="one-post__bottom">
                <h3 class="one-post__title"><?php the_title(); ?></h3>
                <div class="one-post__button button">
                    <svg class="one-post__arrow-icon">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
                    </svg>
                </div>
            </div>
        </a>
    </div>

</article>