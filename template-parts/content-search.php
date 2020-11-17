<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devnotes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() || 'book-critique' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			devnotes_posted_on();
			?>
            <?php if ( 'book-critique' === get_post_type() ) : ?>
                <div class="entry-meta-book-critique">
                    <span class="book-critique badge bg-warning text-dark"> <?php echo __( 'Book Critique', 'devnotes' ); ?> </span>
                </div>
            <?php endif; ?>

            <?php if ( get_field('is_translation') ) : ?>
                <div class="entry-meta-translation">
                    <span class="badge bg-warning text-dark"> <?php echo __( 'Translation', 'devnotes' ); ?></span>
                </div>
            <?php endif; ?>

		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer border-dotted">
        <?php devnotes_continue_reading(); ?>
        <div class="clear"></div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
