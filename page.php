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

get_header(); ?>
    <section class="page container_12">

      <div class="main_col grid_10">

<!-- Blog Entry Start // -->
        <?php
        /* Run the loop to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-index.php and that will be used instead.
         */
         get_template_part( 'loop', 'page' );
        ?>

      </div><!-- /main_col -->

    <?php get_sidebar(); ?>

    </section>
    
    <?php get_footer(); ?>