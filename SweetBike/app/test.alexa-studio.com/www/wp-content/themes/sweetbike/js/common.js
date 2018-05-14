
$(document).ready(function(){

$(function () {
    var act = false;
    $( ".accordion" ).accordion({
        clearStyle: true,
        header: '.accordion-link-header',
        heightStyle: "content",
        collapsible: true,      // allow to close completely
        create: function(event, ui) {
         //get index in cookie on accordion create event
         if($.cookie('saved_index') != null){
            act =  parseInt($.cookie('saved_index'));
         }
     },

        //set sessionStorage for current index on activate event
          activate: function(event, ui) {
              //Find the index of the header. This can be the class|element you specify in the "header" init argument.
              var index =  $(this).find(".accordion-link-header").index(ui.newHeader[0]);
              sessionStorage.setItem("accIndex", index);
          },
          // "|| 0" is used to activate first by default
          active: parseInt(sessionStorage.getItem("accIndex")) || 0
          });

    $( ".accordion .accordion-link-header" ).click(function() {
       $.cookie("saved_index", $(".accordion").accordion("option", "active"), { expires: 1 });
   });

});

$(function() {
$(document.body).on('appear', '.text1', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text1').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text2', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text2').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text3', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text3').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text4', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text4').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text5', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text5').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text6', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text6').appear({force_process: true});
});
$(function() {
$(document.body).on('appear', '.text7', function(e, $affected) {
  $(this).addClass("appeared");
});
$('.text7').appear({force_process: true});
});


//подстраиваем кнопку "наверх" под размер окна
function modern_upbutton_resize(){
    var ourwidth_screen = $(window).width(); // взяли ширину окна
    if(ourwidth_screen >= 1007) { // здесь и ниже число пикселей будет вашим, так как зависит от ширины сайта
        $('.modern-upbutton').css('width',(ourwidth_screen-860)/2); // окно большое, подогнали под размер
        smallscreen = false;
    } else if (ourwidth_screen >= 955) {
        $('.modern-upbutton').addClass('its-a-mobile-modern-upbutton'); // маленькое окно или планшет
        smallscreen = false;
    } else {
        smallscreen = true; // окно настолько мало, что места для кнопки просто нет, прячем её
        $('.modern-upbutton').hide();
    }
}
//при изменении юзером размеров окна подстраиваем кнопку под новый масштаб
$(window).resize(function(){
    modern_upbutton_resize();
});
//обработка клика по кнопке наверх - прокрутка вверх
function modern_upbutton_click_scrollup() {
    $('.modern-upbutton').attr('data-pos',$(window).scrollTop()); // запоминаем место, от которого проматываем наверх
    $("body,html").animate({scrollTop: 0}, 500); // прокрутка к началу
    setTimeout(function(){
        $('.modern-upbutton').attr('data-scroll', 'down'); // меняем значение флажка "направление стрелки", теперь по следующему клику прокрутка пойдёт вниз
    }, 501);
    return false;
}
//обработка клика по кнопке наверх - прокрутка вниз
function modern_upbutton_click_scrolldown() {
    pos_to_scroll = $('.modern-upbutton').attr('data-pos'); // читаем позицию, до которой проматываем
    $('.modern-upbutton').attr('data-pos',0); // обнуляем её
    $("body,html").animate({scrollTop: pos_to_scroll}, 500); // скроллим вниз
    setTimeout(function(){
        $('.modern-upbutton').attr('data-scroll', 'up'); // меняем направление стрелочки на "вверх"
    }, 501);
    return false;
}
//управление показом и скрытием стрелки
$(window).scroll(function() {
    if(smallscreen == false && window.modern_upbutton_was_killed != true) {
        if($(window).scrollTop() >= 300) {  // если прокрутили уже 300 пикселей...
            $('.modern-upbutton').attr('data-scroll', 'up');
            $('.modern-upbutton').fadeIn(300); // показываем кнопку
        } else if ($('.modern-upbutton').attr('data-pos') == "0") {  // если верх страницы...
            if ($('.modern-upbutton').attr('data-scroll') == 'up') {
                $('.modern-upbutton').fadeOut(300); // скрываем её
            }
        }
    }
});
//функция удаления кнопки пользователем
function modern_upbutton_disable(){
    var date = new Date(new Date().getTime() + 60*1000*60*24); // берём сутки от текущего времени и даты
    document.cookie="modern_upbutton_disable_by_user=1; path=/; expires="+date.toUTCString(); // устанавливаем куку на сутки. По истечении этого времени кнопка появится снова.
    $('.modern-upbutton').addClass('modern-upbutton-was-disabled'); // ставим класс "выключено"
}
//функция проверки куки по её имени
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([^&=]+)=?([^&]*)/g, '$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
//проверяем, не удалял ли юзер кнопку
function modern_upbutton_check_for_disable(){
    var cookcheck = getCookie('modern_upbutton_disable_by_user');  // ищем куку
    if (cookcheck != undefined) { // если нашли...
        $('.modern-upbutton').addClass('modern-upbutton-was-disabled'); // убиваем её
        window.modern_upbutton_was_killed = true;
    }
}


//проверяем, не удалена ли кнопка
modern_upbutton_check_for_disable();
//подгоняем её под окно
modern_upbutton_resize();
//вешаем следилку на событие "клик по кнопке"
$('.modern-upbutton').bind("click touch ontouchstart", function(e){
    e.preventDefault();
    if ($(e.target).closest(".modern-upbutton-disable").length) return;
        if ($(this).attr('data-scroll') == 'up') {
        modern_upbutton_click_scrollup();  // крутим вверх
    } else {
        modern_upbutton_click_scrolldown(); // крутим вниз
    }
    e.stopPropagation();
});
//вешаем следилку на событие "клик по кнопке Удалить"
$('.modern-upbutton-disable').click(function(){
    modern_upbutton_disable(); // убиваем кнопку
});

$(".item-catalog").each(function(i){
  $(this).find(".popup_content").attr("href","#item_"+ i);
    $(this).find(".popup-item").attr("id","item_"+ i);
});

$('.popup-items').magnificPopup({
  delegate: '.popup_content',
  type: 'inline',
  gallery: {
    enabled: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image

  }

});

});
