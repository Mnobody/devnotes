<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devnotes
 */

get_header();
?>

    <main id="primary" class="site-main container flex-shrink-0">

        <div class="row">

            <div id="articles-wrapper" class="col-md-8">

                <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) :
                        ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
                        <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                    the_posts_pagination(array('mid_size' => 10));

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </div>

            <div id="sidebar-wrapper" class="col-md-4">
                <?php get_sidebar(); ?>
            </div>

        </div>

	</main><!-- #main -->

<?php
get_footer();
