<?php
/**
 * The template for displaying a single service offered
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
			<?php while ( have_posts() ) : the_post();
				$service_description = get_field('service_description');
				$service_image = get_field('service_image');
				$size = "full"
			?>
				
			<section class="service-container">
				<section class="service-text">
					<h2><?php the_title(); ?></h2>
					<?php echo $service_description; ?>
				</section> <!-- .service-text -->

				<figure class="service-image">
					<?php echo wp_get_attachment_image($service_image, $size); ?>
				</figure> <!-- .service-image -->
			</section>	<!-- .service-container -->
					
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
