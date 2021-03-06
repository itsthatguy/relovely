<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage relovely
 * @since Now
 */

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="blog_entry selfclear">

  <div class="blog_entry_body grid_8">
      <div class="title"><?php the_title(); ?></div>
      <?php the_content(); ?>
    </div> <!-- /blog_entry_body -->

</article>

<?php endwhile; ?>