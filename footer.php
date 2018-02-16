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
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-10">
							<?php do_action( 'twentyfourteen_credits' ); ?>
							<span>© 2008-2018 <a href="http://thirtyjin.com/">thirtyjin.com</a> All Rights Reserved.</span>
							<span>京ICP备14007437号.</span>
						</div>
					</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->


	<?php get_sidebar(); ?>
	<?php wp_footer(); ?>
</body>
</html>
