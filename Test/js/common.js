$(document).ready(function(){


	let topMenuDropdownLink = $('.top-menu-dropdown .main-navigation > ul > li > a');
	let topSubmenu = $('.top-menu-dropdown .main-navigation > ul > li > a + ul');
	let topSubmenuLink = $('.top-menu-dropdown_submenu > li > a');
	let topSubmenuInnerSubmenu = $('.top-menu-dropdown_submenu > li > a + ul');
	let sidebarMenuLink = $('.sidebar-left ul > li > a');
	let sidebarMenu = $('.sidebar-left ul > li > a + ul');

	// Dropdown Button (open mobile menu)

	$('.top-menu-dropdown-btn').click(function(event){
		event.preventDefault();
		$('.top-menu-dropdown').slideToggle(600);
	});

	//Dropdown Topmenu functionality

	if(topMenuDropdownLink.next().is('ul')){

		topSubmenu.prev('a').click(function(event){
			event.preventDefault();

			if($(this).next().is(':hidden')){
				$(this).addClass('open');
				$(this).parent().addClass('active');
				$(this).next().slideToggle(600);
			}
			else{
				$(this).next().slideToggle(600);
				$(this).removeClass('open');
			}
		});

	}

	if(topSubmenuLink.next().is('ul')){

		topSubmenuInnerSubmenu.prev('a').click(function(event){
			event.preventDefault();

			if($(this).next().is(':hidden')){
				$(this).parent().addClass('active');
				$(this).next().slideToggle(600);
			}
			else{
				$(this).next().slideToggle(600);
				$(this).parent().removeClass('active');
			}

		});
	}

	//Sidebar Menu functionality

	if(sidebarMenuLink.next().is('ul')){

		sidebarMenu.prev('a').click(function(event){
			event.preventDefault();

			if($(this).next().is(':hidden')){
				$(this).parent().addClass('active');
				$(this).next().slideToggle(600);
			}
			else{
				$(this).next().slideToggle(600);
				$(this).parent().removeClass('active');
			}

		});
	}

	//Slider functionality

	let slide = $('.slide');
	let previous = $('#previous');
	let next = $('#next');
	let currentSlide = 0;

	slide.each(function() {
		 if ($(this).index()==0) {
			 $(".slider-navigation_dot").append("<div class='dot active'></div>");
		 }
		 else {
			 $(".slider-navigation_dot").append("<div class='dot'></div>");
		 }
	 });

	 let dots = $(".slider-navigation_dot").children(".dot");


	function nextSlide() {
    goToSlide(currentSlide+1);
	}

	function previousSlide() {
	    goToSlide(currentSlide-1);
		}

	function goToSlide(n) {
	    $(slide[currentSlide]).removeClass('showing');
			$('.dot.active').removeClass('active');
	    currentSlide = (n+slide.length)%slide.length;
	    $(slide[currentSlide]).addClass('showing');
			$(dots[currentSlide]).addClass('active');
		}

		$('.dot').click(function(){
      $('.dot.active').removeClass("active");
      $(this).addClass("active");
      currentSlide = $(this).index();
      $('.slide.showing').removeClass('showing');
      $(slide[currentSlide]).addClass('showing');
    });

		next.click(function(){
			nextSlide();
		});
		previous.click(function(){
			previousSlide();
		});




});
