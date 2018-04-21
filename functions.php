<?php
/* devuelve el directorio de stilo de css, y se le asigna a temppath */

define('TEMPPATH',get_bloginfo('stylesheet_directory'));

/*En esto concatenamos la carpeta images*/

define('IMAGES',TEMPPATH. "/images");

//define('HOME',bloginfo('url' ));

// Esto es para aderir una imágen destacada.

add_theme_support('post-thumbnails');

//add_image_size( $name, $width, $height, $crop );


include (TEMPLATEPATH. '/inc/estilos.php');
//include get_template_directory() . '/inc/estilos.php';
include get_template_directory() . '/libs/menus.php';
include get_template_directory() . '/libs/widgets.php';
include get_template_directory() . '/libs/the_breadcrumb.php';
include get_template_directory() . '/libs/entradas.php';
include get_template_directory() . '/libs/totop.php';
include get_template_directory() . '/libs/paginacion.php';
paginacion();


?>
