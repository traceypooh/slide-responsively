<?php
/*
Plugin Name: slide-responsively
Plugin URI: https://github.com/traceypooh/slide-responsively
Description: slide-responsively plugin.  Inspired by the "sliding-door" theme ( https://wordpress.org/themes/sliding-door/ ) but this is instead a *<a href="http://en.wikipedia.org/wiki/Responsive_web_design">responsive</a>* version, and a *plugin* instead, that allows you to freely use another theme entirely ( eg: the nicely responsive "<a href="https://wordpress.org/themes/twentyfifteen/">twenty fifteen</a>" theme from the fine folks at WordPress )
Version: 2015
Author: Tracey Pooh @tracey_pooh
Author URI: http://poohBot.com
License: GPL2
*/
?><?php

// http://codex.wordpress.org/Plugin_API/Action_Reference

// Make sure we don't expose any info if called directly
if (!function_exists('add_action'))  exit;
  
  

add_filter('template_include', function($str){
  // insert std WP header, then insert "slide-responsively" image/nav header!    
  get_header();
  
  ?>
  <div>
    <a href="/"><img src="/images/nav/poohbot-header-by.jpg"></a>
  </div>
  <div class="slide-responsively">
    <ul>
      <li><a href="/about/"     style="background-image:url(/wp-content/uploads/2009/03/about.jpg)     ">About</a></li>
      <li><a href="/biking/"    style="background-image:url(/wp-content/uploads/2010/06/biking.jpg)    ">biking</a></li>
      <li><a href="/favorites/" style="background-image:url(/wp-content/uploads/2010/06/favorites1.jpg)">favorites</a></li>
      <li><a href="/quotes/"    style="background-image:url(/wp-content/uploads/2010/06/quotes.jpg)    ">quotes</a></li>
      <li><a href="/lapses/"    style="background-image:url(/wp-content/uploads/2010/06/timelapses.jpg)">Tracey sees through time</a></li>
      <li><a href="/video/"     style="background-image:url(/wp-content/uploads/2010/06/video.jpg)     ">Video</a></li>
      <li><a href="/photos/"    style="background-image:url(/wp-content/uploads/2010/06/photos.jpg)    ">Photos</a></li>
    </ul>
  </div>
  <?php

  // we use (minimal) jQuery so depend on that from WP
  wp_enqueue_style ('slide-responsively-styles', plugins_url().'/slide-responsively/slide-responsively.css' );
  wp_enqueue_script('slide-responsively',        plugins_url().'/slide-responsively/slide-responsively.js', array('jquery'));


  // allow WP to do its normal thing..
  return $str;
}, 9); // default to one less than standard plugin priority (10)
