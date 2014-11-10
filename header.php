<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Professional
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php global $option_setting; ?>
<div id="page" class="hfeed site">
        <div class="container zone_user">
            <div class="date_zone"><?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?></div>
            <div class="follow_us">Follow us
                <a href="http://www.facebook.com/thestarkenya" title="Facebook" target="_blank"><img src="http://www.the-star.co.ke/sites/all/themes/thestar/images/social-facebook-16.png"></a>
                <a href="http://www.twitter.com/thestarkenya" title="Twitter" target="_blank"><img src="http://www.the-star.co.ke/sites/all/themes/thestar/images/social-twitter-16.png"></a>
                <a href="/rss.xml" title="RSS"><img src="http://www.the-star.co.ke/sites/all/themes/thestar/images/social-rss-16.png"></a>
            </div>
        </div>
    <div class="container">
        <div class="brand_header">
            <div class="row">
                <div class="span4">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
<span class="logo-description" style="float: right;font-weight: 100 !important;">
                </div>
                <div class="span5" style="float:right;width:380px !important;margin-top: 25px;">
                    <form class="navbar-search" action="http://the-star.co.ke/" method="post" id="search-block-form" accept-charset="UTF-8" target="_self"><div><div class="container-inline">
                                <input title="Enter the terms you wish to search for." class="custom-search-box form-text" placeholder="" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128">
                                <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit"></div>
                            <input class="custom-search-selector custom-search-types" type="hidden" name="custom_search_types" value="o-google_cse">
                            <input type="hidden" name="form_build_id" value="form-odAZzR_CXSGeKQqwh1NfAdXxS5TNZLD1IEK_x9zCvfQ">
                            <input type="hidden" name="form_id" value="search_block_form">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--.container-->

<div id="top-nav">
	<div class="container">
		<nav id="site-navigation" class="main-navigation col-md-12" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'professional' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'professional' ); ?></a>
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->	
	</div>
</div>
	<?php if(isset($option_setting['slider-enable-on-home'])):
	 		  get_template_part('slider');
	 		  get_template_part('showcase');
	 	  else :
	 	  	  get_template_part('defaults/slider','default');
	 		  get_template_part('defaults/showcase','default');
	 	  endif; ?>
	
	<div id="content" class="site-content container">