<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info container">
					<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-12 col-lg-10">
							<?php do_action( 'twentyfourteen_credits' ); ?>
							© 2008-2017 <a href="http://thirtyjin.com/">thirtyjin.com</a> All Rights Reserved.  京ICP备14007437号.
						</div>
					</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
