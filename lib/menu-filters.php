<?php
/**
 * Menu Filters
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */

namespace BookHype\MenuFilters;

/**
 * Adds the `nav-item` class to each menu `<li>`
 *
 * @param array     $classes
 * @param \WP_Post  $item  The current menu item.
 * @param \stdClass $args  An object of wp_nav_menu() arguments.
 * @param int       $depth Depth of menu item. Used for padding.
 *
 * @return array
 */
function listItemClass( array $classes, $item, $args, $depth ) {
    $classes[] = 'nav-item';

    return $classes;
}

add_filter( 'nav_menu_css_class', __NAMESPACE__ . '\listItemClass', 10, 4 );

/**
 * Adds the `nav-link` class to each menu anchor
 *
 * @param array The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
 * @param \WP_Post  $item  The current menu item.
 * @param \stdClass $args  An object of wp_nav_menu() arguments.
 * @param int       $depth Depth of menu item. Used for padding.
 *
 * @return array
 */
function anchorClass( array $atts, $item, $args, $depth ) {

    $classes = array( 'nav-link' );

    if ( $item->current ) {
        $classes[] = 'active';
    }

    $atts['class'] = implode( ' ', $classes );

    return $atts;

}

add_filter( 'nav_menu_link_attributes', __NAMESPACE__ . '\anchorClass', 10, 4 );