<?php
/**
 * The template for displaying the contact page

 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="contact" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #contact -->

<?php get_footer(); ?>
