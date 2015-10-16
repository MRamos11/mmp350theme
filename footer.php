<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo_Theme
 */

?>

	</div><!-- #content -->

	<?php //THIS A NEW FILE UPDATED ?>
<div class="PlusFooter"> </div>
	<?php customFooter(5); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'demo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'demo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'demo' ), 'demo', '<a href="http://MR11.com" rel="designer">MR11</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
