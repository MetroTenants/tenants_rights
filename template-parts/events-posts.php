<?php
/**
 * Template part for displaying events and posts section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mto_custom
 */

?>

<div class="events-posts-section">
  <div class="left-section col-sm-5">
    <h2>Upcoming Events and Updates</h2>
    <p>
      We also write articles, compose guides, plan events, organize groups, train
      tenants, and many more. Check here for the lastest updates from us.
    </p>
  </div>
  <div class="right-section col-sm-7">
    <?php
    global $post;
    $args = array( 'posts_per_page' => 4 );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?>
    	<div class="events-posts">
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?></h5>
        </a>
    		<p><?php the_date(); ?></p>
    		<?php the_excerpt(); ?>
    	</div>
    <?php
    endforeach;
    wp_reset_postdata();
    ?>
  </div>
</div>
