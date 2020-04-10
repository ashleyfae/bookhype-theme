<?php
/**
 * footer.php
 *
 * @package   bookhype
 * @copyright Copyright (c) 2020, Ashley Gibson
 * @license   GPL2+
 */
?>

</div> <!--/#content-->

<footer id="colophon" class="jumbotron" role="contentinfo">
    <div class="container text-center">
        <?php printf( __( 'Copyright &copy; %d Ashley Gibson / <a href="%s">Nose Graze</a>', 'bookhype' ), date( 'Y' ), esc_url( 'https://www.nosegraze.com' ) ); ?>
    </div>
</footer>

</div> <!--/#page-->

<?php wp_footer(); ?>

</body>
</html>
