<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css','astra-contact-form-7' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Fonction pour ajouter un lien "Admin" dans le menu principal
function ajouter_lien_admin_dans_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et s'il est un administrateur
    if ( is_user_logged_in() && current_user_can( 'administrator' ) ) {
        // Ajouter le lien "Admin" à la fin du menu
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_dans_menu', 10, 2 );




