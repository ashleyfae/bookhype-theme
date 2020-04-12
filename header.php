<?php
/**
 * Header
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bookhype' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark" role="navigation">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php _e( 'Book Hype', 'bookhype' ); ?></a>

                <div id="main-navigation" class="navbar-collapse">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'menu_class'     => 'nav justify-content-center',
                        'fallback_cb'    => '__return_false'
                    ) );
                    ?>
                </div>
            </nav>

            <?php
            if ( is_front_page() ) {
                get_template_part( 'parts/homepage', 'header' );
            }
            ?>
        </div>
    </header>

    <div id="content">