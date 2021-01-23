<?php 
function rbDev_load_js(){
	wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), 1, true );
	wp_enqueue_script( 'BootstrapJS', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), 1, true );
	wp_enqueue_script( 'Owl-JS', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), 1, true );
	wp_enqueue_script( 'Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js', array('jquery'), 1, true );
	wp_enqueue_script( 'jQueryMaskInput', get_template_directory_uri().'/assets/js/jquery.mask.min.js', array('jquery'), 1, true );
	//wp_enqueue_script( 'maskInit', get_template_directory_uri().'/assets/js/maskInit.js', array('jquery'), 1, true );
	wp_enqueue_script( 'Main-JS', get_template_directory_uri().'/assets/js/common.js', array( 'jquery' ), 2, true );
}
add_action( 'wp_enqueue_scripts', 'rbDev_load_js' );