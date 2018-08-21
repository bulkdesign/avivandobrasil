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
<div id="oquee" class="parallax-container not-so-black z-depth-4 hauto">
  <div class="container">
    <div class="row">
      <!-- DESKTOP -->
      <div class="col s8 push-s2 margin50 marginb50">
        <h1 class="white-text bold">Unidade + Jesus = <span class="texto-amarelo">Avivando</span></h1>
        <h3 class="white-text">Nós cremos que através da unidade da igreja de Cristo nesta terra + um genuíno reconhecimento de nossa identidade e do sacrifício de Jesus na cruz será gerado um avivamento e um despertar de cada um de nós. Avivar é você tornar-se mais vivo, animar-se, avigorar-se, reanimar seu espírito. E para isso é necessário estar ligado à videira verdadeira e produzir frutos. É para isso que o Avivando Brasil foi criado, para te ajudar a manter a chama acesa e contagiar outros.</h3>
      </div>
    </div>
  </div>
</div>
<!-- AVIVE VOCÊ TAMBÉM -->
<div class="hide-on-small-only parallax-container" style="height: 700px">
  <div class="texto-por-cima-parallax">
    <div class="row">
      <div class="col s8 push-s2 margin50 marginb50">
        <h1 class="texto-amarelo bold">Avive você também!</h1>
        <h3 class="white-text">
          O Avivando Brasil é um portal de informações que deixa você por dentro de tudo que<br>
          acontece no movimento cristão evangélico do Brasil. Desde informações e localização das<br>
          principais igrejas até datas de eventos, congressos, treinamentos, bandas e pastores que<br>
          estarão na sua cidade e nas igrejas.
          <br><br>
          Tudo em um só lugar! Com o Avivando Brasil você fica sempre ligado e não perde nada!
          <br><br>
          Inscreva-se e receba informações semanais! Quem estará tocando e pregando? Onde será?<br>
          Quais serão os dias e horários? Quanto é a inscrição?<br>
          Com o Avivando Brasil você por dentro de tudo!
        </h3>
        <br>
        <a href="#" class="btn btn-destaque texto-amarelo">BUSCAR IGREJAS PRÓXIMAS</a>
      </div>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section3.jpg" />
  </div>
</div>
<!-- ENCONTRE AS IGREJAS -->
<div class="hide-on-small-only parallax-container" style="height: 700px">
  <div class="container">
    <div class="row">
      <div class="col s8 push-s2 margin50 marginb50">
        <h1 class="padding40 texto-escuro bold">Encontre as Igrejas mais próximas:</h1>
        <br>
        <a href="#" class="btn btn-destaque texto-amarelo">Ver todas as Igrejas</a>
      </div>
    </div>
  </div>
</div>
<!-- PRÓXIMOS EVENTOS -->
<div class="grey lighten-2" style="height: 800px">
  <div class="container">
    <div class="row">
      <div class="col s12 margin70 marginb50">
        <h1 class="padding20 texto-escuro bold">Próximos Eventos:</h1>
        <h3 class="texto-menos-escuro fs25">Veja abaixo os principais eventos que acontecerão nos próximos dias:</h3>
      </div>
      <div class="col s12">
        <div class="col s12 m4">
          <div class="container-evento">
            <img class="image-center" src="<?php bloginfo('template_url'); ?>/images/evento1.png" />
            <h3 class="bold padding15">Conferência do Espírito Santo Lagoinha</h3>
            <p>Conferência na Igreja Batista da Lagoinha</p>
          </div>
          <a href="#" class="btn btn-destaque grey-text">Mais informações</a>
        </div>
        <div class="col s12 m4">
          <div class="container-evento">
            <img class="image-center" src="<?php bloginfo('template_url'); ?>/images/evento2.png" />
            <h3 class="bold padding15">Conferência Sounds</h3>
            <p>Conferência de Louvor e Adoração na Comunidade Alcance Curitiba, PR</p>
          </div>
          <a href="#" class="btn btn-destaque grey-text">Mais informações</a>
        </div>
        <div class="col s12 m4">
          <div class="container-evento">
            <img class="image-center" src="<?php bloginfo('template_url'); ?>/images/evento3.png" />
            <h3 class="bold padding15">Conferência Profética</h3>
            <p>Conferência Profética na sede da IEQ - Belém/PA</p>
          </div>
          <a href="#" class="btn btn-destaque grey-text">Mais informações</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ENCONTRE OS EVENTOS -->
<div class="hide-on-small-only parallax-container" style="height: 700px">
  <div class="container">
    <div class="row">
      <div class="col s8 push-s2 margin50 marginb50">
        <h1 class="padding40 texto-escuro bold">Encontre os Eventos mais próximos:</h1>
        <br>
        <a href="#" class="btn btn-destaque texto-amarelo">Ver todos os Eventos</a>
      </div>
    </div>
  </div>
</div>
<!-- NEWSLETTER -->
<div class="hide-on-small-only parallax-container">
  <div class="texto-por-cima-parallax">
    <div class="row">
      <div class="col s8 push-s2 margin50 marginb50">
        <h1 class="texto-amarelo bold">Deseja ficar por dentro das novidades?</h1>
        <h3 class="white-text">
          Se você deseja receber em seu e-mail todas as novidades do Avivando Brasil, assine nossa newsletter:
        </h3>
        <form class="newsletter">
          <div class="row">
            <div class="col s12">
              <div class="col s12 m5 paddingr0">
                <input type="text" placeholder="Nome completo" />
              </div>
              <div class="col s12 m5 paddingr0">
                <input type="text" placeholder="Seu e-mail" />
              </div>
              <div class="col s12 m2 right">
                <button class="btn-destaque white-text" type="submit">ENVIAR</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/newsletter.jpg" />
  </div>
</div>

<?php get_footer(); ?>