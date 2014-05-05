<?php
if ( !defined('ABSPATH')) exit;
/**
 * Template Name: No Sidebar
 *
 * The template for displaying pages with 'No Sidebar' template.
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
			<div id="main" class="center">
				<?php get_sidebar('up_main'); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; ?>
					<?php dinky_archive_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
			</div>
		</div>
<?php get_footer(); ?>