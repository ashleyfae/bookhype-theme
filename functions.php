<?php
/**
 * Theme Functions
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */

namespace BookHype;

/**
 * Set up the theme
 */
function setup() {

    add_theme_support( 'post-thumbnails' );

    /**
     * Theme nav menus
     */
    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'bookhype' ),
    ) );

    /**
     * Switch default core markup to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /**
     * Setup the WordPress core custom background feature.
     */
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
    ) );

    /**
     * Add theme support for title tag
     */
    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Load assets
 */
function loadAssets() {

    $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '.min' : '';

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap' . $suffix . '.css', array(), '4.4.1' );
    wp_enqueue_style( 'bookhype', get_stylesheet_uri(), array( 'bootstrap' ), filemtime( get_stylesheet_directory() ) );

    //wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '4.4.1', true );

}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\loadAssets' );

/**
 * Include other files
 */
require_once 'lib/book-database.php';
require_once 'lib/menu-filters.php';