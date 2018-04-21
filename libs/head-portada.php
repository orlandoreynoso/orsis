<header>
	<div class="head-portada">
	<div class="contenedor">
		<?php //  menuPrincipal();   ?>
		
		<?php get_template_part( 'template/menu', 'frontpage'); ?>



		<div class="contenedor-texto">
			<div class="texto">
				<h1 class="nombre"><?php bloginfo('name'); ?></h1>
				<h2 class="profesion"><?php bloginfo('description'); ?></h2>
			</div>
		</div>
	</div>
	</div>
</header>