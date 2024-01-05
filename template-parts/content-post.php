<section class="post">     
    
            <div class="post-banner">
                <img class="post-banner__img" src="<?php the_field('banner_img'); ?>" alt="banner image">
                <div class="container">
                     <a href="<?php echo esc_attr(get_field('post_banner_button_link', 'options') ); ?>" class="post-banner__button button">
                        <svg class="post-banner__arrow-icon">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
                        </svg><?php the_field('post_banner_button_name', 'options'); ?>
                    </a>
                <h1 class="post-banner__title"><?php the_title(); ?></h1>
                <div class="post-banner__data">
                    <p class="post-banner__time"><?php the_time('d.m.Y'); ?></p>
                    <p class="post-banner__autor"><?php the_author(); ?></p>
                </div>
                </div>
               
               
            </div>
            <div class="container">
                <div class="post__content">
                    <?php the_content(); ?>
                 </div>
            </div>
            <div class="post__border"></div>
            
            <div class="container">
                <div class="post__social">
                    <p class="post__social-text"><?php the_field('icon_text', 'option') ?></p>
                    <ul class="post__social-items">
                        <li class="post__social-item"><a class="post__social-link" href="https://www.youtube.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" aria-label="Share on youtube"><svg class="post__social-icon" width="56px" height="56px">
                                <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#youtube"></use>
                            </svg></a></li>
                        <li class="post__social-item"><a class="post__social-link" href="https://www.instagram.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" aria-label="Share on instagram"><svg class="post__social-icon" width="56px" height="56px">
                                <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#instagram"></use>
                            </svg></a></li>
                        <li class="post__social-item"><a class="post__social-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" aria-label="Share on Facebook"><svg class="post__social-icon" width="56px" height="56px">
                                <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#facebook"></use>
                            </svg></a></li>
                    </ul>
                </div>
                
            
            </div>
            <?php get_template_part( 'template-parts/other-posts'); ?>
</section>