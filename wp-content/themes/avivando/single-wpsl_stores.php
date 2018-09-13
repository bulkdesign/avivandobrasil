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

<?php while ( have_posts() ) : the_post(); ?>

	<?php $igrejas = array('post_type' => 'wpsl_stores');
  	$listadeigrejas = new WP_Query( $igrejas ); ?>

	<!-- TOPO -->
	<div class="destaque-post" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url(<?php echo the_field('foto_de_destaque'); ?>);background-size:cover;background-repeat: no-repeat;">
		<div class="row">
			<div class="col s12 center">
				<img class="image-center logo" src="<?php echo the_field('logo_da_igreja'); ?>"></br>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="col s12 m10 push-m1 margin50">
					<div class="justify marginb50">
						<!-- Dados do anunciante -->
						<h3 class="bold">Sobre</h3>
						<table class="center">
							<thead style="background:#F2F2F2">
								<tr>
									<th class="center">Nome</th>
									<th class="center">Telefone</th>
									<th class="center">Site</th>
									<th class="center">E-mail</th>
									<th class="center">Redes Sociais</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center"><?php the_title(); ?></td>
									<td class="center"><?php echo the_field('telefone'); ?></td>
									<td class="center"><a href="<?php echo the_field('site'); ?>"><?php echo the_field('site'); ?></a></td>
									<td class="center"><?php echo the_field('e-mail'); ?></td>
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
								</tr>
							</tbody>
						</table>
						<!-- Descricao -->
						<div class="col s12 margin20" style="padding-left:0;padding-right:0;">
							<div class="col s12 m6" style="padding-left:0;">
								<h3 class="bold">Descrição</h3>
								<?php the_content(); ?>
							</div>
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
									<th class="center">Culto ao Vivo:</th>
									<th class="center">Estacionamento próprio:</th>
									<th class="center">Atividades para crianças:</th>
									<th class="center">Ar Condicionado:</th>
									<th class="center">Acessibilidade:</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">
										<a href="<?php the_field('culto_ao_vivo'); ?>">Clique aqui</a>
									</td>
									<td class="center">
										<?php the_field('possui_estacionamento'); ?>
									</td>
									<td class="center">
										<?php the_field('atividades_criancas'); ?>
									</td>
									<td class="center">
										<?php the_field('arcondicionado'); ?>
									</td>
									<td class="center">
										<?php the_field('acessibilidade'); ?>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- Agenda da Igreja -->
						<h3 class="bold">Programação de Cultos</h3>
						<table class="center">
							<thead style="background:#F2F2F2">
								<tr>
									<th class="center">Segunda-feira</th>
									<th class="center">Terça-feira</th>
									<th class="center">Quarta-feira</th>
									<th class="center">Quinta-feira</th>
									<th class="center">Sexta-feira</th>
									<th class="center">Sábado</th>
									<th class="center">Domingo</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">
										<?php if(get_field('segunda')): ?>
											<?php the_field('segunda'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('terca')): ?>
											<?php the_field('terca'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('quarta')): ?>
											<?php the_field('quarta'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('quinta')): ?>
											<?php the_field('quinta'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('sexta')): ?>
											<?php the_field('sexta'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('sabado')): ?>
											<?php the_field('sabado'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>
									<td class="center">
										<?php if(get_field('domingo')): ?>
											<?php the_field('domingo'); ?>
											<?php else: ?>
												--
										<?php endif; ?>
									</td>									
								</tr>
							</tbody>
						</table>
						<!-- Compartilhe -->
						<span>Compartilhe:</span>
						<?php echo do_shortcode('[addtoany buttons="facebook,whatsapp,linkedin,twitter"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php wp_reset_query(); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>