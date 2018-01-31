<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="project-cover" <?php post_class(); ?>>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
		<div class="project-cover-thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); ">
			<?php //twentyfourteen_post_thumbnail(); ?>
		</div>
	</a>


	<header class="project-cover-title">

		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

	</header><!-- .entry-header -->

	<div class="project-cover-meta entry-meta ">
		<?php  echo get_the_term_list($post->ID, 'project-type', '<span class="cat-links">', ' + ','</span>'); ?>

		<?php the_date( 'Y', '<span>', '</span>' ); ?>

	</div>


</article><!-- #post-## -->
