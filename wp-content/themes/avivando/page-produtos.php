<?php /* Template Name: Produtos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.comocomprar {
  width:100%;
  height:300px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.comocomprar h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<?php $produtos = new WP_Query( array( 'post_type' => 'textos_produtos', 'posts_per_page' => '1' )); ?>
<?php while ( $produtos->have_posts() ) : $produtos->the_post(); ?>
  <!-- TOPO -->
  <div class="comocomprar" style="background: url('<?php the_field('imagem_do_topo'); ?>');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold"><?php the_field('titulo_da_pagina'); ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 padding40">
        <p><?php the_field('descrição'); ?></p>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
          <!-- FOTO PRODUTO -->
          <div class="col s12 margin50">
            <?php
              $args = array('post_type' => 'product', 'posts_per_page' => 2);
              $loop = new WP_Query( $args );
              if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <div class="col m4 push-m2 s12 marginb50">
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
    </div>
  </div>
<?php $produtos = new WP_Query( array( 'post_type' => 'textos_produtos', 'posts_per_page' => '1' )); ?>
<?php while ( $produtos->have_posts() ) : $produtos->the_post(); ?>
  <!-- PARA QUE SERVE -->
  <div class="parallax-container hauto">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin60">
          <h1 class="white-text bold"><?php the_field('titulo_1'); ?></h1>
          <span class="white-text"><?php the_field('texto_1'); ?></span>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold"><?php the_field('titulo_1'); ?></h1>
          <span class="white-text"><?php the_field('texto_1'); ?></span>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php the_field('imagem_de_fundo_1'); ?>">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php the_field('imagem_de_fundo_1_mobile'); ?>">
    </div>
  </div>
  <!-- O QUE É -->
  <div class="parallax-container hauto">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin60">
          <h1 class="white-text bold"><?php the_field('titulo_2'); ?></h1>
          <span class="white-text"><?php the_field('texto_2'); ?></span>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold"><?php the_field('titulo_2'); ?></h1>
          <span class="white-text"><?php the_field('texto_2'); ?></span>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php the_field('imagem_de_fundo_2'); ?>">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php the_field('imagem_de_fundo_2_mobile'); ?>">
    </div>
  </div>
  <!-- BENEFÍCIOS -->
  <div class="parallax-container hauto">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin60">
          <h1 class="white-text bold"><?php the_field('titulo_3'); ?></h1>
          <span class="white-text"><?php the_field('texto_3'); ?></span>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold"><?php the_field('titulo_3'); ?></h1>
          <span class="white-text"><?php the_field('texto_3'); ?></span>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php the_field('imagem_de_fundo_3'); ?>">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php the_field('imagem_de_fundo_3_mobile'); ?>">
    </div>
  </div>
  <!-- COMPOSIÇÃO -->
  <div class="parallax-container hauto">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin60">
          <h1 class="white-text bold"><?php the_field('titulo_4'); ?></h1>
          <span class="white-text"><?php the_field('texto_4'); ?></span>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold"><?php the_field('titulo_4'); ?></h1>
          <span class="white-text"><?php the_field('texto_4'); ?></span>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php the_field('imagem_de_fundo_4'); ?>">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php the_field('imagem_de_fundo_4_mobile'); ?>">
    </div>
  </div>
  <!-- PROCESSO DE COMPRA -->
  <div class="container margin30 marginb50">
    <div class="row">
      <div class="col s12 padding20">
        <div class="col s12 m10 push-m1">
          <h1 class="green-text bold"><?php the_field('titulo_5'); ?></h1>
          <p class="white-text"><?php the_field('texto_5'); ?></p>
          <a href="<?php the_field('link_do_botão'); ?>" class="btn green-dark bold">ENTRAR EM CONTATO</a>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer('home'); ?>