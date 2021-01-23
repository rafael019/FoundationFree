<?php 
//FRONT END
function rbDev_load_css(){
	wp_enqueue_style( 'BootstrapCSS', get_template_directory_uri().'/assets/css/bootstrap.min.css', array() );
	wp_enqueue_style( 'Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js', array());
	wp_enqueue_style( 'owlCSS', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array());
	wp_enqueue_style( 'style_theme', get_template_directory_uri().'/assets/css/style.css', array() );
}
add_action( 'wp_enqueue_scripts', 'rbDev_load_css' );

//back end
function rbDev_load_admin_css(){
	wp_enqueue_style( 'rbDev_style_admin', get_template_directory_uri() . '/assets/css/style-admin.css', array() );
}
add_action( 'admin_enqueue_scripts', 'rbDev_load_admin_css' );