<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage twenty_twenty
 * @since Twenty Twenty Child
 */
?>

<div id="sidebar">
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div>
