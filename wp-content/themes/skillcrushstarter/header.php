<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Zilla+Slab:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="page-header container">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
				<span class="sub-title"><?php bloginfo('description'); ?></span>
			</a>

			<nav class="top-nav">
				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
			</nav>
		</header>

		<div id="main" class="site-main">
