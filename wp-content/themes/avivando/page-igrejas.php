<?php /* Template Name: Igrejas */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}

</style>

<!-- TOPO -->
<div class="igrejas hide-on-small-only" style="background: url('https://images.unsplash.com/photo-1514430700556-1807904774e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cbb22861b82b9b633c01a3a36a1b428c&auto=format&fit=crop&w=1200&q=80');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>
<div class="igrejas hide-on-med-and-up" style="background: url('https://images.unsplash.com/photo-1514430700556-1807904774e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cbb22861b82b9b633c01a3a36a1b428c&auto=format&fit=crop&w=1200&q=80');background-size:cover;background-position:0 0;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
<div class="row">
  <div class="col s12 margin60">
    <?php echo do_shortcode('[searchandfilter search_placeholder="Busque aqui..." submit_label="Buscar" fields="search,wpsl_store_category,denominacao,bairro" hide_empty="0" hierarchical="1" class="form"]'); ?>
  </div>
  <div class="col s12 m10 push-m1 marginb50">
    <?php echo do_shortcode("[post_grid id='197']"); ?>
  </div>
</div>

<?php get_footer(); ?>