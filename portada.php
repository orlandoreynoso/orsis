<?php
/*

Template Name: Portada
*/

 get_header(); 


?>


	<section class="main">
		<section class="acerca-de">
			<div class="contenedor">
				<div class="foto">
					<img src="<?php echo IMAGES; ?>/orlandoreynoso.jpg" alt="Orlando Reynoso" width="115" height="115">
				</div>
				<div class="texto">

					<h3 class="titulo">Acerca de</h3>

						<!-- INICIO DEL CICLO DE CONTENIDO -->
		    <!-- h1><?php // the_title(); ?></h1 -->
         <?php
          while ( have_posts() ) : the_post();
//          get_template_part( 'content', 'page' );
          the_content();           
          endwhile; ?>

						<!-- FIN DEL CICLO SI HAY CONTENIDO -->

				</div>
			</div>
		</section>
		<section class="trabajos">
			<div class="contenedor">
				<h3 class="titulo">Trabajos</h3>
				<div class="contenedor-trabajos">
					<div class="trabajo">
						<div class="thumb">
							<a href="http://www.canalcatolico.tv/">
								<img src="<?php echo IMAGES; ?>/trabajos/Canal-Arquidiocesano.jpg" alt="Canal Arquidiocesano">
							</a>
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.canalcatolico.tv/">Canal Arquidiocesano</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.grupodeoracionmariaauxiliadora.net/">
								<img src="<?php echo IMAGES; ?>/trabajos/grupodeoracionmariaauxiliadora.jpg" alt="Grupo de Oración María Auxiliadora">
							</a>
							
						</div>
						<div class="descripcion">
							<p class="nombre">
								<a href="http://www.grupodeoracionmariaauxiliadora.net/">Grupo de oración María Auxiliadora</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.canaljesustv.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/canaljesustv.jpg" alt="Canal Jesustv">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.canaljesustv.com/">Canal JessusTv</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.fecreativa.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/fecreativa.jpg" alt="Fe creativa">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.fecreativa.com/">Fe creativa</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">
						<div class="thumb">
							<a href="http://www.metanoiaradio.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/metanoiaradio.jpg" alt="Metanoia Radio">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.metanoiaradio.com/">Metanoia Radio</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href=http://www.cocodrilosa.com/2017/inicio.php">
								<img src="<?php echo IMAGES; ?>/trabajos/cocodrilosa.jpg" alt="Cocodrilo S.A: De todo en Electrónica">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.cocodrilosa.com/2017/inicio.php">Cocodrilo, S.A</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://travelzone.com.gt/">
								<img src="<?php echo IMAGES; ?>/trabajos/travelzone.jpg" alt="Travel zone: Agencia de Viajes">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://travelzone.com.gt/">TravelZone</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://mscguatemala.org/">
								<img src="<?php echo IMAGES; ?>/trabajos/mscguatemala.jpg" alt="Misioneros del Sagrado Corazón de Jesús">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://mscguatemala.org/">Misioneros del Sagrado Corazón de Jesús</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.sendergodoy.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/sendergodoy.jpg" alt="Sender Godoy: Productor Audiovisual">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.sendergodoy.com/">Sender Godoy: Productor Audiovisual</a></p>
							<p class="categoria">HTML - PHP - BAKER</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.ministeriocatolicojerico.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/ministeriocatolicojerico.jpg" alt="Ministerio católico Jericó">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.ministeriocatolicojerico.com/">Ministerio Católico Jericó</a></p>
							<p class="categoria">HTML - PHP - WORDPRESS</p>
						</div>
					</div>																				
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.donrenarte.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/donrenarte-web.jpg" alt="DonRenarte: Fotografía profesional">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.donrenarte.com/">DonRenarte</a></p>
							<p class="categoria">HTML - PHP - BAKER</p>
						</div>
					</div>
					<div class="trabajo">	
						<div class="thumb">
							<a href="http://www.lhindustrias.com/">
								<img src="<?php echo IMAGES; ?>/trabajos/lhindustrias.jpg" alt="Lh Industrias: Venta de todo equipo y material para alta costura">
							</a>							
						</div>
						<div class="descripcion">
							<p class="nombre"><a href="http://www.lhindustrias.com/">Lh Industrias</a></p>
							<p class="categoria">HTML - PHP - BAKER</p>
						</div>
					</div>
				</div>
			</div>
			
		</section>
	</section>

<?php get_footer(); ?>