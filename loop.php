<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Relovely
 * @since January 20, 2012
 */

 ?>


<?php /* POST LOOP */ ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <article class="blog_entry selfclear">
    <div class="date grid_1">
      <div class="month"><?php the_time('M') ?></div>
      <div class="day"><?php the_time('d') ?></div>
      <div class="year"><?php the_time('Y') ?></div>
    </div>
    <div class="blog_entry_body grid_8">
      <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      <?php the_content(); ?>
      <div class="tags"><?php the_category(', '); ?></div>
    </div> <!-- /blog_entry_body -->
  </article> <!-- /blog_entry -->
        
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<!-- Paginator Start // -->
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="paginator">
    <ul>
      <li><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></li>
      <li><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></li>
    </ul>
  </div> <!-- /paginator -->
<?php endif; ?>