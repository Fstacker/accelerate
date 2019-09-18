<?php
/**
 * Template name:  About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content services" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="services-header">	
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</header> <!-- .services-header -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content .services-->

		<section class="services-contact">
			<h3>Interest in working with us?</h3>
			<a class="button" href="#">Contact Us</a>
		</section>
	</div><!-- #primary -->

<div class="services">
	<?php get_footer(); ?>
</div>