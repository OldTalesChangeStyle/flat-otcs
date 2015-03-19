<?php
/**
 * The template for displaying the footer
 */
?>
			<?php if ( apply_filters( 'show_flat_credits', true ) ) : ?>
				<?php flat_hook_footer_before(); ?>
				<footer class="site-info" itemscope itemtype="http://schema.org/WPFooter">
					<?php flat_hook_footer_top(); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flat' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'flat' ); ?>"><?php printf( __( 'Powered by %s', 'flat' ), 'WordPress' ); ?></a>.
					<?php printf( __( 'Theme: %1$s by %2$s.', 'flat' ), '<a href="'.esc_url( 'https://github.com/OldTalesChangeStyle/flat-otcs/tree/master' ).'" title="'.esc_attr( 'Github Repo for this Modified Theme' ).'" style="color:#9900CC">A <b>Poorly</b> Modified Version</a> of  <a href="'.esc_url( 'http://www.yoarts.com/blog/wordpress/free-flat-design-wordpress-theme.html' ).'" title="'.esc_attr( 'Flat WordPress Theme' ).'" style="color:#FF9900">Flat '.wp_get_theme()->get( 'Version' ).'</a>', '<a href="'.esc_url( 'http://www.yoarts.com/' ).'" title="'.esc_attr( 'YoArts\' Site' ).'"  style="color:#FF9900">YoArts</a>' ); ?>
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