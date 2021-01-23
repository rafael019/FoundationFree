<?php 
function bz_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Adicionando o nome do site
	$title .= get_bloginfo( 'name', 'display' );

	// Adicione a descrição do site para a página inicial / principal.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Adicione um número de página, se necessário.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( 'Page %s', max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'bz_wp_title', 10, 2 );


// Adicionar classe "img-fluid" a todas as imagens do Worpdress
function add_img_class($class) {
    return $class . ' img-fluid';
}
add_filter( 'get_image_tag_class', 'add_img_class' );

function add_post_image_class($attr) {
    $attr['class'] .= 'img-fluid';
    return $attr;
}
add_filter('wp_get_attachment_image_attributes','add_post_image_class');