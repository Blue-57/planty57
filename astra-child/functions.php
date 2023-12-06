<?php
/* Chargement des styles du parent. */
add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');
function wpchild_enqueue_styles() {
    wp_enqueue_style('wpm-astra-style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('wpm-astra-theme', get_stylesheet_directory_uri().'/theme.css'); //fichier css pour modification
}





add_filter('wp_nav_menu_items', 'add_admin_link_menu', 10, 2); // hook wp nav

function add_admin_link_menu($items, $args) {

    if(is_user_logged_in()) {
        $menu_items = explode('</li>', $items);
        $items = '<li id="menu-admin"><a href="'.admin_url().'">Admin</a></li>';
        array_splice($menu_items, floor(count($menu_items) / 2), 0, $items);
        $items = implode('</li>', $menu_items);
    }

    return $items;

}
?>