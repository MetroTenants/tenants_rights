<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mto_custom
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<?php wp_head(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/mto_custom/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/d70ddbbdd8.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mto_custom' ); ?></a>
	<div class="navbar navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" rel="home" href="/" id="site-logo" title="MTO Homepage"></a>
    </div>
    <div id="nav-collapse" class="navbar-collapse collapse navbar-ex1-collapse">
			<?php wp_nav_menu( array( 'menu' => 'TOP MENU', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
      <div class="col-md-3 pull-right">
        <form class="navbar-form" role="search" method="get" action="<?php bloginfo('url'); ?>/">
	        <div class="input-group">
            <input type="text" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search" name="s" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
	        </div>
        </form>
      </div>
    </div>
	</div>

	<div id="content" class="site-content">
