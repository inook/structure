$( document ).ready(function() {


  console.log('ready');


  // Menu mobile
  // ----------------------
  $( ".nav-mobile-bt" ).click(function() {

    if( $('.nav-mobile').hasClass('opened') ) {
      $('body, .site-container, .nav-mobile').removeClass('opened');
    } else {
      $('body, .site-container, .nav-mobile').addClass('opened');
    }

  });

});
