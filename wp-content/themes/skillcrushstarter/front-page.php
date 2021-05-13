<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  
					<a href="https://www.linkedin.com/in/nikkibollman/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/nikkinbird" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="featured-work">
		<div class="site-content">

			<h4>Featured Work</h4>

			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=portfolio_project'); ?>
	 					<?php while ( have_posts() ) : the_post();
	 						$image_1 = get_field('image_1');
	 						$size = "medium";
	 					 ?>
		 				<li class="individual-featured-work">
		 					 <figure>
		 					 	<?php echo wp_get_attachment_image($image_1, $size); ?>
		 					 </figure>

		       				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		       			</li>
	     				<?php endwhile; ?> 
	    			<?php wp_reset_query(); ?>
	    	</ul>

			</div>
	</section>

<?php get_footer(); ?>
