<?php 



/*

Template Name: Blogear
Template Post Type: post, page, product

 */



 get_header();


?>

<!---********************************************* -->

<section class="contenedor">
  <div class="row single">
    

  <article class="noticias col-md-8">
	<div class="mapeo">
		<!-- Breadcrumb -->
		<?php the_breadcrumb(); ?>
		<!-- Fin Breadcrumb -->
	</div> 

	<?php // echo 'estoy en index'; ?>

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
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();  ?>
  </div>

   
</div>


	<?php endwhile; ?>
				<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>									

	<?php else: ?>
				
<p><?php _e('Ups!, no hay entradas.'); ?></p>

<?php endif; ?>




  </article>
  <aside class="col-md-4 aside">
      <div class="entradas-general col-md-4"><?php dynamic_sidebar('entradas-sidebar'); ?></div>
  </aside>
  </div>
</section>
</div>	

<!---********************************************* -->




<?php  get_footer(); ?>