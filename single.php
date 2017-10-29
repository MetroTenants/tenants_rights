<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tenants_rights
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
 			<div class="container-fluid">
 				<div class="row">
 					<div class="col-md-7 col-md-offset-1 content-col">
 						<?php
 						while ( have_posts() ) : the_post();

 							get_template_part( 'template-parts/content', 'page' );

 							// If comments are open or we have at least one comment, load up the comment template.
 							if ( comments_open() || get_comments_number() ) :
 								comments_template();
 							endif;

 						endwhile; // End of the loop.
 						?>
 					</div>
 					<div class="col-md-3 aside-col">
 						<?php get_sidebar(); ?>
 					</div>
 				</div>
 			</div>
 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_footer();
