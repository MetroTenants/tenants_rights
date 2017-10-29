<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tenants_rights
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-cta">
		<div class="sidebar-header">
			<h4>Support MTO</h4>
		</div>
		<div class="sidebar-content">
			<p>Please, consider supporting us so that we can continue to serve our tenant community.</p>
			<div class="cta-arrow-link">
				<a href="#">
					<svg class="arrow-icon medium right"
							sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							viewBox="0 0 110 110" xml:space="preserve">
						<circle cx="55" cy="55" r="50"/>
						<path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
					</svg> Give support
				</a>
			</div>
		</div>
	</div>
	<?php
		$args = tenants_rights_related_posts( get_the_ID() );
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) { ?>
			<div class="related-posts-sidebar">
				<h4>Related Content</h4>
			<?php while ( $query->have_posts() ) { 
				$query->the_post();
			?>
				<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<?php
			}
		}
	?>
	</div>
	<?php /*dynamic_sidebar( 'sidebar-1' ); */ ?>
</aside><!-- #secondary -->
