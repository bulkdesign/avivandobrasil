<?php /* Template Name: Igrejas */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.igrejas {
  width:100%;
  height:500px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.igrejas h1 {
  font-size: 50px;
  padding: 10px 10px 0;
  margin: 0;
}

#mapa {
  height: auto;
  padding: 50px 0px;
}

#mapa h1 {
  margin: 20px 0 30px;
}

</style>

<!-- TOPO -->
<div class="igrejas" style="background: url('https://images.unsplash.com/photo-1514430700556-1807904774e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cbb22861b82b9b633c01a3a36a1b428c&auto=format&fit=crop&w=1200&q=80');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
<div class="row">
  <div class="col s12 margin60">
    <?php echo do_shortcode('[searchandfilter search_placeholder="Busque aqui..." submit_label="Buscar" fields="search,wpsl_store_category,denominacao" hide_empty="0" hierarchical="1" class="form"]'); ?>
  </div>
  <div class="col s12 m10 push-m1 marginb50">
    <?php $igrejas = new WP_Query( array( 'post_type' => 'wpsl_stores', 'wpsl_store_category' => 'igreja' )); ?>
      <?php while ( $igrejas->have_posts() ) : $igrejas->the_post(); ?>
        <div class="col s12 m4">
          <a href="<?php echo the_permalink(); ?>">
            <?php the_post_thumbnail('medium', array('class' => 'image-center hoverable')); ?>
            <h3 class="margin20"><?php the_title(); ?></h3>
          </a>
        </div>
      <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>