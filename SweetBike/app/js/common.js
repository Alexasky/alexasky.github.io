
$(document).ready(function(){
  var openItem = false;
  if($.cookie("openItem") && $.cookie("openItem") != 'false'){
var openItem = parseInt($.cookie("openItem"));
}
  $(".accordion").accordion({
    active: openItem,
    collapsible: true,
    header: '.accordion-link-header',
    heightStyle: "content"
  });
  $(".accordion .accordion-link-header").click(function(){
    $.cookie("openItem", $(".accordion").accordion("option", "active"));
});
$(".accordion>li").click(function(){
$.cookie("openItem", null);
var link = $(this).find('a').attr('href');
window.location = link;
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

$(".catalog .item-catalog").each(function(i){
  $(this).find("a").attr("href","#item_"+ i);
    $(this).find(".catalog .popup-item").attr("id","item_"+ i);
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
