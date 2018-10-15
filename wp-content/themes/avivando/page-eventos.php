<?php /* Template Name: Eventos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}

</style>

<!-- TOPO -->
<div class="igrejas" style="background: url('<?php bloginfo('template_url'); ?>/images/eventos.jpg');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
  <h1 class="white-text bold"><?php the_title(); ?></h1>
</div>

<!-- INÍCIO DO WHILE -->
<div class="row">
  <div class="col s12 margin60">
    <?php echo do_shortcode('[searchandfilter search_placeholder="Busque aqui..." submit_label="Buscar" fields="search,tp_event_category" hide_empty="0" hierarchical="1" class="form"]'); ?>
  </div>
  <div class="col s12 m10 push-m1 marginb50">
    <?php echo do_shortcode("[post_grid id='199']"); ?>
  </div>
</div>

<?php get_footer(); ?>