<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__form">
                <?php get_template_part( 'template-parts/form.php'); ?>
             </div>
            <div class="footer__wrapper">
                <div class="footer__image">
                    <img class="footer__img" src="<?php the_field('footer_img', 'option'); ?>" alt="image">
                </div>
                <div class="footer__menu">
                    <?php wp_nav_menu([
                        'theme_location'       => 'footer',
                        'container'            => false,
                        'menu_class'           => 'menu__list',
                        'menu_id'              => false,
                        'echo'                 => true,
                        'items_wrap'           => '<ul id="%1$s" class="footer__list %2$s">%3$s</ul>',
                        ]);
                      ?>
                    <ul class="footer__document-menu">
                        <?php if (have_rows('documents', 'option')) : ?>
                            <?php while (have_rows('documents', 'option')) : the_row();?>
                        <li class="footer__document-item">
                            <a class="footer__document-link" href="<?php echo esc_attr(the_sub_field('document_link', 'option') ); ?>">
                                <?php the_sub_field('document_name', 'option'); ?></a>
                        </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>   
                </div>  
            </div>
        </div>
    </div>
      
      
</footer>
<?php wp_footer(); ?>
</body>

</html>