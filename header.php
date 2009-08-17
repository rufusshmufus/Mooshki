<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bp_page_title() ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<?php bp_styles(); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
	<?php endif; ?>
	
    <script type="text/javascript" src="/wp-content/bp-themes/bpmember/js/jquery-1.1.3.1.min.js"></script>
	<script type="text/javascript" src="/wp-content/bp-themes/bpmember/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="/wp-content/bp-themes/bpmember/js/jquery.lavalamp.min.js"></script>
    <script type="text/javascript">
            $(function() {
                $("#subnav").lavaLamp({
                    fx: "backout", 
                    speed: 700,
                    click: function(event, menuItem) {
                        return false;
                    }
                });
            });
    </script>
    
    <script src="/wp-content/bp-themes/bpmember/js/sifr3.js" type="text/javascript"></script>
    <script src="/wp-content/bp-themes/bpmember/js/sifr3-config.js" type="text/javascript"></script>
    
	<?php wp_head(); ?>
	
	<!--[if IE 6]>
	<link rel="stylesheet" href="/wp-content/themes/bphome/css/ie/ie6.css" type="text/css" media="screen" />	
	<![endif]-->
	
	<!--[if IE 7]>
	<link rel="stylesheet" href="/wp-content/themes/bphome/css/ie/ie7.css" type="text/css" media="screen" />	
	<![endif]-->
</head>
<body>
<div class="theme">/mooshkivip/wp-content/bp-themes/bpmember</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/bphome/header-site.php'; ?>

