<?php

register_nav_menu( 'Header', 'Header Menu');
register_nav_menu( 'Footer', 'Footer Menu');
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/style.css' ) )
            $uri = get_template_directory_uri() . '/style.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

function add_admin_link($items, $args){
    if ($args->theme_location == 'Header' && is_user_logged_in()) {
        // Créer le lien "Admin"
        $admin_link = '<li class="navigation"><a title="Admin" href="'. esc_url(admin_url()) .'">' . __('Admin') . '</a></li>';

        // Séparer les éléments en un tableau
        $menu_items = explode('</li>', $items);

        // Insérer le lien "Admin" entre les deux premiers éléments
        array_splice($menu_items, 1, 0, $admin_link);

        // Réassembler les éléments en une chaîne
        $items = implode('</li>', $menu_items);
    }
    return $items;
}


// END ENQUEUE PARENT ACTION
