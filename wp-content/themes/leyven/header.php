<?php
if ( is_404() ) {
	wp_redirect( home_url('404-2'));
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<style type="text/css">
			.the_login_pop, .logged-in #button_top a , .button2, .button1 {
				behavior: url('<?php echo get_bloginfo('url'); ?>/border-radius.htc');
			}
		</style>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo('name'); ?><?php if(is_home()) { bloginfo('description');} else { wp_title('|'); } ?></title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_directory'); ?>/materialize.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"> -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-8705782-128']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
        <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/materialize.min.js"></script>
	</head>
	<body <?php body_class($class); ?>>
		<div id="nonFooter">
			<div id="wrapper">
				<div id="header">
					<div id="inside_header">
						<div id="the_logo">
							<div class="the_site_name">
								<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/top-logo.png" alt="logo" /></a>
							</div>
							<div id="the_site_title">
								<div id="site-description">Relieving your financial burden<br />so that you can focus on your business</div>
							</div>
							<div class="the_site_right">
								<div id="the_site_right_call">CALL: 0414 899 487</div>
								<div id="the_site_right_image"><img src="<?php bloginfo('template_directory'); ?>/images/groups.jpg" alt="logo" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="the_clear"></div>
				<div id="the_nav_line">
					<div class="the_nav">
						<div class="inside_nav">
							<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
						</div>
					</div>
				</div>
				<div class="the_clear"></div>
				<div id="the_mid">