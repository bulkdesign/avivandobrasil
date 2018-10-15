<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<style type="text/css">
	
.col-full {
  max-width: 100%;
  padding: 0;
}

</style>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $igrejas = array('post_type' => 'wpsl_stores');
  	$listadeigrejas = new WP_Query( $igrejas ); ?>

	<!-- TOPO -->
	<?php if(get_field('foto_de_destaque')): ?>
		<div class="destaque-post marginb50" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url(<?php echo the_field('foto_de_destaque'); ?>);background-size:cover;background-repeat: no-repeat;">
			<div class="row">
				<div class="col s12 center">
					<img class="image-center logo" src="<?php echo the_field('logotipo'); ?>"></br>
				</div>
			</div>
		</div>
		<?php else : ?>
			<?php if(get_field('logotipo')): ?>
				<div class="destaque-post">
					<div class="col s12 center">
						<img width="200" class="image-center logo" src="<?php echo the_field('logotipo'); ?>"></br>
					</div>
				</div>
				<?php else: ?>
					<div class="destaque-post">
						<div class="col s12 center">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
			<?php endif; ?>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="col s12 m10 push-m1">
					<div class="justify marginb50">
						<!-- Dados do anunciante -->
						<?php if(get_field('nome')): ?>
							<h3 class="bold">Sobre</h3>
							<table class="center">
								<thead style="background:#F2F2F2">
									<tr>
										<th class="center">Nome</th>
										<?php if(get_field('telefone')) : ?>
											<th class="center">Telefone</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('site')) : ?>
											<th class="center">Site</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('e-mail')) : ?>
											<th class="center">E-mail</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('facebook')) : ?>
											<th class="center">Redes Sociais</th>
											<?php else: ?>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="center"><?php the_title(); ?></td>
										<?php if(get_field('telefone')) : ?>
											<td class="center"><?php echo the_field('telefone'); ?></td>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('site')) : ?>
											<td class="center"><a target="blank" href="<?php echo the_field('site'); ?>"><?php echo the_field('site'); ?></a></td>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('e-mail')) : ?>
											<td class="center"><?php echo the_field('e-mail'); ?></td>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('facebook')) : ?>
											<td class="center">
												<?php if(get_field('facebook')): ?>
													<a target="blank" href="<?php echo the_field('facebook'); ?>">
														<img class="left paddingr5" width="24" class="image-center" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/facebook.png" />
													</a>
													<?php else: ?>
														<span>-</span>
												<?php endif; ?>
												<?php if(get_field('instagram')): ?>
													<a target="blank" href="<?php echo the_field('instagram'); ?>">
														<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/instagram.png" /> 
													</a>
													<?php else: ?>
														<span>-</span>
												<?php endif; ?>
												<?php if(get_field('whatsapp')): ?>
													<a target="blank" href="https://api.whatsapp.com/send?phone=55<?php echo the_field('whatsapp'); ?>">
														<img width="24" class="left paddingr5" src="<?php bloginfo('template_url'); ?>/assets/images/redes-sociais/whatsapp.png" /> 
													</a>
													<?php else: ?>
														<span>-</span>
												<?php endif; ?>
												<?php if(get_field('youtube')): ?>
													<a target="blank" href="<?php echo the_field('youtube'); ?>">
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
							<?php else: ?>
						<?php endif; ?>
						<!-- Descricao -->
						<div class="col s12 margin20" style="padding-left:0;padding-right:0;">
							<?php if ( !empty( get_the_content() ) ): ?>
								<div class="col s12 m6" style="padding-left:0;">
									<h3 class="bold">Descrição</h3>
									<?php the_content(); ?>
								</div>
								<?php else : ?>
							<?php endif; ?>
							<?php if(get_field('fotos_da_igreja')): ?>
								<div class="col s12 m6 margin20" style="padding-right:0;">
									<div class="slider">
										<?php while( have_rows('fotos_da_igreja') ): the_row(); 
											$image = get_sub_field('adicionar_foto');
											?>
											<ul class="bxslider">
												<li>
													<img style="width: 100%; height:auto;background-size:contain;background-position:center;background-repeat:no-repeat;background-color:#FFFFFF;" src="<?php echo $image; ?>" />
												</li>
											</ul>
										<?php endwhile; ?>
									</div>
								</div>
								<?php else: ?>
							<?php endif; ?>
						</div>
						<!-- Localizacao -->
						<h3 class="bold">Localização</h3>
						<?php echo do_shortcode('[wpsl_map id=' . get_the_id() . ' zoom="17"]'); ?>
						<table class="center">
							<thead style="background:#F2F2F2">
								<tr>
									<th class="center">Endereço</th>
									<th class="center">CEP</th>
									<th class="center">Cidade</th>
									<th class="center">Estado</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">
										<?php echo do_shortcode('[wpsl_address id=' . get_the_id() . ' name="false" address="true" address2="false" city="false" state="false" zip="false" country="false" phone="false" fax="false" email="false" url="false"]'); ?>
									</td>
									<td class="center">
										<?php echo do_shortcode('[wpsl_address id=' . get_the_id() . ' name="false" address="false" address2="false" city="false" state="false" zip="true" country="false" phone="false" fax="false" email="false" url="false"]'); ?>
									</td>
									<td class="center">
										<?php echo do_shortcode('[wpsl_address id=' . get_the_id() . ' name="false" address="false" address2="false" city="true" state="false" zip="false" country="false" phone="false" fax="false" email="false" url="false"]'); ?>
									</td>
									<td class="center">
										<?php echo do_shortcode('[wpsl_address id=' . get_the_id() . ' name="false" address="false" address2="false" city="false" state="true" zip="false" country="false" phone="false" fax="false" email="false" url="false"]'); ?>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- Conveniências -->
						<h3 class="bold">Conveniências</h3>
						<table class="center">
							<thead style="background:#F2F2F2">
								<tr>
									<?php if(get_field('culto_ao_vivo')): ?>
										<th class="center">Culto ao Vivo:</th>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('possui_estacionamento')): ?>
										<th class="center">Estacionamento próprio:</th>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('atividades_criancas')): ?>
										<th class="center">Atividades para crianças:</th>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('arcondicionado')): ?>
										<th class="center">Ar Condicionado:</th>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('acessibilidade')): ?>
										<th class="center">Acessibilidade:</th>
										<?php else: ?>
									<?php endif; ?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php if(get_field('culto_ao_vivo')): ?>
										<td class="center">
											<a target="blank" href="<?php the_field('culto_ao_vivo'); ?>">Clique aqui</a>
										</td>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('possui_estacionamento')): ?>
										<td class="center">
											<?php the_field('possui_estacionamento'); ?>
										</td>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('atividades_criancas')): ?>
										<td class="center">
											<?php the_field('atividades_criancas'); ?>
										</td>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('arcondicionado')): ?>
										<td class="center">
											<?php the_field('arcondicionado'); ?>
										</td>
										<?php else: ?>
									<?php endif; ?>
									<?php if(get_field('acessibilidade')): ?>
										<td class="center">
											<?php the_field('acessibilidade'); ?>
										</td>
										<?php else: ?>
									<?php endif; ?>
								</tr>
							</tbody>
						</table>
						<!-- Agenda da Igreja -->
						<?php if(get_field('domingo')): ?>
							<h3 class="bold">Programação de Cultos</h3>
							<table class="center">
								<thead style="background:#F2F2F2">
									<tr>
										<?php if(get_field('segunda')): ?>
											<th class="center">Segunda-feira</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('terca')): ?>
											<th class="center">Terça-feira</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('quarta')): ?>
											<th class="center">Quarta-feira</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('quinta')): ?>
											<th class="center">Quinta-feira</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('sexta')): ?>
											<th class="center">Sexta-feira</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('sabado')): ?>
											<th class="center">Sábado</th>
											<?php else: ?>
										<?php endif; ?>
										<?php if(get_field('domingo')): ?>
											<th class="center">Domingo</th>
											<?php else: ?>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php if(get_field('segunda')): ?>
										<td class="center">
											<?php the_field('segunda'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('terca')): ?>
											<td class="center">
												<?php the_field('terca'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('quarta')): ?>
											<td class="center">
												<?php the_field('quarta'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('quinta')): ?>
											<td class="center">
												<?php the_field('quinta'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('sexta')): ?>
											<td class="center">
												<?php the_field('sexta'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('sabado')): ?>
											<td class="center">
												<?php the_field('sabado'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>
										<?php if(get_field('domingo')): ?>
											<td class="center">
												<?php the_field('domingo'); ?>
											<?php else: ?>
										<?php endif; ?>
										</td>									
									</tr>
								</tbody>
							</table>
							<?php else: ?>
						<?php endif; ?>
						<!-- Artigos -->
						<?php if(!empty($listadeartigos)) : ?>
							<div class="col s12" style="padding: 0; margin: 0">
								<h3 class="bold margin25">Artigos da <?php the_title(); ?></h3>
								<?php $artigos = array('post_type' => 'artigos', 'author_name' => get_the_title(), 'posts_per_page' => 3, 'post_status' => 'publish'); ?>
				          		<?php $listadeartigos = new WP_Query( $artigos );
						            if ( $listadeartigos->have_posts() ) {
						             	while ( $listadeartigos->have_posts() ) : $listadeartigos->the_post(); ?>
						                	<div class="col s12 m4 margin20">
						                  		<div class="container-evento">
						                    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						                      			<?php the_post_thumbnail('medium', array('class' => 'image-center hoverable small-img')); ?>
						                    		</a>
						                    		<h3 class="bold paddingt15 paddingb0 center"><?php the_title(); ?></h3>
						                    		<?php the_excerpt(); ?>
						                  		</div>
						                	</div>
						            	<?php endwhile; }
				          			else {}
				          		?>
				          	</div>
				          	<?php else : ?>
				        <?php endif; ?>
						<!-- Compartilhe -->
						<div class="col s12 marginb50">
							<span>Compartilhe:</span>
							<?php echo do_shortcode('[addtoany buttons="facebook,whatsapp,linkedin,twitter"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php wp_reset_query(); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>