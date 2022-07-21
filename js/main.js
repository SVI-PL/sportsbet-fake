jQuery( document ).ready(function($) {
$("#username").on("mouseenter", function() {
    $(".container2 .bottomUnderline").addClass("staticUnderlineHover");
});
$("#username").on("mouseleave", function() {
    $(".container2 .bottomUnderline").removeClass("staticUnderlineHover");
});
$("#username").on("click", function() {
    $(".container2 label").addClass("entered blue2");
    $(".container2 .animatedUnderline").addClass("entered2");
    $(".container2 .animatedUnderline").removeClass("exited");
});
$("#username").on("blur", function() {
    $(".container2 label").removeClass("entered blue2");
    $(".container2 .animatedUnderline").removeClass("entered2");
    $(".container2 .animatedUnderline").addClass("exited");
});


$("#password").on("mouseenter", function() {
    $(".passwordContainer2 .bottomUnderline").addClass("staticUnderlineHover");
});
$("#password").on("mouseleave", function() {
    $(".passwordContainer2 .bottomUnderline").removeClass("staticUnderlineHover");
});
$("#password").on("click", function() {
    $(".passwordContainer2 label").addClass("entered blue2");
    $(".passwordContainer2 .animatedUnderline").addClass("entered2");
    $(".passwordContainer2 .animatedUnderline").removeClass("exited");
});
$("#password").on("blur", function() {
    $(".passwordContainer2 label").removeClass("entered blue2");
    $(".passwordContainer2 .animatedUnderline").removeClass("entered2");
    $(".passwordContainer2 .animatedUnderline").addClass("exited");
});

$(".iconContainer3").on("click", function() {
    $(".icon-eyea").toggleClass("visibility");
    $(".icon-eyea").toggleClass("visibilityOff");
});
$(".button2").on("click", function() {
    $(this).toggleClass("visibility");
});

var $modalOverlay = $('.modal-overlay'),
    $modalContainer = $('.modal-container'),
    $modalTrigger = $('.modal-trigger'),
    $modalClose = $('.modal-close');

$modalTrigger.on('click', function(){
  $modalContainer.toggleClass('modal--show');
});

$modalOverlay.on('click', function(){
  $modalContainer.toggleClass('modal--show');
});

$modalClose.on('click', function(){
  $modalContainer.removeClass('modal--show');
});

});