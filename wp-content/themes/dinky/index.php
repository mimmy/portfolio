<?php
if ( !defined('ABSPATH')) exit;
/**
 * The main template file.
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
		<?php if (dinky_get_theme_option('content_display_home')): ?>
		<div id="content" class="container" role="main">
			<div id="main"<?php if (!dinky_get_theme_option('sidebar_display')): ?> class="center <?php if (dinky_get_theme_option('fullmain_nosidebar')): ?> full<?php endif; ?>"<?php endif; ?>>
				<?php get_sidebar('up_main'); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php dinky_archive_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<?php endif; ?>
<?php get_footer(); ?>