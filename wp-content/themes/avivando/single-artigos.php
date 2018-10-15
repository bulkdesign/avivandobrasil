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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<!-- TOPO -->
	<div class="destaque-post" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url(<?php echo the_field('foto_de_capa_do_artigo'); ?>);background-size:cover;background-repeat: no-repeat;">
		<h1 class="white-text bold"><?php the_title(); ?><br>
			<?php $author = get_the_author(); ?>
	  		<span class="white-text fs16">Escrito por <?php echo $author; ?> em <?php echo get_the_date(); ?></span>
		</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col s12 margin50 left-align">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer('home');
