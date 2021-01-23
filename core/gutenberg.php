<?php 

function meutema_gutenberg_support() {
	// 1. Responsividade nas mídias incorporadas, como o bloco do YouTube, por exemplo.
	add_theme_support( 'responsive-embeds' );

	// 2. Estilo padrão de cada bloco.
	add_theme_support( 'wp-block-styles' );

	// 3. Alinhamentos de blocos: largura completa (Full) e largura ampla (Wide)
	add_theme_support( 'align-wide' );

	// 4. Paletas de cores.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Cor principal' ),
				'slug'  => 'principal',
				'color' => '#1779ba',
			),
			array(
				'name'  => __( 'Cor secundária' ),
				'slug'  => 'secundaria',
				'color' => '#767676',
			),
			array(
				'name'  => __( 'Sucesso' ),
				'slug'  => 'sucesso',
				'color' => '#3adb76',
			),
			array(
				'name'  => __( 'Atenção' ),
				'slug'  => 'atencao',
				'color' => '#ffae00',
			),
			array(
				'name'  => __( 'Alerta' ),
				'slug'  => 'alerta',
				'color' => '#cc4b37',
			),
		)
	);
	// 4. Desabilitar cores personalizadas.
	add_theme_support( 'disable-custom-colors' );

	// 4. Tamanhos de fonte personalizados.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => __( 'Pequeno' ),
				'size' => 12,
				'slug' => 'pequeno',
			),
			array(
				'name' => __( 'Normal' ),
				'size' => 16,
				'slug' => 'medio',
			),
			array(
				'name' => __( 'Grande' ),
				'size' => 20,
				'slug' => 'grande',
			),
		)
	);
	// 4. Desabilitar tamanhos de fonte personalizados.
	add_theme_support( 'disable-custom-font-sizes' );

	// 5. Carregar estilos personalizados no editor. Bom para aumentar a largura do conteúdo dentro do editor de blocos.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-styles.css' );
	// 6. Modo escuro, para aumentar a compatibilidade do editor quando você carrega um fundo escuro no back end.
	add_theme_support( 'dark-editor-style' );
}
add_action( 'after_setup_theme', 'meutema_gutenberg_support' );

?>