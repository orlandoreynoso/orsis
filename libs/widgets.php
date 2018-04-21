<?php 
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'=>'contacto home',
        'id'=>'contacto-home'));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Anuncio',
		'id'   => 'anuncio'
	));
}

if (function_exists('register_sidebar')) {
		$args2 = array(
			'name' => 'Entradas sidebar',
			'id'   => 'entradas_sidebar'
		);	
		register_sidebar( $args2 );	
}
if (function_exists('register_sidebar')) {
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => 'Entradas portada',
			'id'            => 'entradas-portada',
			'description'   => '',
		);
	
		register_sidebar( $args );
	
}
?>
