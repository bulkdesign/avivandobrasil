<?php /* Template Name: Médicos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.medicos {
  width:100%;
  height:300px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.medicos h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<?php $medicos = new WP_Query( array( 'post_type' => 'para_medicos', 'posts_per_page' => '1' )); ?>
<?php while ( $medicos->have_posts() ) : $medicos->the_post(); ?>
  <!-- TOPO -->
  <div class="medicos" style="background: url('<?php the_field('imagem_do_topo'); ?>');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold"><?php the_field('titulo_da_pagina'); ?></h1>
  </div>

<div class="container">
  <div class="row">
    <div class="col s12 padding40">
      <p><?php the_field('descrição'); ?></p>
      <!-- FOTO PRODUTO -->
      <div class="col s12 padding40">
        <div class="col hide-on-small-only m3 push-m1">
          <img src="<?php the_field('foto_do_produto'); ?>">
        </div>
        <!-- TEXTOS -->
        <div class="col s12 m7 push-m1 left-align">
          <h1 class="green-text bold"><?php the_field('titulo_1'); ?></h1>
          <?php the_field('texto_1'); ?>
        </div>
      </div>
      <!-- COMO BUSCAR ESSE REMEDIO NA JUSTICA -->
      <div class="col s12">
        <div class="col s12">
          <div class="card green">
            <div class="card-image">
              <h1 class="white-text padding20 bold"><?php the_field('titulo_2'); ?></h1>
            </div>
            <div class="card-content">
              <span class="white-text bold"><?php the_field('texto_2'); ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <!-- BLOG -->
        <div class="col s12 m6">
          <div class="card green hoverable">
            <div class="card-image">
              <h1 class="white-text padding20 bold"><?php the_field('titulo_3'); ?></h1>
            </div>
            <div class="card-content">
              <span class="white-text bold"><?php the_field('texto_3'); ?></span>
            </div>
            <div class="card-action">
              <a href="<?php the_field('link_blog'); ?>" class="bold">Acesse o Blog</a>
            </div>
          </div>
        </div>
        <!-- CONTATO -->
        <div class="col s12 m6">
          <div class="card green hoverable">
            <div class="card-image">
              <h1 class="white-text padding20 bold"><?php the_field('titulo_4'); ?></h1>
            </div>
            <div class="card-content">
              <span class="white-text bold"><?php the_field('texto_4'); ?></span>
            </div>
            <div class="card-action">
              <a href="<?php the_field('link_contato'); ?>" class="bold">Entre em contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer('home'); ?>