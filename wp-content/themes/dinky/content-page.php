<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template used for displaying page content in page.php
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
					<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
						<header class="entry-header">
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header>
						<?php dinky_post_thumbnail(); ?>
						<div class="entry-content">
							<?php the_content(); ?>
							<?php dinky_post_nav(); ?>
						</div>
						<?php if ( is_single() ) : ?>
						<footer class="entry-meta">
							<?php dinky_entry_meta(); ?>
							<?php edit_post_link( __( '(Edit)', 'dinky' ), '&nbsp;<span class="edit-link">', '</span>' ); ?>
						</footer>
						<?php //get_template_part( 'author-bio' ); ?>
						<?php //dinky_posts_nav(); ?>
						<?php endif; ?>
					</article>
