<?php 
require_once 'core/index.php';

// Limpar o header do Wordpress
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Funções do Tema
function rbDev_settings_theme(){
	// Adiciona suporte aos Thumbnails
	add_theme_support( 'post-thumbnails' ); 	
	//exemplo de como criar tamanhos personalizados de imagens
	//add_image_size( 'primeiroteste', '350', '50', true );

	// Registra Menus
	register_nav_menu( 'header', 'Header' );
	register_nav_menu( 'footer', 'Footer' );

	// Registra a define tamanho do Custom Logo
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 260,
		'flex-height' => true,
	));

	// Otimização de Títulos
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'rbDev_settings_theme' );


// Link do Logo Customizado
function logoLink(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	echo $image[0];
}

// Sidebar
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name' => 'Barra Lateral',
			'id'   => 'sidebar',
			'description' => 'Sidebar da Página de Posts',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget_titulo">',
			'after_title' => '</h2>',
		)
	);
}


// Paginação no estilo Boostrap 4
if ( !function_exists( 'paginate_links_bs' ) ) {
	function paginate_links_bs(){
		global $wp_query;
		ob_start();
		$pagination =  paginate_links( array(
		'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'type' => 'array',
		'prev_text'          => __('<span></span> Anterior'),
		'next_text'          => __('Próximo <span></span>'),
		) ); 
		if ( ! empty( $pagination ) ) : ?>
		<nav aria-label="Page navigation example">
		<ul class="pagination">
		<?php foreach ( $pagination as $key => $page_link ) : ?>
		  <li class="page-item<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo str_replace( 'page-numbers', 'page-link', $page_link ); ?></li>
		<?php endforeach ?>
		</ul>
		</nav>
		<?php endif;
		echo ob_get_clean();
	}
}