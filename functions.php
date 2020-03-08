<?php 

function load_scripts(){

	// Carregando nossos cripts e folhas de stilos
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', 
		array(), '1.0', 'all');
}

// Adicionando load_scripts ao gancho
add_action('wp_enqueue_scripts', 'load_scripts');


// Registro dos Menus criados no Painel Admin Wordpress
register_nav_menus( 
	array(
		'main-menu' => 'Main Menu',
		'footer-menu' => 'Footer Menu'
	)
)

?>