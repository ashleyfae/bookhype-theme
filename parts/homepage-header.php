<?php
/**
 * Homepage Header
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */
?>

<h1><?php _e( 'Search for special edition books', 'bookhype' ); ?></h1>

<p class="lead"><?php _e( 'Find books that are signed, have exclusive covers, or sprayed edges.', 'bookhype' ); ?></p>

<a href="<?php echo esc_url( home_url( '/special-editions/' ) ); ?>" class="btn btn-light btn-lg" role="button"><?php _e( 'View Books', 'bookhype' ); ?></a>