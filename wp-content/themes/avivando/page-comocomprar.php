<?php /* Template Name: Como Comprar */ ?>
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

<?php $comocomprar = new WP_Query( array( 'post_type' => 'como_comprar', 'posts_per_page' => '1' )); ?>
<?php while ( $comocomprar->have_posts() ) : $comocomprar->the_post(); ?>
  <!-- TOPO -->
  <div class="comocomprar" style="background: url('<?php the_field('imagem_do_topo'); ?>');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold"><?php the_field('titulo_da_pagina'); ?></h1>
  </div>

<div class="container">
  <div class="row">
    <div class="col s12 padding40">
      <p><?php the_field('descrição_inicial'); ?></p>
      <!-- PASSO 1 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 1</h1>
          </div>
          <div class="card-content">
            <span class="white-text bold"><?php the_field('passo_1'); ?></span>
          </div>
        </div>
      </div>
      <!-- PASSO 2 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 2</h1>
          </div>
          <div class="card-content">
            <span class="white-text bold"><?php the_field('passo_2'); ?></span>
          </div>
        </div>
      </div>
      <!-- PASSO 3 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 3</h1>
          </div>
          <div class="card-content">
            <span class="white-text bold"><?php the_field('passo_3'); ?></span>
          </div>
        </div>
      </div>
    </div>
    <!-- FINALIZAÇÃO DO PEDIDO -->
    <div class="col s12 m10 push-m1">
      <h1 class="green-text bold"><?php the_field('titulo_2'); ?></h1>
      <?php the_field('texto_2'); ?>
    </div>
    <!-- FORMAS DE PAGAMENTO -->
    <div class="col s12 m10 push-m1 padding40">
      <h1 class="green-text bold"><?php the_field('titulo_3'); ?></h1>
      <?php the_field('texto_3'); ?>
    </div>
    <!-- CONTATO -->
    <div class="col s12 m10 push-m1 marginb50">
      <h1 class="green-text bold"><?php the_field('titulo_4'); ?></h1>
      <?php the_field('texto_4'); ?>
      <a href="<?php the_field('link_do_botão'); ?>" class="btn green-dark bold">ENTRAR EM CONTATO</a>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer('home'); ?>