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
  height:300px;
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
        <h1>Formulário</h1>
        <p>Entre em contato através do formulário abaixo e em breve nós responderemos:</p>
        <div class="col s12 m10 push-m1">
          <?php echo do_shortcode('[contact-form-7 id="12" title="Formulário de Contato"]'); ?>
        </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>