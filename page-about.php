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
							<p>MTO believes that there are 4 key elements to Housing Justice. Housing must be Affordable, Stable, Habitable and Accessible.</p>
						</div>
					</div>
				</div>
				<div class="col-md-7 right no-row-margins tab-content">
					<ul class="nav st-nav-tabs">
						<li class="active">
							<a href="#principles-tab1" data-toggle="tab">Affordable</a>
						</li>
						<li>
							<a href="#principles-tab2" data-toggle="tab">Stable</a>
						</li>
						<li>
							<a href="#principles-tab3" data-toggle="tab">Accessible</a>
						</li>
						<li>
							<a href="#principles-tab4" data-toggle="tab">Habitable</a>
						</li>
					</ul>
					<div class="row tab-pane active" id="principles-tab1">
						<p>Affordable means that no one should have to spend all their income on housing. Individuals and families still need resources for food, clothing, education, and more. No one should have to choose between buying food or paying rent. Affordability can be accomplished through controls on rent, increases in subsidies and investment in low- and moderate income housing.</p>
					</div>
					<div class="row tab-pane" id="principles-tab2">
						<p>Stable means knowing that when problems arise, one’s home will not be at risk. For many, the loss of a paycheck or a sudden illness can mean the loss of home. Nor should anyone lose their home just because someone with more resources wishes to move into their neighborhood. Neighborhood development should protect affordable housing especially for people with lower incomes. Stability can be accomplished through Just Cause Eviction Ordinances, limits on gentrification, and emergency subsidies.</p>
					</div>
					<div class="row tab-pane" id="principles-tab3">
						<p>Accessible means that people should have quality choices to determine where their homes will be. People with disabilities, criminal records, families with children, and seniors all deserve to live in areas that have economic opportunity and safety. Accessibility can be accomplished through more protective fair housing laws preventing discrimination, easier to use subsidy programs and modifying and building housing available to people with disabilities.</p>
					</div>
					<div class="row tab-pane" id="principles-tab4">
						<p>Habitable means housing should be decent. We all need homes that are safe and well-maintained. This means homes are dry, ventilated, pest-free, clean, and contaminate free.  Habitability can be accomplished through pre-emptive building inspection programs, subsidies and investment in housing maintenance.</p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="thirteen-point-plan container-fluid no-row-margins">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<div class="thirteen-circle">
						<h2>13</h2>
						<div class="cta-arrow-link">
							<a href="/about/13-point-plan-to-make-housing-a-human-right/">
								<svg class="arrow-icon medium right"
									sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
									viewBox="0 0 110 110" xml:space="preserve">
									<circle cx="55" cy="55" r="50"/>
									<path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
								</svg> View our plan
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3>13-point Plan to Make Housing a Human Right</h3>
					<p>Housing stability is crucial to any efforts to stabilize our communities and our workforce. Thus rental housing must be a key element of any affordable housing plan.</p>
				</div>
			</div>
		</div>
		<div class="our-programs container-fluid no-row-margins">
			<div class="row">
				<div class="col-md-4 description pull-right">
					<h3>Our Programs</h3>
					<p>Our programs are the building blocks that enable us to organize and empower tenants to have a voice in the decisions that affect the affordability and availability of safe, decent and accessible housing.</p>
					<div class="details-button">
						<a href="/programs/">Program details</a>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-1 program-list pull-left">
					<div class="row">
						<!-- <div class="col-xs-3">
							<div class="feature"></div>
						</div> -->
						<div class="col-xs-12 program-description">
							<h4>Tenant Stabilization</h4>
							<p>MTO works directly with individual tenants to resolve landlord and apartment problems. We provide free tools and resources that enable tenants to document issues and seek immediate resolutions.</p>
						</div>
					</div>
					<div class="row">
						<!-- <div class="col-xs-3">
							<div class="feature"></div>
						</div> -->
						<div class="col-xs-12 program-description">
							<a href="/programs/affordable-housing-preservation-program/"><h4>Building Organizing</h4></a>
							<p>Tenant associations have a long history of creating better circumstances for all renters. Organizing broadens an individual tenant's influence and power. Working with other people facing similar problems offers the best hope for changing the world in which we live and improving our lives and the lives of those around us.</p>
						</div>
					</div>
					<div class="row">
						<!-- <div class="col-xs-3">
							<div class="feature"></div>
						</div> -->
						<div class="col-xs-12 program-description">
							<a href="/programs/legislation/"><h4>Advocacy</h4></a>
							<p>MTO continually works to strengthen rental laws and create better tenant protections by advocating for new and improved legislation on both the local, state and federal level.</p>
						</div>
					</div>
					<div class="row">
						<!-- <div class="col-xs-3">
							<div class="feature"></div>
						</div> -->
						<div class="col-xs-12 program-description">
							<h4>Tenant Advocacy Board</h4>
							<p>MTO's Advocacy Board facilitates, oversees, and organizes efforts to make housing a human right. The Advocacy Board promotes and builds campaigns that confront power and win back our human rights to housing, health, education, jobs and the ability to organize.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-team container-fluid no-row-margins">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="team-intro">
						<h3>Meet Your Team</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('staff_list') ):
					// loop through the rows of data
					while ( have_rows('staff_list') ) : the_row(); ?>
					<div class="team-member">
						<?php if(get_sub_field('image')):?>
							<div class="profile-img"
								 style="background-image: url(<?php the_sub_field('image'); ?>); background-size: cover; background-position: 50% 0;">
							</div>
						<?php endif; ?>
						<h5><?php the_sub_field('name');?></h5>
						<p><?php the_sub_field('title');?></p>
						<?php if(get_sub_field('email')):?>
							<p><?php the_sub_field('email');?></p>
						<?php endif; ?>
						<?php if(get_sub_field('phone')):?>
							<p><?php the_sub_field('phone');?></p>
						<?php endif; ?>
					</div><?php
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>
		<div class="board-of-directors container-fluid no-row-margins">
			<div class="row">
				<div class="col-md-4 col-md-offset-1 board-intro">
					<h3>Board of Directors</h3>
				</div>
				<div class="col-md-3">
					<?php
					if( have_rows('board_column_1') ):
						while ( have_rows('board_column_1') ) : the_row(); ?>
						<p><?php the_sub_field('member'); ?></p><?php
						endwhile;
					endif;
					?>
				</div>
				<div class="col-md-3">
					<?php
					if( have_rows('board_column_2') ):
						while ( have_rows('board_column_2') ) : the_row(); ?>
						<p><?php the_sub_field('member'); ?></p><?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
?>
