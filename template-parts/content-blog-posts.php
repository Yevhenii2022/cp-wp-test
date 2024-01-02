<?php
/*
Template Name: blog
*/
get_header();
?>
<section class="blog">
      <div class="blog__banner">
            <h1 class="blog__title"><?php the_field('banner_title'); ?></h1>
      </div>
   <div class="container">
           
         <div class="blog__wrapper">
            <?php	
            global $post;
                 $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                   $query = new WP_Query([
                    'posts_per_page' => 9,
                    'paged' => $current_page,
                    'orderby' => 'date',
                    ]);

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                     ?> 
            <div class="blog__post">
               <div class="blog__post-image">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                     <?php the_post_thumbnail(); ?> 
                  </a>
               </div>
               <p class="blog__post-time"><?php the_time('d.m.y'); ?></p>
               <div class="blog__post-bottom">
                   <h3 class="blog__post-title"><?php the_title(); ?></h3>
                   <a href="<?php the_permalink(); ?>" class="blog__button button"><svg class="blog__arrow-icon">
                        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </a>
               </div>
              
            </div>
          
        
          <?php }/*end while*/ ?>
         </div>
          <!-- pagination  -->
      <?php
            $posts_per_page = 9;
            $total_pages = $query->max_num_pages;
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $pagination_args = array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => (''),
                'next_text' => (''),
            );
            echo '<div id="pagination" class="pagination">';
            echo paginate_links($pagination_args);
            echo '</div>';

          }
            wp_reset_postdata(); 
        ?> 
         
      
   </div>
      <!-- <div class="blog__share">
         <p class="blog__text"></p>
         <ul class="blog__list">
            <li class="blog__link"></li>
            <li class="blog__link"></li>
            <li class="blog__link"></li>
         </ul>
      </div> -->
  
</section>



<?php get_footer(); ?>