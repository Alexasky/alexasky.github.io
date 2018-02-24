
$(document).ready(function () {
   $('.accordion .accordion-item').hide();
    $('.accordion .menu-link').click(function(){
      $('.accordion .accordion-item').slideUp().prev().removeClass("active");
       if ($(this).next().is(":visible")){
           $(this).next().slideUp().prev().removeClass("active");
       } else {
       $(this).next().slideToggle().prev().addClass("active");
       }
      return false;
    });

     $('.accordion .accordion-item a').click(function(){
	   $('.accordion .accordion-item a').removeClass('active');
	   $(this).addClass('active');
	});
});
