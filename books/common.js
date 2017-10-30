
$(function() {
  function windowSize(){
    if (($(window).width() < '992') && ($(window).width() > '752'))
    {
      $('.catalog_full').detach().insertAfter('.v-menu');
    }
    else
    {
      $('.v-menu').detach().insertAfter('.catalog_full');
    }
  }
  $(window).load(windowSize);
  $(window).resize(windowSize);

});
