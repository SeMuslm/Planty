<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_theme_support('menus');
register_nav_menu( 'Header', 'Header Menu');
register_nav_menu( 'Footer', 'Footer Menu');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

?>
