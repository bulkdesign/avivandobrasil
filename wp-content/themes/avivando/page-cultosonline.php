<?php /* Template Name: Cultos Online */ ?>
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
<div class="igrejas" style="background: url('<?php bloginfo('template_url'); ?>/images/cultoonline.jpg');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
<div class="row">
  <div class="col s12 m10 push-m1 margin60 marginb50">
    <?php $igrejas = new WP_Query( array( 'post_type' => 'wpsl_stores' )); ?>
      <?php while ( $igrejas->have_posts() ) : $igrejas->the_post(); ?>
        <?php if (get_field('culto_ao_vivo')): ?>
          <div class="col s12 m4">
            <a href="<?php echo the_permalink(); ?>">
              <?php the_post_thumbnail('medium', array('class' => 'image-center hoverable')); ?>
              <h3 class="margin20"><?php the_title(); ?></h3>
            </a>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>