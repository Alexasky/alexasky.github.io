$(document).ready(function(){
   $('.owl-carousel').owlCarousel({
		 items:1,
     loop:true,
     lazyLoad: true,
		 animateOut: 'fadeOut'
    });
    function heightDetect(){
      $(".header-bg").css("height", $(window).height());
    }
    heightDetect();

    $(window).resize(function(){
      heightDetect();
    });
    $(".arrow").mPageScroll2id();
});
