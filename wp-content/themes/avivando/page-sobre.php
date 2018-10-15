<?php /* Template Name: Treinamentos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}

</style>

<!-- TOPO -->
<div class="igrejas hide-on-small-only" style="background: url('<?php bloginfo('template_url'); ?>/images/sobre.jpg');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>
<div class="igrejas hide-on-med-and-up" style="background: url('<?php bloginfo('template_url'); ?>/images/sobre.jpg');background-size:cover;background-position:0 0;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
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