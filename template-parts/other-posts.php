<div class="other-posts">
    <div class="container">
  
<?php
          
        $args = array(
          'post_type' => 'post',
          'post__not_in' => [ get_the_ID() ],
          'posts_per_page' => 3,
        );

        $query = new WP_Query( $args );
            query_posts( $args ); ?>
            
          <h2 class="other-posts__title"><?php the_field('latest-news_title', 'options') ?></h2>
          <div class="other-posts__list">
              
                <?php if ( have_posts() ) :
                while(have_posts()): the_post(); 

                    get_template_part( 'template-parts/other-one-post');

                endwhile; 
                
                wp_reset_query();
                else : ?>
                  <p class="nothing-found"><?php the_field('nothing-found', 'options') ?></p>
                <?php endif; ?>
          </div> 
    </div>
</div>        