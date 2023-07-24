<?php
// Contains settings for this theme

// Add the stylesheet wpdevs_load_scripts
// by hooking (adding) it to the 'wp_enqueue_scripts'
function wpdevs_load_scripts() {
  // wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
  wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
  wp_enqueue_style('wp-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null, 'all');
  wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', 'all', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function wpdevs_config() {
  register_nav_menus(
    array(
      'wp_devs_main_menu' => 'Main Menu',
      'wp_devs_footer_menu' => 'Footer Menu',
    )
  );

  // Add images to the header of each page
  $args = array(
    'height' => 225,
    'width' => 1920,
  );
  add_theme_support('custom-header', $args);
  // Adds featured image metabox on the WordPress editor for each post
  add_theme_support('post-thumbnails');
  // add site identity (custom logo)
  add_theme_support(
    'custom-logo',
    array(
      'width' => 200,
      'height' => 110,
      'flex-height' => true,
      'flex-width' => true
    )
  );
}
add_action('after_setup_theme', 'wpdevs_config', 0);

// Go to Appearnce > Widgets after this setup
add_action('widgets_init', 'wpdevs_sidebars');
function wpdevs_sidebars() {
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'sidebar-blog',
      'description' => ' This is the blog sidebar. You can add widgets here.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 1',
      'id' => 'services-1',
      'description' => 'First Service Area',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 2',
      'id' => 'services-2',
      'description' => 'Second Service Area',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 3',
      'id' => 'services-3',
      'description' => 'Third Service Area',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
}