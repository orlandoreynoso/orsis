

<!-- Archivo de cabecera global de Wordpress -->
<?php 


/*

Template Name: Categorias

 */

 ?>


<?php get_header(); ?>

<section class="contenedor">
<div class="row single"> 


  <article class="noticias col-md-8">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>        

   <?php // echo 'EStoy en category'; ?>

<!-- Título de categoría -->
<!-- h2><?php single_cat_title(); ?></h2 -->
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>



    <?php while ( have_posts() ) : the_post(); ?>

<div class="entradas-noticias">

<div class="descripcion_categoria">
  <div class="fecha">
    <span class="icon-calendar fa fa-calendar"></span>
    <span class="date"><?php the_time('j F, Y'); ?></span>
  </div>
  <div class="lista row">
    <span class="icon-list fa fa-cogs col-md-4"></span>     
    <span class="cat col-md-8"><?php the_category (' | '); ?></span>   
  </div>
</div>

  <div class="contenido">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();  ?>
  </div>

   
</div>

    <?php endwhile; ?>

<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>


<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

  </article>

  <aside class="col-md-4 aside">
      <div class="entradas-general col-md-4"><?php dynamic_sidebar('entradas-sidebar'); ?></div>
  </aside>

</div>
</section>

</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>