<?php /* Template Name: Treinamentos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.igrejas {
  width:100%;
  height:500px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.igrejas h1 {
  font-size: 50px;
  padding: 10px 10px 0;
  margin: 0;
}

#mapa {
  height: auto;
  padding: 50px 0px;
}

#mapa h1 {
  margin: 20px 0 30px;
}

</style>

<!-- TOPO -->
<div class="igrejas" style="background: url('<?php bloginfo('template_url'); ?>/images/sobre.jpg');background-size:cover;background-position:0 -250px;background-repeat: no-repeat;">
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