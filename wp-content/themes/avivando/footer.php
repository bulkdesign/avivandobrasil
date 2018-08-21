<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

    </div><!-- .col-full -->
  </div><!-- #content -->

  <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container center">
          Andando Com Jesus © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>

</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/bootstrap-table.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/filter-control/bootstrap-table-filter-control.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/funcoes.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $('ul.tabs').tabs('select_tab', 'tab_id');
  $("input[name=billing_postcode]").blur(function(){
    var cep = $(this).val();
    if(cep){
    var url = 'https://viacep.com.br/ws/' + cep + '/json/';
      $.ajax({
        url: url,
        dataType: 'json',
        crossDomain: true,
        contentType: "application/json",
        success : function(json){

        if(json.logradouro){

          $("input[name=billing_address_1]").val(json.logradouro);
          $("input[name=billing_neighborhood]").val(json.bairro);
          $("input[name=billing_city]").val(json.localidade);

          }
        }
      });
    }
  });
});
 
</script>
<style type="text/css">
  
.storefront-full-width-content .content-area {
  height: auto !important;
}

</style>

</body>
</html>