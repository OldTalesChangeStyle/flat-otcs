<?php
/**
 * The template for displaying the footer
 */
?>
            <?php if ( apply_filters( 'show_flat_credits', true ) ) : ?>
                <?php flat_hook_footer_before(); ?>
                <footer class="site-info" itemscope itemtype="http://schema.org/WPFooter">
                    <?php flat_hook_footer_top(); ?>
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flat' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'flat' ); ?>"><?php printf( __( 'Proudly powered by %s', 'flat' ), 'WordPress' ); ?></a>.
                    Theme: <a id="footerPoorly" href="https://github.com/OldTalesChangeStyle/flat-otcs">A Poorly Modified Version of</a> <a id="footerFlat" href="https://wordpress.org/themes/flat/">Flat v<?php echo wp_get_theme()->get( 'Version' ) ?></a> by <a href="http://www.yoarts.com/">YoArts</a>/<a href="http://themeisle.com/">Themeisle</a>/<a href="blog.oldtales.net">OldTalesChangeStyle</a>
                </footer>
                <?php flat_hook_footer_after(); ?>
            <?php endif; ?>
                <?php flat_hook_content_bottom(); ?>
            </div>
            <?php flat_hook_content_after(); ?>
        </div>
    </div>
</div>
<?php flat_hook_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
