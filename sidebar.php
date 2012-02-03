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
      <li><a href="http://relovely.com/about">About</a></li>
      <li><a href="http://relovely.com/tutorials">Tutorials</a></li>
      <li><a href="http://relovely.com/daily-reads">Daily Reads</a></li>
    </ul>

    <ul class="social_icons">
      <li class="pinterest"><a href="http://pinterest.com/lynngrogan">pinterest</a></li>
      <li class="twitter"><a href="https://twitter.com/#!/lynngrogan">twitter</a></li>
      <li class="flickr"><a href="http://www.flickr.com/">flickr</a></li>
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
