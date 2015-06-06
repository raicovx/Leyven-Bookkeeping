<?php
if ( is_404() ) {
	wp_redirect( home_url('404-2'));
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!--[if lte IE 8]><script src="<?php echo get_bloginfo('template_directory');?>/js/html5shiv.js"></script><![endif]-->
		<style type="text/css">
			.the_login_pop, .logged-in #button_top a , .button2, .button1 {
				behavior: url('<?php echo get_bloginfo('url'); ?>/border-radius.htc');
			}
		</style>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo('name'); ?><?php if(is_home()) { bloginfo('description');} else { wp_title('|'); } ?></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_directory'); ?>/css/materialize.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php if(get_the_title() == "Bookkeeping"){ ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/bookkeeping.css"> <?php }; ?>
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
         <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/main.js"></script>
	</head>
	<body <?php body_class($class); ?>>
		<div id="nonFooter">
			<div id="wrapper">
				<div id="header" class="row">
					<div class="topBar">  <div class="col s12 m12 l6"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/top-logo.png" alt="logo" /></a></div><div class="col s12 m12 l6 headerText">  <a class="waves-effect waves-light btn-large phoneBtn" href="tel:0414 899 487"><i class="mdi-communication-call left comm"></i>0414 899 487</a><a class="waves-effect waves-light btn-large emailBtn" href="mailto:eve@leyven.com.au"><i class="mdi-communication-email left comm"></i>eve@leyven.com.au</a></div></div>
						
                <nav>
				<div id="the_nav_line">
					
						<div class="inside_nav nav-wrapper">
							<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav center hide-on-med-and-down', 'theme_location' => 'primary-menu' ) ); ?>
						<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'side-nav', 'menu_id' => 'slide-out', 'theme_location' => 'primary-menu' ) ); ?>
                    </div>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
                    
                </nav>
                    </div>
				<div class="the_clear"></div>
				<div id="the_mid">