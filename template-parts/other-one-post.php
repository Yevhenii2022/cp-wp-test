<article class="one-post" id="postBlock">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="one-post__image">
                <?php the_post_thumbnail(); ?>
            </div>
    </a>
            <p class="one-post__time"><?php the_time('d.m.y'); ?></p>
            
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">        
            <div class="one-post__bottom">
                <h3 class="one-post__title"><?php the_title(); ?></h3>
                <div class="one-post__button button">
                    <svg class="one-post__arrow-icon">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
                    </svg>
                </div>
            </div>
    </a>
</article>