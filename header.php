<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devnotes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site d-flex flex-column h-100">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'devnotes' ); ?></a>

    <div class="container">

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <?php
                        the_custom_logo();
                        ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </h1>
                    </div>

                    <div class="col-md-6 text-right">
                        <?php
                        $devnotes_description = get_bloginfo( 'description', 'display' );
                        if ( $devnotes_description || is_customize_preview() ) :
                            ?>
                            <div class="site-description text-right">
                        <span>
                            <?php echo $devnotes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div><!-- .site-branding -->
            <div class="clear"></div>

        </header><!-- #masthead -->

    </div>
