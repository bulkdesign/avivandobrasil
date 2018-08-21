<?php /* Template Name: Login Padrão */ ?>

<?php get_header('login');?>

<div id="post-<?php the_ID(); ?>">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <div class="col s12 margin-vertical">
          <div class="col s4 push-s4">
            <img class="responsive-img" src="<?php bloginfo('template_url'); ?>/images/logo_idbrasil.png" />
          </div>
          <div class="col s12 margin30">
            <?php echo do_shortcode('[ultimatemember form_id=12]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php get_footer('login'); ?>