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
 * @package tenants_rights
 */

get_header(); ?>

<div id="primary" class="content-area container-fluid">
	<main id="main" class="site-main about" role="main">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 text">
				<h1>We <span>educate</span>, <span>organize</span>, and <span>empower</span> 
				tenants to have a voice in the decisions that affect the affordability and 
				availability of safe, decent &amp; accessible housing.</h1>
			</div>
		</div>
		<div class="who-we-are no-row-margins">
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<h2>Who We Are</h2>
					<p>
						The Metropolitan Tenants Organization is a membership organization made up of 
						tenants, tenant organizations, community members and groups who support the
						mission of MTO. 
					</p>
					<div class="cta-arrow-link">
						<a href="#">
						<svg class="arrow-icon medium down"
							sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							viewBox="0 0 110 110" xml:space="preserve">
							<circle cx="55" cy="55" r="50"/>
							<path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
						</svg> Learn more about our history</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="history-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#history-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#history-carousel" data-slide-to="1"></li>
						<li data-target="#history-carousel" data-slide-to="2"></li>
						<li data-target="#history-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="la.jpg" alt="Chania">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>LA is always so much fun!</p>
							</div>
						</div>

						<div class="item">
							<img src="chicago.jpg" alt="Chicago">
							<div class="carousel-caption">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>
						</div>

						<div class="item">
							<img src="ny.jpg" alt="New York">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
?>
