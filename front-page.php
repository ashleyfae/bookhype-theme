<?php
/**
 * Front Page
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */

get_header();

if ( class_exists( '\\SpecialEditions\\Editions\\Database' ) && function_exists( '\\Book_Database\\get_book' ) ) : ?>
    <div id="special-editions-preview" class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a href="#recentlyadded" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true"><?php _e( 'Recently Added', 'bookhype' ); ?></a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="recentlyadded" class="tab-pane fade show active" role="tabpanel" aria-labelledby="recentlyadded">
                <?php
                $editions = \SpecialEditions\Editions\Database::query( array(
                    'number'  => 4,
                    'orderby' => 'date_created',
                    'order'   => 'DESC'
                ) );

                ?>
                <div class="row row-cols-4">
                    <?php
                    foreach ( $editions as $edition ) {
                        $book        = \Book_Database\get_book( $edition->getBookID() );
                        $attributes  = $edition->getAttributes( array( 'fields' => 'names' ) );
                        $details_url = home_url( '/special-edition/' . urlencode( $edition->get_id() ) . '/' );
                        ?>
                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <?php
                                if ( $edition->hasImage() ) {
                                    echo '<a href="' . esc_url( $details_url ) . '">';
                                    $edition->displayImage( 'large' );
                                    echo '</a>';
                                } else {
                                    // @todo
                                }
                                ?>
                                <div class="card-body">
                                    <a href="<?php echo esc_url( $details_url ); ?>">
                                        <?php echo esc_html( sprintf( '%s by %s', $book->get_title(), $book->get_author_names( true ) ) ); ?>
                                    </a>
                                </div>

                                <div class="card-footer">
                                    <?php
                                    if ( ! empty( $attributes ) ) {
                                        foreach ( $attributes as $attribute ) {
                                            ?>
                                            <span class="badge badge-pill badge-secondary"><?php echo esc_html( $attribute ); ?></span>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
endif;

get_footer();