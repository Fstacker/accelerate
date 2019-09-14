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
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					<header class="services-header">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</header> <!-- .services-header -->
			<?php endwhile; // end of the loop. ?>

			<!-- query to pull individual services from ACF -->
			<?php query_post('posts_per_page=4&post_type=services'); ?>
				<?php while ( have_posts()) : the_post();
					$service = get_field( 'service');
					$image = get_field( 'image' );
					$size = "full"
				?>	

					<section class="services-container">
						<article class="service-acf">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</article>

						<figure class="service-image">
							<?php echo wp_get_attachment_image($image, $size); ?>
						</figure>
					</section> <!-- services-container -->
				<?php endwhile; // end of acf query loop ?>
			<?php wp_reset_query(); ?>
				
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
