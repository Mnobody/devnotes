<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devnotes
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <p> © 2020<?php echo date('Y') !== '2020' ? ('-' . date('Y')) : ''; ?> <?php bloginfo( 'name' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
