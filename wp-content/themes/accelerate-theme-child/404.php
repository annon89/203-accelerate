<?php
/**
 * The template for displaying the 404 page.

 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="error-page" class="site-content">
		<div class="main-content" role="main">
			<div class="error-box">
				<div class="error-content">
					<h1>Uh oh!</h1>
					<p>The page you were looking for isn't working right now.<br> We're sorry.</p>
					<a href="/accelerate/home" class="button">Take me home</a>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #contact -->

<?php get_footer(); ?>