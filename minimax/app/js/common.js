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

		var arrow = $(".arrow");
    arrow.mPageScroll2id();
		arrow.click(function(){
			arrow.css('outline', 'none');
		});


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




		var slidesRight = $(".slides-right").children(".s-block-slider_item");
		var currentSlideRight = 0;

		for (j=0; j < slidesRight.length; j++) {
			if (j==0) {
				$(".slider_navigation-right").append("<div class='main-dot-right active'></div>");
			}
			else {
				$(".slider_navigation-right").append("<div class='main-dot-right'></div>");
			}
		}
		var mainDotsright = $(".slider_navigation-right").children(".main-dot-right");

		function nextSlideright() {
			if (slidesRight.length !== 0){
				slidesRight[currentSlideRight].className = 's-block-slider_item';
				$(".main-dot-right.active").removeClass("active");
				currentSlideRight = (currentSlideRight+1)%slidesRight.length;
				slidesRight[currentSlideRight].className = 's-block-slider_item showing';
				mainDotsright[currentSlideRight].className = 'main-dot-right active';
			}
		}
		$('.main-dot-right').click(function(){
			$(".main-dot-right.active").removeClass("active");
			$(this).addClass("active");
			currentSlideRight = $(this).index();
			$(".s-block-slider_item.showing").removeClass("showing");
			slidesRight[currentSlideRight].className = 's-block-slider_item showing';
		});
		setInterval(nextSlideright,6000);

		var slidesLeft = $(".slides-left").children(".s-block-slider_item");
		var currentSlideLeft = 0;

		for (j=0; j < slidesLeft.length; j++) {
			if (j==0) {
				$(".slider_navigation-left").append("<div class='main-dot-left active'></div>");
			}
			else {
				$(".slider_navigation-left").append("<div class='main-dot-left'></div>");
			}
		}
		var mainDotsleft = $(".slider_navigation-left").children(".main-dot-left");

		function nextSlideleft() {
			if (slidesLeft.length !== 0){
				slidesLeft[currentSlideLeft].className = 's-block-slider_item';
				$(".main-dot-left.active").removeClass("active");
				currentSlideLeft = (currentSlideLeft+1)%slidesLeft.length;
				slidesLeft[currentSlideLeft].className = 's-block-slider_item showing';
				mainDotsleft[currentSlideLeft].className = 'main-dot-left active';
			}
		}
		$('.main-dot-left').click(function(){
			$(".main-dot-left.active").removeClass("active");
			$(this).addClass("active");
			currentSlideLeft = $(this).index();
			$(".s-block-slider_item.showing").removeClass("showing");
			slidesLeft[currentSlideLeft].className = 's-block-slider_item showing';
		});
		setInterval(nextSlideleft,6000);

		var video = $('.video');
		var videoPlay = $('.video-overlay-play');
		var videoPause = $('.video-overlay-pause');

		video.click(function(){
			video.off('mouseenter mouseleave');
			$('.video-overlay').css('opacity', '0');
			if(this.paused || this.ended){
				video.mouseenter(function () {
    		videoPlay.css('opacity', '0');
				videoPause.css('opacity', '1');
				});
				video.mouseleave(function () {
				videoPlay.css('opacity', '0');
				videoPause.css('opacity', '0');
				});
				this.play();
			}else{
				video.mouseenter(function () {
    		videoPlay.css('opacity', '1');
				videoPause.css('opacity', '0');
				});
				video.mouseleave(function () {
				videoPlay.css('opacity', '0');
				videoPause.css('opacity', '0');
				});
				this.pause();
			}
		});

		video.on("ended", function (){
	    this.src = this.src
			video.off('mouseenter mouseleave');
		});

		videoPlay.click(function(){
			videoPlay.css('opacity', '0');
		});

		videoPause.click(function(){
			videoPause.css('opacity', '0');
		});


});
