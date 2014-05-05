<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying the Header.
 *
 * @package Dinky
 * @version 1.4
 * @since Dinky 1.0
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="robots" content="INDEX,FOLLOW,noodp,noydir">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="font/vijaya.ttf" rel='stylesheet' type='text/css'>
		<link rel="canonical" href="<?php echo home_url('/'); ?>" />
		<?php if (dinky_get_theme_option('tag_author') != ''): ?><link rel="author" href="<?php echo dinky_get_theme_option('tag_author'); ?>" /><?php endif; ?>
		<?php if (dinky_get_theme_option('tag_shortlink') != ''): ?><link rel='shortlink' href='<?php echo dinky_get_theme_option('tag_shortlink'); ?>' /><?php endif; ?>
		<?php if (dinky_get_theme_option('tag_favicon') != ''): ?><link rel="shortcut icon" type="image/x-icon" href='<?php echo dinky_get_theme_option('tag_favicon'); ?>' /><?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body id="wrapper" lang="<?php bloginfo('language'); ?>" <?php body_class(); ?>>
		<header id="masthead"  role="banner">
			<nav id="mobile-navigation" class="container" role="navigation">
				<div id="mobile-title">
					<h2 class="mobile-title"><?php bloginfo( 'name' ); ?></h2>
					<a class="mobile-select-menu"></a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
			
				<div id="title">
					<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
					<h2 class="subtitle"><?php bloginfo( 'description' ); ?></h2>
				</div>
			
			<?php if ((is_home() & dinky_get_theme_option('intro_display_home')) or (!is_home() & dinky_get_theme_option('intro_display_other'))): ?>
			<!--<div id="intro">
				<p class="container">
					<?php echo dinky_get_theme_option('intro_content'); ?>
				</p>
			</div>-->
			<?php endif; ?>
			
			<nav id="main-navigation" class="container" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</header>
		<?php include_once("analyticstracking.php") ?>
