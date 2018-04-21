<?php 


function menuPrincipal(){

      $args = array(
      'theme_location' => 'menu-principal',
      'menu' => 'mirra',
      /* ===== para agregar un contenedor al ul ====*/      
      'container' => 'nav',
      'container_class' => 'menu',
      'container_id' => 'div03',
      /* ===== Para el ul principal ====*/      
      'menu_class' => '03',
      'menu_id' => '04',
      /*================================*/
      'echo' => true,
      'fallback_cb' => 'wp_page_menu',
      'before' => '',
      'after' => '',
      'link_before' => '',
      'link_after' => '',
      'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
      'depth' => 0,
      'walker' => ''
      );

      wp_nav_menu( $args ); 

}



?>