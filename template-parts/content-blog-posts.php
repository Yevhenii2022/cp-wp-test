<?php
/*
Template Name: blog
*/
get_header();
?>
<section class="blog">
   <div class="container">
      <div class="blog__content">
         <div class="blog__banner">
            <h1 class="blog__title"></h1>
         </div>
         <div class="blog__wrapper">
            <div class="blog__post">
               <div class="blog_post-image"></div>
               <h2 class="blog__post-time"></h2>
               <p class="blog__post-title"></p>
            </div>
         </div>
      </div>
      <div class="blog__share">
         <p class="blog__text"></p>
         <ul class="blog__list">
            <li class="blog__link"></li>
            <li class="blog__link"></li>
            <li class="blog__link"></li>
         </ul>
      </div>
   </div>
</section>



<?php get_footer(); ?>