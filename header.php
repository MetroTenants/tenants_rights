<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tenants_rights
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel='shortcut icon'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<?php wp_head(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/tenants_rights/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/d70ddbbdd8.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tenants_rights' ); ?></a>
	<div class="navbar navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-sub-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" rel="home" href="/" id="site-logo" title="MTO Homepage"></a>
    </div>
		<div class="navbar-collapse collapse">
			<?php wp_nav_menu( array( 'menu' => 'MAIN MENU', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
      <div class="col-md-4 pull-right search-form">
        <form class="navbar-form" role="search" method="get" action="<?php bloginfo('url'); ?>/">
	        <div class="input-group">
            <button class="search-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            <input type="text" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search" name="s" id="srch-term">
	        </div>
        </form>
        <a class="donate" href="https://secure.lglforms.com/form_engine/s/04Wf1V0HnbJkBWTuSfhC6w?t=1463168968">
          <button class="donate-button"><i class="fa material-icons">favorite</i> Donate</button>
        </a>
      </div>
		</div>
    <div id="nav-collapse" class="navbar-collapse collapse navbar-sub-collapse">
			<?php wp_nav_menu( array( 'menu' => 'MAIN DROPDOWN MENU', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'top-menu-nav nav navbar-nav hidden-lg hidden-md hidden-sm' ) ); ?>
			<?php wp_nav_menu( array( 'menu' => 'SUB DROPDOWN MENU', 'container' => false, 'menu_id' => 'secondary-menu', 'menu_class' => 'top-menu-nav nav navbar-nav hidden-xs' ) ); ?>
			<div class="col-md-4 pull-right search-form hidden-lg hidden-md hidden-sm">
        <form class="navbar-form" role="search" method="get" action="<?php bloginfo('url'); ?>/">
	        <div class="input-group">
            <button class="search-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            <input type="text" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search" name="s" id="srch-term">
	        </div>
        </form>
        <a class="donate" href="https://secure.lglforms.com/form_engine/s/04Wf1V0HnbJkBWTuSfhC6w?t=1463168968">
          <button class="donate-button"><i class="fa material-icons">favorite</i> Donate</button>
        </a>
      </div>
    </div>
	</div>

	<div id="content" class="site-content">
