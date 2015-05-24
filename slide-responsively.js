/**************************************************************

  slide-responsibly:
  Inspired by wordpress "sliding-door" theme.
  Rewritten entirely to be responsive! 
  (and using minimal jQuery, not mootools)
  by @tracey_pooh May 2015
  https://github.com/traceypooh/slide-responsively

**************************************************************/

( function ($) {
  $(document).ready(function(){
    // DOM ready, page still (likely) loading images, etc...
    $('.slide-responsively li').mouseenter(function(e){
      $('.slide-responsively li').addClass('out');
      $(this).removeClass('out').addClass('in');
    });
    $('.slide-responsively li').mouseleave(function(e){
      $('.slide-responsively li').removeClass('out');    
      $(this).removeClass('in');
    });
  });
}) ( jQuery );
