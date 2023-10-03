<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'astra_child_style' );
  function astra_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}


/**
 * Your code goes below.
 */

 /*erreur ob_end_flush */
 remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
 add_action( 'shutdown', function() {
	while ( @ob_end_flush() );
 } );

 function ajouter_bouton_menu($items, $args) {
    if ($args->theme_location == 'menu_1') { // Remplacez 'menu-principal' par le nom de votre emplacement de menu
        $bouton = '<li class="menu-item menu-item-button"><a href="URL_DU_BOUTON" >Texte du bouton</a></li>';
        $items .= $bouton;
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'ajouter_bouton_menu', 10, 2);