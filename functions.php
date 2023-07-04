<!-- Contains settings for this theme -->
<?php

// Add the stylesheet wpdevs_load_scripts
// by hooking (adding) it to the 'wp_enqueue_scripts'
function wpdevs_load_scripts() {
  wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');