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

<div id="primary" class="content-area about container-fluid">
	<main id="main" class="site-main about" role="main">
		<div class="row about-hero">
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
						<a href="#history-carousel-container" data-toggle="collapse">
						<svg class="arrow-icon medium down"
							sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							viewBox="0 0 110 110" xml:space="preserve">
							<circle cx="55" cy="55" r="50"/>
							<path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
						</svg> Learn more about our history</a>
					</div>
				</div>
			</div>
			<div id="history-carousel-container" class="row collapse">
				<div id="history-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<ol class="carousel-indicators">
						<li data-target="#history-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#history-carousel" data-slide-to="1"></li>
						<li data-target="#history-carousel" data-slide-to="2"></li>
						<li data-target="#history-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img class="carousel" src="<?php echo get_template_directory_uri(); ?>/images/mto-hist-01.png" alt="MTO organizers">
							<div class="carousel-caption">
								<h3>Chicago's need for an organization to represent tenants</h3>
								<p>The Metropolitan Tenants Organization (MTO) is rooted in a 1981 Community Congress convened to find workable solutions to the affordable housing crisis at the time. The Congress recognized that Chicago needed a citywide organization to represent tenants.</p>
							</div>
							<a class="left carousel-control" href="#history-carousel" role="button" data-slide="prev">
								<img class="chevron chevron-left" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#history-carousel" role="button" data-slide="next">
								<img class="chevron chevron-right" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="item">
							<img class="carousel" src="<?php echo get_template_directory_uri(); ?>/images/mto-hist-02.png" alt="Carousel 2">
							<div class="carousel-caption">
								<h3>Establishment of Residential Landlord and Tenant Ordinance</h3>
								<p>It led to a 5-year campaign to pass Chicago's landmark Residential Landlord and Tenant Ordinance (RLTO) and the founding of MTO. Passage of the RLTO is a watershed event in MTO's history.</p>
							</div>
							<a class="left carousel-control" href="#history-carousel" role="button" data-slide="prev">
								<img class="chevron chevron-left" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#history-carousel" role="button" data-slide="next">
								<img class="chevron chevron-right" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="item">
							<img class="carousel" src="<?php echo get_template_directory_uri(); ?>/images/mto-hist-03.png" alt="Carousel 3">
							<div class="carousel-caption">
								<h3>MTO's commitment to empower tenants</h3>
								<p>Since the passage of the RLTO, MTO has remained committed to the mission of educating, organizing and empowering tenants to have a voice in the decisions that effect the availability and affordability of safe and decent housing.</p>
							</div>
							<a class="left carousel-control" href="#history-carousel" role="button" data-slide="prev">
								<img class="chevron chevron-left" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#history-carousel" role="button" data-slide="next">
								<img class="chevron chevron-right" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="item">
							<img class="carousel" src="<?php echo get_template_directory_uri(); ?>/images/mto-hist-04.png" alt="Carousel 4">
							<div class="carousel-caption">
								<h3>Our primary goals for tenants</h3>
								<p>Our primary goals are to better tenants' living conditions and preserve housing, stabilize tenancies and prevent homelessness and improve communication between landlords and tenants.</p>
							</div>
							<a class="left carousel-control" href="#history-carousel" role="button" data-slide="prev">
								<img class="chevron chevron-left" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#history-carousel" role="button" data-slide="next">
								<img class="chevron chevron-right" aria-hidden="true" src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-principles no-row-margins">
			<div class="row">
				<div class="col-md-5 left no-row-margins">
					<div class="row">
						<div class="col-md-offset-2">
							<h2>Our Principles</h2>
							<p>What are principles?  Why are they important? Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-md-7 right no-row-margins tab-content">
					<ul class="nav st-nav-tabs">
						<li class="active">
							<a href="#principles-tab1" data-toggle="tab">Affordability</a>
						</li>
						<li>
							<a href="#principles-tab2" data-toggle="tab">Development</a>
						</li>
						<li>
							<a href="#principles-tab3" data-toggle="tab">Organizing</a>
						</li>
					</ul>
					<div class="row tab-pane active" id="principles-tab1">
						<div>Affordability</div>
					</div>
					<div class="row tab-pane" id="principles-tab2">
						<div>Development</div>
					</div>
					<div class="row tab-pane" id="principles-tab3">
						<div>Organizing</div>
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
