<?php /* Template Name: Minha Conta */ ?>

<?php get_header();?>

<div id="post-<?php the_ID(); ?>" style="height:120vh">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1 class="center blue-text bold"><?php the_title(); ?></h1>
      </div>
      <div class="col s12">
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
      </div>
    </div>
  </div>
</div>
    
<?php get_footer(); ?>