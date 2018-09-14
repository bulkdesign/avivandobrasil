<?php get_header(); ?>

	<?php $s=get_search_query(); ?>

	<?php  global $wp_query; ?>

	  <div class="col s12 margin140">
	    <?php echo do_shortcode('[searchandfilter search_placeholder="Busque aqui..." submit_label="Buscar" fields="search,wpsl_store_category,denominacao" hide_empty="0" hierarchical="1" class="form"]'); ?>
	  </div>

		<?php if ( have_posts() ) : ?>

			<header class="page-header margin30">
				<h3><?php printf( esc_attr__( 'Resultados encontrados para: %s', 'storefront' ), '<span class="bold">' . get_search_query() . '</span>' ); ?></h3>
			</header>
			<div class="row">
			  	<div class="col s12 margin60">
	        		<div class="col s12 m4">
		          		<a href="<?php echo the_permalink(); ?>">
		            		<?php the_post_thumbnail('medium', array('class' => 'image-center hoverable')); ?>
		            		<h3 class="margin20"><?php the_title(); ?></h3>
		          		</a>
		        	</div>
				</div>
			</div>

		<?php else : ?>

			<div id="primary" class="marginb50">
				<main id="main" class="site-main" role="main">
					<header class="page-header margin20">
						<h3>Infelizmente não foi encontrado nenhum resultado para a sua pesquisa.<br>
						Realize a busca novamente ou retorne para a página inicial:</h3>
						<a href="<?php echo site_url(); ?>" class="btn btn-destaque margin20">Voltar</a>
					</header>
				</main>
			</div>

		<?php endif; ?>

<?php get_footer(); ?>