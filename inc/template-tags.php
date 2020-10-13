<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package devnotes
 */

if ( ! function_exists( 'devnotes_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function devnotes_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo '<span class="posted-on">' . $time_string . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'devnotes_continue_reading' ) ) :
    function devnotes_continue_reading() {
        echo '<a href="' . get_permalink() .'" class="continue-reading">' . sprintf( esc_html__( 'Continue reading %s' ), '»' ) . '</a>';
    }
endif;

if ( ! function_exists( 'devnotes_entry_footer' ) ) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function devnotes_entry_footer() {
        // Hide category and tag text for pages.
        if ( 'post' === get_post_type() ) {
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'devnotes' ) );
            if ( $tags_list ) {
                echo '<span class="tags-links">' . esc_html__( 'Tags: ' ) . $tags_list . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }
        }
    }
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
