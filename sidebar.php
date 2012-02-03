<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage relovely
 * @since Now
 */
?>

<!-- Navigation Start // -->
<nav class="sidebar">
  <div class="grid_2 nav_col">
    <ul class="navigation">
      <li><a href="#1">About</a></li>
      <li><a href="#2">Tutorials</a></li>
      <li><a href="#3">Daily Reads</a></li>
      <li><a href="#4">Contact</a></li>
    </ul>

    <ul class="social_icons">
      <li class="pinterest"><a href="http://pinterest.com/lynngrogan">pinterest</a></li>
      <li class="twitter"><a href="#">twitter</a></li>
      <li class="flickr"><a href="#">flickr</a></li>
    </ul>
    
    <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : 

      get_search_form(); ?>
      
      <ul class="navigation">
        <li><?php wp_register(); ?></li>
        <li><?php wp_loginout(); ?></li>
        <li><?php wp_meta(); ?></li>
      </ul>
      
    <?php endif; // end primary widget area ?>
  </div><!-- /navigation -->
</nav>
