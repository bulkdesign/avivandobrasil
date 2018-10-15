<?php /* Template Name: Anuncie */ ?>
<?php get_header();?>

<style type="text/css">
  
.col-full {
  max-width: 100%;
  padding: 0;
}
  
.anuncie {
  width:100%;
  height:300px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.anuncie h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<!-- TOPO -->
<div class="anuncie hide-on-small-only" style="background: url('<?php bloginfo('template_url'); ?>/images/anuncie.jpg');background-position:0 -200px;background-size:cover;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>
<div class="anuncie hide-on-med-and-up" style="background: url('<?php bloginfo('template_url'); ?>/images/anuncie.jpg');background-position:0 0;background-size:cover;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<div class="almost-black">
  <div class="row">
    <div class="col s12 m10 push-m1 margin60">
        <?php while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>