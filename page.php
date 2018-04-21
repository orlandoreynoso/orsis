<?php 

/*
Template Name: Interiores
 */

 get_header();


?>

<section class="contenedor">
  <div class="row single">
    
  <article class="noticias col-md-8">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>    

        <div class="entrada-pagina">

        <h1 class="titulo-single"><?php the_title(); ?></h1>
        <?php // echo 'estoy en page'; ?>

                  <?php
          // Start the loop.
                  /*
       echo  'ESTOY EN PAGE';
          $pagina = get_the_id();
    echo $pagina;*/

          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 
        </div>  
  </article>

  <aside class="col-md-4 aside">
      <div class="entradas-general col-md-4"><?php dynamic_sidebar('entradas-sidebar'); ?></div>
  </aside>

</div>
</section>
</div>  


<?php get_footer();  ?>