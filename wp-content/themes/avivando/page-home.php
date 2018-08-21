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

<!-- FLOATING BUTTON -->
<div class="fixed-action-btn">
  <a href="/cbdmed/?page_id=37" class="btn-floating btn-large green">
    <i class="large material-icons">email</i>
  </a>
</div>

<?php $home = new WP_Query( array( 'post_type' => 'textos_home', 'posts_per_page' => '1' )); ?>
<?php while ( $home->have_posts() ) : $home->the_post(); ?>
<!-- DESTAQUE -->
<div class="hide-on-small-only parallax-container" style="height: 580px">
  <div class="chamada-inicio green-rgba z-depth-4">
    <h1 class="white-text bold"><?php the_field('frase_da_chamada'); ?></h1>
    <a href="<?php the_field('link_do_botão'); ?>" class="btn green bold">Saiba Mais</a>
  </div>
  <div class="parallax">
    <img src="<?php the_field('imagem_do_banner'); ?>">
  </div>
</div>
<!-- O QUE É -->
<div id="oquee" class="parallax-container z-depth-4 hauto">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 push-l1 left-align">
      <h1 class="white-text bold">O que é?</h1>
      <span class="white-text"><?php the_field('o_que_e'); ?></span>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 push-m1 margin50 marginb50 left-align">
      <h1 class="white-text bold">O que é?</h1>
      <span class="white-text"><?php the_field('o_que_e'); ?></span>
    </div>
  </div>
  <div class="col hide-on-small-only parallax">
    <img src="<?php the_field('imagem_de_fundo_1'); ?>">
  </div>
  <div class="col hide-on-med-and-up parallax">
    <img src="<?php the_field('imagem_de_fundo_1_mobile'); ?>">
  </div>
</div>
<!-- PARA QUE SERVE -->
<div id="paraqueserve" class="parallax-container z-depth-4 hauto">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 pull-l1 right right-align">
      <h1 class="white-text bold">Para que serve?</h1>
      <span class="white-text"><?php the_field('para_que_serve'); ?></span>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 pull-m1 margin50 marginb50 right right-align">
      <h1 class="white-text bold">Para que serve?</h1>
      <span class="white-text"><?php the_field('para_que_serve'); ?></span>
    </div>
  </div>
  <div class="col hide-on-small-only parallax">
    <img src="<?php the_field('imagem_de_fundo_2'); ?>">
  </div>
  <div class="col hide-on-med-and-up parallax">
    <img src="<?php the_field('imagem_de_fundo_2_mobile'); ?>">
  </div>
</div>
<!-- COMO COMPRAR -->
<div class="parallax-container">
  <div class="row">
    <!-- DESKTOP -->
    <div class="col hide-on-med-and-down l6 push-l1 margin140 left-align">
      <h1 class="white-text bold">Como comprar?</h1>
      <span class="white-text"><?php the_field('como_comprar'); ?></span>
      <a href="/cbdmed/?page_id=28" class="btn green bold">Conheça o processo de compra</a>
    </div>
    <!-- MED AND DOWN -->
    <div class="col hide-on-large-only paddings1 s12 m6 push-m1 margin50 marginb50 left-align">
      <h1 class="white-text bold">Como comprar?</h1>
      <span class="white-text"><?php the_field('como_comprar'); ?></span>
      <a href="/cbdmed/?page_id=28" class="btn green bold">Conheça o processo de compra</a>
    </div>
  </div>
  <div class="col hide-on-small-only parallax">
    <img src="<?php the_field('imagem_de_fundo_3'); ?>">
  </div>
  <div class="col hide-on-med-and-up parallax">
    <img src="<?php the_field('imagem_de_fundo_3_mobile'); ?>">
  </div>
</div>
<!-- PRODUTOS -->
<div class="container">
  <div class="row">
    <div class="col s12">
      <h1 class="green-text margin60 bold produtos">Produtos</h1>
    </div>
    <div class="col s12 l8 push-l2">
      <?php
        $args = array('post_type' => 'product', 'posts_per_page' => 2);
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col s12 m6">
              <?php wc_get_template_part( 'content', 'product' ); ?>
            </div>
            <?php
          endwhile;
        } else {
          echo __( 'Nenhum produto foi encontrado' );
        }
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<!-- DEPOIMENTOS -->
<div class="container margin30 marginb50">
  <div class="row">
    <div class="col s12">
      <h1 class="green-text margin40 bold produtos">Depoimentos</h1>
    </div>
    <div class="col s12 l10 push-l1 margin40">
      <?php $depoimentos = new WP_Query( array( 'post_type' => 'depoimentos', 'posts_per_page' => '3' )); ?>
        <?php while ( $depoimentos->have_posts() ) : $depoimentos->the_post(); ?>
          <div class="col s12 m6">
            <img src="<?php the_field('foto'); ?>" width="130" class="image-center" />
            <h3 class="margin20"><?php the_field('nome_do_cliente'); ?></h3>
            <p><?php the_field('texto_de_depoimento'); ?></p>
          </div>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<?php get_footer('home'); ?>