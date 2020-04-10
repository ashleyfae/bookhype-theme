<?php
/**
 * Book Database Integration
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */

namespace BookHype;

add_filter( 'book-database/link-terms', '__return_false' );