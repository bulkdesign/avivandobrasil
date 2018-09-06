(function($) {
  $(function() {
    $('.parallax').parallax();
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
    $('.slider').bxSlider();
  });

})(jQuery);