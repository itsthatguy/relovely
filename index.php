<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Relovely
 * @since January 20, 2012
 */

get_header(); ?>
    <section class="page container_12">

      <div class="main_col grid_10">

<!-- Blog Entry Start // -->
        <?php
        /* Run the loop to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-index.php and that will be used instead.
         */
         get_template_part( 'loop', 'index' );
        ?>

      </div><!-- /main_col -->

    <?php get_sidebar(); ?>

    </section>
    
    <?php get_footer(); ?>