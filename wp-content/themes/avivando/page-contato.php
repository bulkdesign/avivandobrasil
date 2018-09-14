<?php /* Template Name: Contato */ ?>
<?php get_header();?>

<style type="text/css">
  
input[type=submit] {
  background-color: #72936F !important;
  color: #FFFFFF !important;
  padding: 0 25px;
  border-radius: 4px;
}

textarea, input:not([type]), input[type=text]:not(.browser-default), input[type=email]:not(.browser-default), input[type=tel]:not(.browser-default), textarea.materialize-textarea {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  text-align: left;
  padding-left: 15px;
  margin-top: 5px;
  background-color: #FFFFFF
}

textarea, textarea:hover, textarea:active {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  background: #FFFFFF;
  text-align: left;
  box-shadow: none;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #666666 !important;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #666666 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #666666 !important;
}

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.contato {
  width:100%;
  height:500px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.contato h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<!-- TOPO -->
<div class="contato" style="background: url('<?php bloginfo('template_url'); ?>/images/contato.jpg');background-size:cover;background-repeat: no-repeat;">
  <h1 class="white-text bold">Contato</h1>
</div>

<div class="container margin50 marginb50">
	<div class="row">
    <div class="col s12">
      <div class="col s12 m6">
        <h1 class="left-align">Localização</h1>
        <h3 class="left-align">Avivando Brasil</h3>
        <p class="left-align">Telefone: (41) 99206-1229<br>
        Endereço: Rua de Exemplo, 12 - Santa Felicidade - Curitiba/PR</p>
        <iframe class="margin10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.0226080089706!2d-49.30078858470264!3d-25.437507683785057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3ec88fc91f9%3A0x81262e1586c37708!2sR.+Jos%C3%A9+Domakoski%2C+124-246+-+Bigorrilho%2C+Curitiba+-+PR%2C+80730-140!5e0!3m2!1sen!2sbr!4v1536912305037" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  		</div>
      <div class="col s12 m6">
        <h1>Formulário</h1>
        <p>Entre em contato através do formulário abaixo e em breve nós responderemos:</p>
        <?php echo do_shortcode('[contact-form-7 id="12" title="Formulário de Contato"]'); ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>