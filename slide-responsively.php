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


// Make sure we don't expose any info if called directly
if (!function_exists('add_action'))  exit;


// INSTALL:
//   You can install this plugin by git cloning the repository into your /wp-content/plugins/ directory.
//   Then go to your WP site "dashboard" and "Activate" the "slide-responsively" plugin which you should see there.
//
// CUSTOMIZE:
// simply edit the urls and image locations below by going to your WP site "dashboard"
// and find the left-side "Plugins" and hit the "Editor" link below it.
// Find the "Select plugin to edit:" in upper right, select "slide-responsively", hite [Select] button.
// You can then update the images and links to what you like.
// Enjoy!
  

add_filter('template_include', function($str){
  // insert std WP header, then insert "slide-responsively" image/nav header!    
  get_header();
  
  ?>
  <div>
    <a href="/"><img src="http://poohBot.com/images/nav/poohbot-header-by.jpg"></a>
  </div>
  <div class="slide-responsively">
    <ul>
      <li><a href="/about/"     style="background-image:url(http://poohBot.com/images/nav/about.jpg)     ">About</a></li>
      <li><a href="/biking/"    style="background-image:url(http://poohBot.com/images/nav/biking.jpg)    ">biking</a></li>
      <li><a href="/favorites/" style="background-image:url(http://poohBot.com/images/nav/favorites.jpg) ">favorites</a></li>
      <li><a href="/quotes/"    style="background-image:url(http://poohBot.com/images/nav/quotes.jpg)    ">quotes</a></li>
      <li><a href="/lapses/"    style="background-image:url(http://poohBot.com/images/nav/timelapses.jpg)">Tracey sees through time</a></li>
      <li><a href="/video/"     style="background-image:url(http://poohBot.com/images/nav/video.jpg)     ">Video</a></li>
      <li><a href="/photos/"    style="background-image:url(http://poohBot.com/images/nav/photos.jpg)    ">Photos</a></li>
    </ul>
  </div>
  <?php

  // we use (minimal) jQuery so depend on that from WP
  wp_enqueue_style ('slide-responsively-styles', plugins_url().'/slide-responsively/slide-responsively.css' );
  wp_enqueue_script('slide-responsively',        plugins_url().'/slide-responsively/slide-responsively.js', array('jquery'));


  // allow WP to do its normal thing..
  return $str;
}, 9); // default to one less than standard plugin priority (10)
