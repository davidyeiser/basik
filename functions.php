<?php
function theme_setup() {
  /*
    Register our Nav Menus to be managed by WordPress.
    You'll find these in the WordPress Admin under Apperance > Menus
  */
  register_nav_menus([
    'main_navigation' => 'Main Navigation',
    'meta_links' => 'Meta Links'
  ]);
}

add_action('after_setup_theme', 'theme_setup');
?>
