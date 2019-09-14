<?php
/**
 * Template name:  Services
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
		<div class="main-content" role="main">
			<section class="service-container">
				<?php while ( have_posts() ) : the_post(); 
					$service = get_field('service');
					$image = get_field('image');
					$size = 'full';
				?>

				<article class="service-text">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</article>

				<figure class="service-image">
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				</figure>
				<?php endwhile; // end of the loop. ?>
			</section> <!-- .service-container -->
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
