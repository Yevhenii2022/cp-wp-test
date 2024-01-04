<?php
/*
Template Name: blog
*/
get_header();
?>
<section class="blog">
      <div class="blog__banner">
         <div class="container">
            <h1 class="blog__title"><?php the_field('banner_title'); ?></h1>
         </div>
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
               <?php get_template_part( 'template-parts/other-one-post'); ?>
                  
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
</section>



<?php get_footer(); ?>