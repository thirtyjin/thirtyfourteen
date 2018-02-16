<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<div id="mySidenav" class="sidenav">
  <div class="sidebar_header">
    <button class="closebtn"></button>
  </div>
    <nav id="mobile-navigation" class="site-navigation mobile-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary',
              'container' => 'div',
              'container_class' => '',
              'container_id' => '',
              'menu_class' => 'sidebar-nav-menu',
              'menu_id' => 'sidebar-menu',
              'echo' => true,
              'fallback_cb' =>'wp_page_menu',
              'before' => '',
              'after' => '',
              'link_before' => '',
              'link_after' => '',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'item_spacing' => 'preserve',
              'depth' => 0,
              'walker' => '' ) ); ?>
    </nav>

    <div id="secondary">
    	<?php
    		$description = get_bloginfo( 'description', 'display' );
    		if ( ! empty ( $description ) ) :
    	?>
    	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
    	<?php endif; ?>

    	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
    	<nav role="navigation" class="navigation site-navigation secondary-navigation">
    		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
    	</nav>
    	<?php endif; ?>

    	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    		<?php dynamic_sidebar( 'sidebar-1' ); ?>
    	</div><!-- #primary-sidebar -->
    	<?php endif; ?>

    </div><!-- #secondary -->
</div>

<!-- 背景遮罩 -->
<div id="myModal" class="blur_modal"></div>
