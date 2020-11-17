<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devnotes
 */

get_header();
?>

    <main id="primary" class="site-main container flex-shrink-0">

        <div id="articles-wrapper" class="col-md-8">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header><!-- .page-header -->

                <?php
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
	</main><!-- #main -->

<?php
get_footer();
