<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--meta name="keywords" content="荆门电脑维修,电脑维修,荆门电脑上门维修,荆门修电脑,笔记本维修,荆门打印机维修,荆门网络维护,家庭网络,路由器,网络布线" />
<!--meta name="description" content="本工作室(13597971730)，专注于IT设备销售与维护服务，致力于为广大客户提供电脑维修、打印机耗材销售、综合布线、路由器调试、网络维护、计算机网络和监控网络组建、手机故障检测及维修等服务。同时也是IT及周边用品的零售和分销商。" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	<div id="header-top">
		<div id="logo-wrapper">
      			<div class="logo-img">
        			<a href="/" title="" rel="home" id="logo">
          			<img src="https://i.loli.net/2017/09/07/59b0b485232ab.png" alt="荆门电脑维修">
        			</a>
      				</div>
			<div id="logo-txt-wrapper"><div id="txttopdiv"><a id="logotxttop">无限网络工作室</a></div>
					<div id="logotxten-wrapper"><a  id="logotxten">Infinite Network</a></div></div>
    		</div>
	
        	<div class="nav-pad-e">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>
	</div>
	<div id="header-show-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://i.loli.net/2017/09/07/59b0b4a411a44.jpg" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">