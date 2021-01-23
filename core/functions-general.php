<?php 

function rbDev_get_title_page(){
	$output = '';
	if( is_page() || is_single() ){
		$output .= get_the_title();
	}else if( is_category() ){
		$output .= single_cat_title();
	} else if( is_tag() ){
		$output .= single_tag_title();
	} else if( is_404() ){
		$output .= 'Página não encontrada';
	} else if( is_tax() ){
		$get_tax = get_query_var('taxonomy');
		$get_term_slug = get_query_var( $get_tax );
		$get_taxonomy = get_term_by( 'slug', $get_term_slug, $get_tax );

		$output .= $get_taxonomy->name; 
	} else if( is_archive() ){
		$output .= post_type_archive_title( '', false );
	} else if( is_search() ){
		$output .= 'Resultados encontrados para: ' . sanitize_text_field( get_search_query() );
	}

	return $output;
}