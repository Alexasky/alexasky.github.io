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


		var slides = $(".slides").children(".slide");
		var currentSlide = 0;

		for (j=0; j < slides.length; j++) {
			if (j==0) {
				$(".slider_navigation").append("<div class='dot active'></div>");
			}
			else {
				$(".slider_navigation").append("<div class='dot'></div>");
			}
		}
		var dots = $(".slider_navigation").children(".dot");

		function nextSlide() {
			if (slides.length !== 0){
				slides[currentSlide].className = 'slide';
				$(".dot.active").removeClass("active");
				currentSlide = (currentSlide+1)%slides.length;
				slides[currentSlide].className = 'slide showing';
				dots[currentSlide].className = 'dot active';
			}
		}
		$('.dot').click(function(){
			$(".dot.active").removeClass("active");
			$(this).addClass("active");
			currentSlide = $(this).index();
			$(".slide.showing").removeClass("showing");
			slides[currentSlide].className = 'slide showing';
		});
		setInterval(nextSlide,6000);

});
