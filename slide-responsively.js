/**************************************************************

  slide-responsively:
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
      // user has hovered over a nav img.  (class) mark it "in" and the others "out"
      $('.slide-responsively li').addClass('out');
      $(this).removeClass('out').addClass('in');
    });
    $('.slide-responsively li').mouseleave(function(e){
      // user has stopped hovering.  remove all "out", then "in", class markers.
      $('.slide-responsively li').removeClass('out');    
      $(this).removeClass('in');
    });
  });
}) ( jQuery );
