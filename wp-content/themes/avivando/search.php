<?php get_header(); ?>

<style type="text/css">

h3 {
	white-space: nowrap;
}

</style>

	<?php $s=get_search_query(); ?>

	<?php global $wp_query; ?>

	<?php $allsearch = new WP_Query("s=$s&post_type=wpsl_stores&showposts=-1"); ?>

	<div class="col s12 margin140">
		<?php echo do_shortcode('[searchandfilter search_placeholder="Busque aqui..." submit_label="Buscar" fields="search,wpsl_store_category,denominacao,bairro" hide_empty="0" hierarchical="1" class="form"]'); ?>
	</div>

		<header class="page-header margin30">
			<h3><?php printf( esc_attr__( 'Resultados encontrados para: %s', 'storefront' ), '<span class="bold">' . get_search_query() . '</span>' ); ?></h3>
		</header>

		<div class="row">
		  	<div class="col s12 margin60">
		  		<?php if ($allsearch->have_posts()) : ?>
					<?php while ($allsearch->have_posts()) : $allsearch->the_post(); ?>
	        		<div class="col s12 m3">
		          		<a href="<?php echo the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium', array('class' => 'image-center hoverable small-img'));
							} else { ?>
								<img class="image-center small-img" src="<?php bloginfo('template_directory'); ?>/images/placeholder.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
		            		<h3 class="margin10 marginb20 fs16"><?php the_title(); ?></h3>
		          		</a>
		        	</div>
				<?php endwhile; ?>
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
	<?php wp_reset_query(); ?>
<?php get_footer(); ?>