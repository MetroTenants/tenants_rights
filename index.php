<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mto_custom
 */

get_header(); ?>

	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main" role="main">

		<?php
		if ( is_home() ) { ?>
				<div class="main-home-content">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="left-section col-sm-5">
									<h1>We are the Metropolitan Tenants Organization.</h1>
								</div>
								<div class="right-section col-sm-7">
									<p>
										We are tenants' rights advocates educating, organizing, and empowering
										tenants to exercise their human right to affordable and safe housing.
									</p>
									<div class="cta-arrow-link">
										<a href="#"><i class="glyphicon glyphicon-circle-arrow-down"></i> Get to know us</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 resolution-button">
									<p>Get started on your housing resolution</p>
									<a class="cta-button-link" href="/get-assistance/">Get Assistance</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<?php get_template_part( 'template-parts/feature-images' ); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php get_template_part( 'template-parts/events-posts' ); ?>
				</div>
			</div>
		</div>
		<div class="what-were-about container-fluid">
			<?php get_template_part( 'template-parts/what-were-about' ); ?>
		</div>
		<div class="squared-away-feature container-fluid"
			<?php get_template_part ('template-parts/squared-away-feature' );
		}
		else { ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php } ?>
<?php
// get_sidebar();
get_footer();
?>
