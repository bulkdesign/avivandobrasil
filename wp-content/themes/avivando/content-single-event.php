<style type="text/css">
	
.col-full {
  max-width: 100%;
  padding: 0;
}

</style>

<!-- TOPO -->
<div class="destaque-post" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo the_field('foto_destacada'); ?>');background-size:cover;background-repeat: no-repeat;">
	<div class="row">
		<div class="col s12">
			<?php do_action( 'tp_event_single_event_title' ); ?>
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
					<h3 class="bold">Descrição:</h3>
					<?php the_content(); ?>
					<!-- Instrutor -->
					<?php if (get_field('instrutor_do_treinamento')): ?>
						<h3 class="bold">Instrutor do Evento:</h3>
						<?php the_field('instrutor_do_treinamento'); ?>
					<?php endif; ?>
					<!-- Programação -->
					<?php if (get_field('programacao')): ?>
						<h3 class="bold margin30">Programação:</h3>
						<?php the_field('programacao'); ?>
					<?php endif; ?>
					<!-- Local -->
					<?php if (get_field('local')): ?>
						<h3 class="bold">Local:</h3>
						<?php the_field('local'); ?>
					<?php endif; ?>
					<!-- Investimento -->
					<?php if (get_field('investimento')): ?>
						<h3 class="bold">Investimento:</h3>
						<?php the_field('investimento'); ?>
					<?php endif; ?>				
					<!-- Instrucoes -->
					<?php if (get_field('instrucoes')): ?>
						<h3 class="bold">Instruções</h3>
						<?php the_field('instrucoes'); ?>
					<?php endif; ?>	
					<!-- Dados do anunciante -->
					<h3 class="bold">Dados do anunciante</h3>
					<table class="center">
						<thead style="background:#F2F2F2">
							<tr>
								<?php if(get_field('produtor_do_evento')): ?>
									<th class="center">Produtora do Evento</th>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('telefone')): ?>
									<th class="center">Telefone</th>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('site')): ?>
									<th class="center">Site</th>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('e-mail')): ?>
									<th class="center">E-mail</th>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('facebook')): ?>
									<th class="center">Redes Sociais</th>
									<?php else: ?>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php if(get_field('produtor_do_evento')): ?>
									<td class="center"><?php the_field('produtor_do_evento'); ?></td>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('telefone')): ?>
									<td class="center"><?php the_field('telefone'); ?></td>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('site')): ?>
									<td class="center"><a href="<?php the_field('site'); ?>">Clique aqui</a></td>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('e-mail')): ?>
									<td class="center"><?php the_field('e-mail'); ?></td>
									<?php else: ?>
								<?php endif; ?>
								<?php if(get_field('facebook')): ?>
									<td class="center">
										<?php if(get_field('facebook')): ?>
											<a href="<?php echo the_field('facebook'); ?>">
												<img class="left paddingr5" width="24" class="image-center" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/facebook.png" />
											</a>
											<?php else: ?>
												<span>-</span>
										<?php endif; ?>
										<?php if(get_field('instagram')): ?>
											<a href="<?php echo the_field('instagram'); ?>">
												<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/instagram.png" /> 
											</a>
											<?php else: ?>
												<span>-</span>
										<?php endif; ?>
										<?php if(get_field('whatsapp')): ?>
											<a href="https://api.whatsapp.com/send?phone=55<?php echo the_field('whatsapp'); ?>">
												<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/whatsapp.png" /> 
											</a>
											<?php else: ?>
												<span>-</span>
										<?php endif; ?>
										<?php if(get_field('youtube')): ?>
											<a href="<?php echo the_field('youtube'); ?>">
												<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/youtube.png" /> 
											</a>
											<?php else: ?>
												<span>-</span>
										<?php endif; ?>
									</td>
									<?php else: ?>
								<?php endif; ?>
							</tr>
						</tbody>
					</table>
					<!-- Compartilhe -->
					<span>Compartilhe este evento:</span>
					<?php echo do_shortcode('[addtoany buttons="facebook,whatsapp,linkedin,twitter"]'); ?>
				</div>
			</div>	
			<div class="col s12 m4">
				<?php if( get_field('fotos')): ?>
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
				<?php endif; ?>
				<div class="margin60 marginb0">
					<h3 class="bold">Informações</h3>
					<?php do_action( 'tp_event_after_single_event' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>