<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<header class="archive-header">

		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 col-lg-10">
					<h2 class="archive-title">
						<?php printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?>
					</h2>

					<?php // Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</div>
			</div>
		</div>

</header><!-- .archive-header -->

	<section id="primary" class="content-area container">
		<div class="row">
		<div id="content" class="site-content col-sm-12 col-md-12 col-lg-10" role="main">

			<?php if ( have_posts() ) : ?>

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
		</div>
	</section><!-- #primary -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
