<?php /* Template Name: Cultos Online */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
</style>

<!-- TOPO -->
<div class="igrejas hide-on-small-only" style="background: url('<?php bloginfo('template_url'); ?>/images/cultoonline.jpg');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>
<div class="igrejas hide-on-med-and-up" style="background: url('<?php bloginfo('template_url'); ?>/images/cultoonline.jpg');background-size:cover;background-position:0 0;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
<div class="row">
  <div class="col s12 m10 push-m1 margin60 marginb50">
    <?php $igrejas = new WP_Query( array( 'posts_per_page' => -1, 'post_type' => 'wpsl_stores' )); ?>
      <?php while ( $igrejas->have_posts() ) : $igrejas->the_post(); ?>
        <?php if (get_field('culto_ao_vivo')): ?>
          <div class="col s12 m3">
            <a target="blank" href="<?php the_field('culto_ao_vivo'); ?>">
              <?php the_post_thumbnail('thumbnail', array('class' => 'image-center hoverable')); ?>
              <h3 style="font-size:16px;" class="margin20"><?php the_title(); ?></h3>
            </a>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>