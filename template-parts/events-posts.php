<?php
/**
 * Template part for displaying events and posts section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mto_custom
 */

?>

<div class="events-posts-section row">
  <div class="left-section col-md-4 col-md-offset-1">
    <h2>Upcoming Events &amp; Updates</h2>
    <div class="social-share">
      <a class="facebook" href="http://www.facebook.com/share.php?u=" target="blank"><i class="fa fa-facebook"></i></a>
      <a class="twitter" href="http://twitter.com/intent/tweet?status=title+url" target="blank"><i class="fa fa-twitter"></i></a>
    </div>
    <p>
      We also write articles, compose guides, plan events, organize groups, train
      tenants, and many more. Check here for the lastest updates from us.
    </p>
  </div>
  <div class="right-section col-md-6">
    <?php
    global $post;
    $args = array( 'posts_per_page' => 4 );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?>
    	<div class="events-posts row">
        <div class="col-md-3 hidden-sm hidden-xs center-items no-row-margins">
          <?php $width = get_settings ( "cp_thumbWidth_Column" );
        		$height = get_settings ( "cp_thumbHeight_Column" );
        		if ( $width == 0 ) { $width = 100; }
        		if ( $height == 0 ) { $height = 100; }
        	?>
        	<?php $status = get_settings ( "cp_thumbAuto" );
        		if ( $status != "first" ) { ?>
        	<?php
        	//Check if custom field key "Image" has a value
        	$values = get_post_custom_values("Image");
        	if (isset($values[0])) {
        	?>
        		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
        $values = get_post_custom_values("Image"); echo $values[0]; ?>&amp;w=<?php echo $width; ?>&amp;h=<?php echo $height; ?>&amp;zc=1&amp;q=100"
        alt="<?php the_title(); ?>" class="left" width="<?php echo $width; ?>px" height="<?php echo $height; ?>px"  /></a>
        		<?php } ?>

        	<?php } else { ?>

        	<?php $id =$post->ID;
          $the_content =$wpdb->get_var("SELECT post_content FROM $wpdb->posts WHERE ID = $id");
          $pattern = '!<img.*?src="(.*?)"!';
          preg_match_all($pattern, $the_content, $matches);
          $image_src = $matches['1'][0]; ?>

        	<?php if($image_src != '') { ?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <img src="<?php echo $image_src; ?>"
            alt="<?php the_title(); ?>" class="left img-thumb" /></a><?php } ?>

        	<?php } ?>
        </div>
        <div class="col-md-9 event-post-content no-row-margins">
          <div class="row">
            <div class="col-md-12 col-sm-9 col-xs-9">
              <a href="<?php the_permalink(); ?>">
                <h5><?php the_title(); ?></h5>
              </a>
              <p><?php the_date(); ?></p>
          		<?php the_excerpt(); ?>
            </div>
            <div class="col-md-12 col-sm-3 col-xs-3">
              <div class="read-link">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/read.svg" />
                  <span>Read</span>
                </a>
              </div>
            </div>
          </div>
        </div>
    	</div>
    <?php
    endforeach;
    wp_reset_postdata();
    ?>
    <div class="row">
      <div class="cta-arrow-link">
        <a href="/category/latest-news/">
          <svg class="arrow-icon medium right"
             sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             viewBox="0 0 110 110" xml:space="preserve">
            <circle cx="55" cy="55" r="50"/>
            <path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
          </svg> See more updates</a>
      </div>
    </div>
  </div>
</div>
