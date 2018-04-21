<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>


<section class="contenedor">
<div class="row single">
  
  <article class="noticias col-md-8">

  <?php // echo 'estoy en single';  ?>

<!-- Contenido del post -->
<?php if ( have_posts() ) : the_post(); ?>

<h1 class="titulo-single"><?php the_title(); ?></h1>

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


  <div class="total">

    <?php // echo "ESTOY EN EL SINGLE"; ?>

<?php the_content(); ?>


  <!-- address>Por <?php the_author_posts_link() ?></address -->
  <!-- Comentarios -->
  <?php comments_template(); ?>

  </div>  

  <?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>



<?php endif; ?>


  </article>
  <aside class="col-md-4 aside">
      <div class="entradas-general col-md-4"><?php dynamic_sidebar('entradas-sidebar'); ?></div>
  </aside>

</div>  
</section>


</div>  

<?php get_footer(); ?>