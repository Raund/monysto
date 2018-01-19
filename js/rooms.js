
$(document).ready(function () {
$('.creative_bg_2').fadeOut(0);
});

$("#f1").click(function() {
$('.creative_bg_1').fadeOut(500);
setTimeout(function(){ 
$('.creative_bg_2').fadeIn(500);
}, 500);
setTimeout(function(){ 
            $('.next_cont_s').removeClass('slideUp3');
             }, 450);
     setTimeout(function(){ 
            $('.next_cont_s').addClass('slideUp3');
             }, 2000);
             
               setTimeout(function(){ 
            $('.creative_side').removeClass('slideRight2');
             }, 450); 
             
             setTimeout(function(){ 
            $('.creative_side').addClass('slideRight2');
             }, 1300);
});





$("#f2").click(function() {
$('.creative_bg_2').fadeOut(500);
setTimeout(function(){ 
$('.creative_bg_1').fadeIn(500);
}, 500);
setTimeout(function(){ 
            $('.next_cont_s').removeClass('slideUp3');
             }, 450);
     setTimeout(function(){ 
            $('.next_cont_s').addClass('slideUp3');
             }, 2000);
             
               setTimeout(function(){ 
            $('.creative_side').removeClass('slideRight2');
             }, 450); 
             
             setTimeout(function(){ 
            $('.creative_side').addClass('slideRight2');
             }, 1300);
});





$("#d1").click(function() {
$('#cd1').slideToggle(300);
});

$("#d2").click(function() {
$('#cd2').slideToggle(300);
});

$("#t1").click(function() {
$(this).fadeOut('fast');
$("#t2").fadeIn('fast');
});

$("#t2").click(function() {
$(this).fadeOut('fast');
$("#t1").fadeIn('fast');
});

$("#t3").click(function() {
$(this).fadeOut('fast');
$("#t4").fadeIn('fast');
});

$("#t4").click(function() {
$(this).fadeOut('fast');
$("#t3").fadeIn('fast');
});

      $(".one_book_2").click(function() {
	  $('html, body').animate({
        scrollTop: $("#bookme").offset().top
    }, 700);
    
});

