$(document).ready(function() {

 $('.accordion-item').hide();


  $('.accordion .menu-link').click(function() {

    var findAccordionItem = $(this).next();
    var findAccordion = $(this).closest('.accordion');

    if (findAccordionItem.is(':visible')) {
      findAccordionItem.slideUp('fast').prev().removeClass("active");

    }
    else {
      findAccordion.find('.accordion-item').slideUp('fast').prev().removeClass("active");
      findAccordionItem.slideDown('fast').prev().addClass("active");
    }
  });

});
