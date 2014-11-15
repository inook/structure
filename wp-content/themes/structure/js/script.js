$( document ).ready(function() {


// HEADER SCROLL
// ----------------------

var windowHeight = $(window).height();  
var triggerHeight = 200 ;

$(window).scroll(function() {
  var y = $(window).scrollTop();
  if(y > triggerHeight) {
    $('header, .logo-large, .logo-small').addClass('scroll');
  } else {
    $('header, .logo-large, .logo-small').removeClass('scroll');
  }
});


});




