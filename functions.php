<?php

// Reset CSS
function add_normalize_CSS() {
wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Activer les widgets de la barre latérale
function add_widget_Support() {
register_sidebar( array(
'name'          => 'Sidebar',
'id'            => 'sidebar',
'before_widget' => '<div>',
'after_widget'  => '</div>',
'before_title'  => '<h2>',
'after_title'   => '</h2>',
) );
}
add_action( 'widgets_init', 'add_Widget_Support' );

// Menu de navigation personnalisé pour permettre l’utilisation de la fonction Apparence -> Menu dans le panneau d’administration
function add_Main_Nav() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'add_Main_Nav' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'sml_size', 300 ); 
add_image_size( 'mid_size', 600 ); 
add_image_size( 'lrg_size', 1200 ); 
add_image_size( 'sup_size', 2400 );