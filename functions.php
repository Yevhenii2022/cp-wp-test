<?php
if (!function_exists('cp_wp_test_setup')) {
  function cp_wp_test_setup()
  {
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'cp_wp_test_setup');
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'cp_wp_test_scripts');

function cp_wp_test_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/styles/swiper-bundle.min.css', array());
  wp_enqueue_style('cp-wp-test', get_template_directory_uri() . '/assets/styles/main.css', array('swiper-style', 'main'));
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');

  wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('home-jquery', get_template_directory_uri() . '/assets/scripts/template-scripts/jquery.min.js', array(), false, false);
  wp_enqueue_script('cp-wp-test', get_template_directory_uri() . '/assets/scripts/main.js', array('swiper-scripts', 'home-jquery'), false, true);

  if (is_page_template('templates/home.php')) {
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
    wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);
  }

  if (is_page_template('templates/about.php')) {
    wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main'));
    wp_enqueue_script('about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true);
  }

  if (is_page_template('templates/contacts.php')) {
    wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main'));
    wp_enqueue_script('contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true);
  }

  if (is_page_template('templates/powers.php')) {
    wp_enqueue_style('powers-style', get_template_directory_uri() . '/assets/styles/template-styles/powers.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/content-blog-posts.php')) {
    wp_enqueue_style('content-blog-posts-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-blog-posts.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/form.php')) {
    wp_enqueue_style('form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/form.css', array('main'));
    wp_enqueue_script('form-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/form.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/tooltip.php')) {
    wp_enqueue_style('tooltip-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/tooltip.css', array('main'));
    wp_enqueue_script('tooltip-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/tooltip.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/accordion.php')) {
    wp_enqueue_style('accordion-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/accordion.css', array('main'));
    wp_enqueue_script('accordion-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/accordion.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/last-part.php')) {
    wp_enqueue_style('last-part-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/last-part.css', array('main'));
  }
  if (is_singular() && locate_template('template-parts/other-one-post.php')) {
    wp_enqueue_style('other-one-post-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/other-one-post.css', array('main'));
    wp_enqueue_script('other-one-post-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/other-one-post.js', array(), false, true);
  }
  if (is_singular() && locate_template('template-parts/other-posts.php')) {
    wp_enqueue_style('other-posts-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/other-posts.css', array('main'));
  }
  if (is_singular() && locate_template('template-parts/content-post.php')) {
    wp_enqueue_style('content-post-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-post.css', array('main'));
  }
}

function enqueue_custom_assets()
{
  // Підключення стилів для single-iso.php
  if (is_single() && get_post_type() === 'iso') {
    wp_enqueue_style('custom-iso-styles', get_template_directory_uri() . '/assets/styles/template-styles/iso-post.css');
    wp_enqueue_script('custom-iso-script', get_template_directory_uri() . '/assets/scripts/template-scripts/iso-post.js', array('jquery'), '', true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

/** add fonts */
function add_custom_fonts()
{
  wp_enqueue_style('graphik_lcg_regular', get_template_directory_uri() . '/src/fonts/GraphikLCG-Regular.woff', array(), null);
  wp_enqueue_style('graphik_lcg_medium', get_template_directory_uri() . '/src/fonts/GraphikLCG-Medium.woff', array(), null);
}

add_action('wp_enqueue_scripts', 'add_custom_fonts');


/** Register menus */
function cp_wp_test_menus()
{
  $locations = array(
    'header' => __('Header Menu', 'cp-wp-test'),
    'footer' => __('Footer Menu', 'cp-wp-test'),
  );

  register_nav_menus($locations);
}

add_action('init', 'cp_wp_test_menus');


/** ACF add options page */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'   => 'theme-general-settings',
  ));
}
