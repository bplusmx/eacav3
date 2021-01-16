<?php
/**
 * Footer
 *
 * @package acapulco
 */

?>
<div class="container">
	<div class="col-sm-4">
		<?php dynamic_sidebar( 'before-footer-1-3' ) ?>
	</div>
	<div class="col-sm-4">
		<?php dynamic_sidebar( 'before-footer-2-3' ) ?>
	</div>
	<div class="col-sm-4">
		<?php dynamic_sidebar( 'before-footer-3-3' ) ?>
	</div>
</div>

<div class="container">
	<div class="col-sm-3">
		<?php dynamic_sidebar( 'before-footer-1-4' ) ?>
	</div>
	<div class="col-sm-3">
		<?php dynamic_sidebar( 'before-footer-2-4' ) ?>
	</div>
	<div class="col-sm-3">
		<?php dynamic_sidebar( 'before-footer-3-4' ) ?>
	</div>
	<div class="col-sm-3">
		<?php dynamic_sidebar( 'before-footer-4-4' ) ?>
	</div>
</div>

</div> <!-- /.page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="col-sm-4">
			<?php dynamic_sidebar( 'footer-1-3' ) ?>
		</div>
		<div class="col-sm-4">
			<?php dynamic_sidebar( 'footer-2-3' ) ?>
		</div>
		<div class="col-sm-4">
			<?php dynamic_sidebar( 'footer-3-3' ) ?>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-4">
			<?php get_template_part( 'partials/newsletter' ) ?>
		</div>
		<div class="col-sm-4">
			<?php get_template_part( 'partials/facebook-likebox' ) ?>
		</div>
		<div class="col-sm-4">
			<?php get_template_part( 'partials/destinos' ) ?>
		</div>
	</div>

	<div class="container" style="text-align: center">
		<ul class="nav nav-pills">
		<?php  wp_list_pages( 'title_li=&child_of=1680&exclude=2' ); ?>
		</ul>

		<div>
			e-Acapulco.com &reg; 2001-<?php echo date( 'Y' ) ?> | Comentarios y Sugerencias a <a href="mailto:info@e-acapulco.com">info@e-acapulco.com</a>
			<br />Acapulco, Guerrero
		</div>


		<p><br />Powered By: <a style="color: #878; font-size: 90%" href="http://justoalblanco.com/?utm_source=clients&utm_medium=banner&utm_term=e-acapulco&utm_content=footertext&utm_campaign=branding">Justo al Blanco</a></p>
	</div>
</footer>
