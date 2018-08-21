<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

	</div><!-- .col-full -->
</div><!-- #content -->

<div class="green">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<?php $home = new WP_Query( array( 'post_type' => 'textos_home', 'posts_per_page' => '1' )); ?>
				<?php while ( $home->have_posts() ) : $home->the_post(); ?>
				<div class="col s12 l7 margin20 padding40">
					<span class="white-text left-align">
						<?php the_field('textos_do_rodape'); ?>
					</span>
				</div>
				<?php endwhile; ?>
  				<?php wp_reset_query(); ?>
				<div class="col hide-on-med-and-down l4 right margin20 padding40">
					<p class="white-text bold right-align">MENU DE NAVEGAÇÃO</p>
					<ul class="right-align links-rodape">
						<li><a href="/">HOME</li>
						<li><a href="/#oquee">O QUE É</li>
						<li><a href="/#paraqueserve">PARA QUE SERVE</li>
						<li><a href="/como-comprar">COMO COMPRAR</li>
						<li><a href="/medicos">MÉDICOS</li>
						<li><a href="/produtos">PRODUTOS</li>
						<li><a href="/noticias">NOTÍCIAS</li>
						<li><a href="/contato">CONTATO</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="page-footer">
	<div class="container">
		<div class="row">
			<?php $home = new WP_Query( array( 'post_type' => 'textos_home', 'posts_per_page' => '1' )); ?>
				<?php while ( $home->have_posts() ) : $home->the_post(); ?>
					<div class="col s12 padding20">
						<h5 class="white-text"><?php the_field('nome_da_empresa_do_rodape'); ?></h5>
						<span class="grey-text text-lighten-4">
							<?php the_field('endereço_do_rodape'); ?>
						</span>
						<a href="/termos-de-uso">Termos de Uso</a> | <a href="/politica-de-privacidade">Política de Privacidade</a> | <a href="/politica-de-devolucao">Política de Devolução</a>
					</div>
				<?php endwhile; ?>
  			<?php wp_reset_query(); ?>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Todos os direitos reservados © 2018
		</div>
	</div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/bootstrap-table.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/filter-control/bootstrap-table-filter-control.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/funcoes.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/materialize.min.js"></script>

</body>
</html>
