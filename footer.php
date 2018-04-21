<div style="clear:both;"></div>

<?php if (is_page('Inicio' ))
{
	?>
	<footer>
			<section class="contacto">
				<div class="contenedor">
					<h3 class="titulo">Contacto</h3>
					<!-- form action="" class="formulario">
						<input type="text" placeholder="Nombre" name="nombre" required>
						<input type="email" placeholder="Correo" name="correo" required>
						<textarea name="mensaje" placeholder="Mensaje"></textarea>
						<input class="boton" type="submit" value="Enviar">
					</form -->
					<?php dynamic_sidebar('contacto-home'); ?>
				</div>
			</section>
			<section class="publicidad">
				<div class="contenedor row">
					<h3 class="titulo">Entradas recientes</h3>
					<article class="anuncio col-md-8"><?php dynamic_sidebar('anuncio'); ?></article>
					<aside class="entradas-portada col-md-4"><?php dynamic_sidebar('entradas-portada'); ?></aside>
				</div>
			</section>
			<section class="redes-sociales">
				<div class="contenedor">
					<a href="https://twitter.com/orlandoreynoso" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/orlandozr" class="linkedin"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/orlandoreynoso" class="github"><i class="fa fa-github"></i></a>
				</div>
			</section>
	</footer>

<?php
}

else{

	?>
<div style="clear:both;"></div>
<footer class="claro">
	<section class="redes-sociales">
		<div class="contenedor">
			<a href="https://twitter.com/orlandoreynoso" class="twitter"><i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/in/orlandozr" class="linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="https://github.com/orlandoreynoso" class="github"><i class="fa fa-github"></i></a>
		</div>
	</section>
</footer>

<?php

}
?>

<?php  wp_footer(); ?>
</body>
</html>
