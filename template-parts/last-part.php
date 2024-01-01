
   
        <div class="last-block">
            <p class="last-block__first-text"><?php the_field('first_text', 'options'); ?></p>
            <div class="last-block__image">
                <a href="<?php echo esc_attr(get_field('facebook', 'options')); ?>">
                <img class="img" src="<?php the_field('logo', 'options'); ?>" alt="image">
                </a>
            </div>
            <p class="last-block__second-text"><?php the_field('second_text', 'options'); ?></p>
        </div>    
    
