<?php

/* Chargement des styles du parent. */
add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');
function wpchild_enqueue_styles()
{
    wp_enqueue_style('wpm-astra-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('wpm-astra-theme', get_stylesheet_directory_uri() . '/theme.css'); //fichier css pour modification
}


?>