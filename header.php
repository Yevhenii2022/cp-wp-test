<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title></title>
</head>

<body>
<header class="header">
        <div class="container">
            <div class="header__content">
                <div class="header__logo">
                    <?php
                    if (has_custom_logo()) {
                        echo get_custom_logo();
                    }
                    ?>
                </div>
                <div class="header__menu" id="">
                    <div class="header__nav">
                        <div class="header__sertificates">
                            <a class="header__sertificates-btn" target="_blank" aria-label="read more">Сертифікати<svg class="header__sertificates-icon" width="56px" height="56px">
                                <use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow-down"></use>
                            </svg></a>
                            <div class="header__sertificates-submenu">
                                <ul class="header__sertificate-items">
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                    <li>Система управління інжинірінгу пожежної безпеки</li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__menu-wrapper">
                            <?php wp_nav_menu([
                                    'theme_location'       => 'header',
                                    'container'            => false,
                                    'menu_class'           => 'menu__list',
                                    'menu_id'              => false,
                                    'echo'                 => true,
                                    'items_wrap'           => '<ul id="%1$s" class="header__list %2$s">%3$s</ul>',
                                ]);
                                ?>
                            <ul class="header__document-menu">
                                <?php if (have_rows('documents', 'option')) : ?>

                                   <?php while (have_rows('documents', 'option')) : the_row();?>
                                     <li class="header__document-item">
                                       <a class="header__document-link" href="<?php echo esc_attr(the_sub_field('document_link', 'option') ); ?>"><?php the_sub_field('document_name', 'option'); ?></a>
                                     </li>
                               <?php endwhile; ?>
                            <?php endif; ?>
                            </ul>
                           
                            
                         </div>
                          <div class="header__last">
                                <?php get_template_part('template-parts/last-part'); ?>
                            </div>
                    <a class="header__phone" href="tel:+<?php the_field('header_phone', 'option'); ?>" >
                        <?php the_field('header_phone', 'option'); ?></a>
                </div>
                <div class="burger">
                    <span class="burger__title">Меню</span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>