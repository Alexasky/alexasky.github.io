$(document).ready(function(){
  $(".list-block_item_link").click(function(){
  $(".list-block_item_link").removeClass("active");
  $(this).addClass("active");
  });
  $(".menu-inner_list_item_link").click(function(){
  $(".menu-inner_list_item_link").removeClass("active");
  $(this).addClass("active");
  });


  var myContainer = $('.list-block')

$(myContainer).on('click', '.list-block_item_link', function () {
    var scrollTo = $(this);
    myContainer.animate({
        scrollTop: scrollTo.offset().top - myContainer.offset().top + myContainer.scrollTop()

    });
});

})
