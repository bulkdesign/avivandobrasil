<style type="text/css">
	
.col-full {
  max-width: 100%;
  padding: 0;
}
  
.destaque-post {
  width:100%;
  height:450px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.destaque-post h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<!-- TOPO -->
<div class="destaque-post" style="background: url('<?php echo $featured_img_url; ?>');background-size:cover;background-repeat: no-repeat;">
	<div class="row">
		<div class="col s12">
			<?php do_action( 'tp_event_single_event_title' ); ?>
		</div>
		<div class="col s12">
			<h3 class="white-text bold">Aqui vem o local do evento</h3>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12 m4 push-m4">
			<?php do_action( 'tp_event_loop_event_countdown' ); ?>
		</div>
		<div class="col s12">
			<div class="col s12 m8 margin50">
				<div class="justify marginb50">
					<!-- Descricao -->
					<h3 class="bold">Descrição do evento</h3>
					<?php the_content(); ?>
					<!-- Instrucoes -->
					<h3 class="bold">Instruções</h3>
					<?php the_field('instrucoes'); ?>
					<!-- Dados do anunciante -->
					<h3 class="bold">Dados do anunciante</h3>
					<table class="center">
						<thead style="background:#F2F2F2">
							<tr>
								<th class="center">Nome da empresa</th>
								<th class="center">Telefone</th>
								<th class="center">Site</th>
								<th class="center">E-mail</th>
								<th class="center">Redes Sociais</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="center">Igreja Batista Alameda</td>
								<td class="center">(41) 3380-4106</td>
								<td class="center"><a href="http://www.igrejabatistaalameda.com.br/conferencia">Clique aqui</a></td>
								<td class="center">comunicacao@alameda.org.br</td>
								<td class="center">
									<img class="left paddingr5" width="24" class="image-center" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/facebook.png" /> 
									<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/instagram.png" /> 
									<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/whatsapp.png" /> 
								</td>
							</tr>
						</tbody>
					</table>
					<!-- Compartilhe -->
					<span>Compartilhe este evento:</span>
					<?php echo do_shortcode('[addtoany buttons="facebook,whatsapp,linkedin,twitter"]'); ?>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="col s12 m8 push-m2 margin50">
					<div class="slider">
						<?php while( have_rows('fotos') ): the_row(); 
							$image = get_sub_field('adicionar_imagem');
							?>
							<ul class="bxslider">
								<li>
									<img style="width: 100%; height:auto;background-size:contain;background-position:center;background-repeat:no-repeat;background-color:#FFFFFF;" src="<?php echo $image; ?>" />
								</li>
							</ul>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="margin60 marginb0">
					<h3 class="bold">Informações</h3>
					<?php do_action( 'tp_event_after_single_event' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>