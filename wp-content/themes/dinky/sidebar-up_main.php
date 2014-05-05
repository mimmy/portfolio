<?php
if ( !defined('ABSPATH')) exit;
/**
 * The sidebar containing the 'up-main' widget area.
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
				<?php if ( is_active_sidebar( 'up_main' ) ) : ?>
				<div id="sidebar-up_main" class="sidebar">
						<?php dynamic_sidebar( 'up_main' ); ?>
				</div>
				<?php endif; ?>