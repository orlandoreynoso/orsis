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




function marca_sd(){ ?>
  <a class="sd_who" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h2 class="sd_logo">Sender <span>Audiovisual</span></h2>
    <h3 class="sd_slogan">Video & Fotografía</h3>
  </a>
  <?php
}

function logo_sd(){
$logo = IMAGES.'/logo_SenderAudiovisual.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Sender Audiovisual"></a>
<?php
}


function menu_sd(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );
    wp_nav_menu($args);
}

function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','godoy')
  ));
}

add_action('init','menus_generales');

?>
