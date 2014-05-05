<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template used for displaying author bios.
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
				<?php if ( get_the_author_meta( 'description' ) & is_multi_author() ) : ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'dinky_author_bio_avatar_size', 60 ) ); ?>
					</div>
					<div class="author-detail">
						<h4 class="author-title"><?php printf( __( 'About %s', 'dinky' ), get_the_author() ); ?></h4>
						<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
					</div>
				</div>
				<?php endif; ?>