<?php
/* Chargement des styles du parent. */
add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');
function wpchild_enqueue_styles()
{
    wp_enqueue_style('wpm-astra-style', get_stylesheet_directory_uri() . '/style.css'); // fichier css de base creation theme enfant
    wp_enqueue_style('wpm-astra-theme', get_stylesheet_directory_uri() . '/theme.css'); //fichier css pour modification
}




//essai ajout admin( tableau)
/*add_filter('wp_nav_menu_items', 'add_admin_link_menu', 10, 2); // hook wp nav

function add_admin_link_menu($items, $args)
{

    if (is_user_logged_in()) {
        $menu_items = explode('</li>', $items);
        $items = '<li id="menu-admin"><a href="' . admin_url() . '">Admin</a></li>';
        array_splice($menu_items, floor(count($menu_items) / 2), 0, $items);
        $items = implode('</li>', $menu_items);


    }

    return $items;

}*/

// function pour admin validé 
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2); //hook nav 

function add_admin_link($items, $args)
{

    //var_dump($args->theme_location);
    //pour rechercher quelle theme utilisé 
    if (is_user_logged_in() && $args->theme_location == 'primary') { // primary location 

        $items .= '<li id="menu-admin" ><a href="' . get_admin_url() . '">Admin</a></li>'; // ajout admin + lien 

    }

    return $items;

}


?>