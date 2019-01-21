<?php

function doliconnect_scripts_styles_register() { 
  
  //wp_enqueue_style( 'bootstrap-social', plugins_url( 'doliconnect/includes/css/bootstrap-social.css'));
 // wp_enqueue_style('bootstrap-social');
}

add_action( 'wp_enqueue_scripts', 'doliconnect_scripts_styles_register' );

function doliconnect_enqueues() { 

/* Styles */
if ( empty(get_theme_mod( 'ptibogxivtheme_css')) || get_theme_mod( 'ptibogxivtheme_css') == 'css') {
$type='bootstrap';
$css='css';
$version='4.2.1'; 
} else {
$type='bootswatch';
$css=get_theme_mod( 'ptibogxivtheme_css');
$version='4.2.1';  
}

	wp_enqueue_style( 'bootstrap',  plugins_url( 'doliconnect/includes/css/'.$type.'/'.$css.'/bootstrap.min.css'), array(), $version);
  
	wp_enqueue_script( 'bootstrap-js', plugins_url( 'doliconnect/includes/js/scripts.min.js'), array('jquery'), ' ', true );

	wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/js/all.js', array(), '5.6.3' );
  

} 

?>