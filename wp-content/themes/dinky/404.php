<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying 404 pages (Not Found).
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
<?php get_header(); ?>
		<div id="content" class="container" role="main">
			<div id="main"<?php if (!dinky_get_theme_option('sidebar_display')): ?> class="center <?php if (dinky_get_theme_option('fullmain_nosidebar')): ?> full<?php endif; ?>"<?php endif; ?>>
				<?php get_sidebar('up_main'); ?>
				<?php get_template_part( 'content', '404' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>