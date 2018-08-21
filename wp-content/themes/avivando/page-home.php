<?php /* Template Name: Home */ ?>

<?php get_header();?>

<style type="text/css">
  .col-full {
    padding: 0 !important;
    max-width: 100% !important;
  }

@media (max-width: 993px) {
  .col-full {
    margin: 0;
  }

  .produto-destacado {
    height: 1070px;
  }
}
</style>

<!-- <?php //$home = new WP_Query( array( 'post_type' => 'textos_home', 'posts_per_page' => '1' )); ?>
<?php //while ( $home->have_posts() ) : $home->the_post(); ?> -->

<!-- DESTAQUE -->
<div class="hide-on-small-only parallax-container" style="height: 750px">
  <div class="icones-inicio">
    <div class="row">
      <div class="col s12">
        <img src="<?php bloginfo('template_url'); ?>/images/icons.png" />
      </div>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/background.jpg" />
  </div>
</div>
<!-- O QUE É -->
<div id="oquee" class="parallax-container z-depth-4 hauto">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 push-l1 left-align">
      <h1 class="white-text bold">O que é?</h1>
      <span class="white-text"></span>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 push-m1 margin50 marginb50 left-align">
      <h1 class="white-text bold">O que é?</h1>
      <span class="white-text"></span>
    </div>
  </div>
  <div class="col hide-on-small-only parallax">
    <img src="">
  </div>
  <div class="col hide-on-med-and-up parallax">
    <img src="">
  </div>
</div>
<!-- PARA QUE SERVE -->
<div id="paraqueserve" class="parallax-container z-depth-4 hauto">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 pull-l1 right right-align">
      <h1 class="white-text bold">Para que serve?</h1>
      <span class="white-text"></span>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 pull-m1 margin50 marginb50 right right-align">
      <h1 class="white-text bold">Para que serve?</h1>
      <span class="white-text"></span>
    </div>
  </div>
  <div class="col hide-on-small-only parallax">
    <img src="">
  </div>
  <div class="col hide-on-med-and-up parallax">
    <img src="">
  </div>
</div>
<!-- COMO COMPRAR -->
<div class="parallax-container">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 push-l1 margin140 left-align">
      <h1 class="white-text bold">Como comprar?</h1>
      <span class="white-text"></span>
      <a href="/cbdmed/?page_id=28" class="btn green bold">Conheça o processo de compra</a>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 push-m1 margin50 marginb50 left-align">
      <h1 class="white-text bold">Como comprar?</h1>
      <span class="white-text"></span>
      <a href="/cbdmed/?page_id=28" class="btn green bold">Conheça o processo de compra</a>
    </div>
  </div>
</div>

<?php get_footer('home'); ?>