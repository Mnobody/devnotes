<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devnotes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				devnotes_posted_on();
				?>

                <?php if ( get_field('is_translation') ) : ?>
                    <div class="entry-meta-translation">
                        <span class="badge bg-warning text-dark"> <?php echo __( 'Translation', 'devnotes' ); ?></span>

                        <span class="author">
                            <?php if(get_field('original_author_url')) : ?>
                                <a href="<?php the_field('original_author_url') ?>"> <?php echo __( 'Original Author:', 'devnotes' ); ?> <?php the_field('original_author_title'); ?></a>
                            <?php else: ?>
                                <?php echo __( 'Original Author:', 'devnotes' ); ?> <?php the_field('original_author_title'); ?>
                            <?php endif; ?>
                        </span>
                    </div>
                <?php endif; ?>

			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'devnotes' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'devnotes' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php devnotes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
