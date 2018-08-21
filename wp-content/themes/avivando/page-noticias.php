<?php /* Template Name: Notícias */ ?>

<?php get_header(); ?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.noticias {
  width:100%;
  height:300px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.noticias h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>
<!-- TOPO -->
<div class="noticias" style="background: url('<?php bloginfo('template_url'); ?>/images/blog.jpg');background-size:cover;background-repeat: no-repeat;">
  <h1 class="white-text bold">Notícias</h1>
</div>
<article class="margin50" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="entry-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="row">
						<?php query_posts( 'posts_per_page=20' ); ?>
				    	<?php if ( have_posts() ) : ?>
			    		<?php while ( have_posts() ) : the_post(); ?>
						<div class="col s12 m6 l4">
							<div class="card hoverable">
								<a href="<?php the_permalink();?>">
							    	<div class="card-image">
								    	<div class="card-action green-text">
							        		<?php the_post_thumbnail(); ?>
							        		<h3 class="padding20"><?php the_title();?></h3>
							        		<div class="divider"></div>
							        		<p><?php the_excerpt(); ?></p>         
								      	</div>
							    	</div>
							  	</a>
							</div>
						</div>
				    	<?php endwhile; ?>
				        <?php endif; ?>
			    	</div>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
	</div>
</article>

<?php get_footer('home'); ?>