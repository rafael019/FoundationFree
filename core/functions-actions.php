<?php 
// Customiza página de login
function login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url("<?php logoLink(); ?>");
			padding-bottom: 0px;
			background-size:0px;
			width: 100%;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

// Itens que serão exibidos somente no painel do administrador
if( !current_user_can( 'administrator')){
	function remove_acf_menu() {
	remove_menu_page('index.php'); // Painel
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('upload.php'); // Media
	remove_menu_page('edit-comments.php'); // Comentários
	remove_menu_page('themes.php'); // Aparência
	remove_menu_page('plugins.php'); // Plugins
	remove_menu_page('tools.php'); // Ferramentas
	remove_menu_page('options-general.php'); // Configurações
	remove_menu_page('edit.php?post_type=acf-field-group'); // Advance Custom Fields
	remove_menu_page('cptui_main_menu'); // Custom Post Types UI
	remove_menu_page('wpcf7'); // Contact Form 7
}
add_action( 'admin_menu', 'remove_acf_menu', 999);
}