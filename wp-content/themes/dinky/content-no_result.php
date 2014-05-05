<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template used for displaying 'no result' contents.
 *
 * @package Dinky
 * @version 1.4
 * @since Dinky 1.2
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
				<div id="post-0" class="post no-results">
					<div class="entry-header">
						<h2 class="entry-title"><?php _e( 'Nothing Found', 'dinky' ); ?></h2>
					</div>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'dinky' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>