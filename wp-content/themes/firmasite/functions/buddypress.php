<?php
// http://codex.buddypress.org/extending-buddypress/bp-custom-php/
// Removing the links automatically created in a member's profile
add_action( 'bp_init', 'firmasite_remove_xprofile_links' );
function firmasite_remove_xprofile_links() {
    remove_filter( 'bp_get_the_profile_field_value', 'xprofile_filter_link_profile_data', 9, 2 );
}


add_action( 'after_setup_theme', "firmasite_social_buddypress_setup");
function firmasite_social_buddypress_setup() {
	// bp 1.7+
	add_theme_support( 'buddypress' );

	// Load the AJAX functions for the theme
	require( get_template_directory() . '/assets/_inc/ajax.php' );

	if ( ! is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		// Register buttons for the relevant component templates
		// Friends button
		if ( bp_is_active( 'friends' ) )
			add_action( 'bp_member_header_actions',    'bp_add_friend_button',           5 );

		// Activity button
		if ( bp_is_active( 'activity' ) )
			add_action( 'bp_member_header_actions',    'bp_send_public_message_button',  20 );

		// Messages button
		if ( bp_is_active( 'messages' ) )
			add_action( 'bp_member_header_actions',    'bp_send_private_message_button', 20 );

		// Group buttons
		if ( bp_is_active( 'groups' ) ) {
			add_action( 'bp_group_header_actions',     'bp_group_join_button',           5 );
			add_action( 'bp_group_header_actions',     'bp_group_new_topic_button',      20 );
			add_action( 'bp_directory_groups_actions', 'bp_group_join_button' );
		}

		// Blog button
		if ( bp_is_active( 'blogs' ) )
			add_action( 'bp_directory_blogs_actions',  'bp_blogs_visit_blog_button' );
	}

	/** Notices ***********************************************************/
	if ( bp_is_active( 'messages' ) ) {
		add_action( 'wp_footer', "firmasite_sitewide_notices", 9999 );
	}
	
}

function firmasite_sitewide_notices() {
		// Do not show notices if user is not logged in
		if ( ! is_user_logged_in() )
			return;

		// add a class to determine if the admin bar is on or not
		$class = did_action( 'admin_bar_menu' ) ? 'admin-bar-on' : 'admin-bar-off';

		echo '<div id="sitewide-notice" class="' . $class . '">';
		firmasite_bp_message_get_notices();
		echo '</div>';
}

function firmasite_bp_message_get_notices() {
	global $userdata;

	$notice = BP_Messages_Notice::get_active();

	if ( empty( $notice ) )
		return false;

	$closed_notices = bp_get_user_meta( $userdata->ID, 'closed_notices', true );

	if ( !$closed_notices )
		$closed_notices = array();

	if ( is_array($closed_notices) ) {
		if ( !in_array( $notice->id, $closed_notices ) && $notice->id ) {
			?>
		<div id="message-<?php echo $notice->id ?>" class="info notice modal fade" rel="n-<?php echo $notice->id ?>" tabindex="-1" role="dialog" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title"><?php echo stripslashes( wp_filter_kses( $notice->subject ) ) ?></h3>
              </div>
              <div class="modal-body">
                <p><?php echo stripslashes( wp_filter_kses( $notice->message) ) ?></p>
              </div>              
              <div class="modal-footer">
                <a href="#" id="close-notice" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?php _e( 'Close', "firmasite" ) ?></a>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
		</div>
            <script> 
			jQuery(document).ready(function() {
				jQuery('#message-<?php echo $notice->id ?>').modal('show'); 
				jQuery("#message-<?php echo $notice->id ?> #close-notice").click(function(){ jQuery('#message-<?php echo $notice->id ?>').modal('hide'); });
            });
            </script>
			<?php
		}
	}
}


add_action( 'wp_enqueue_scripts', "firmasite_social_buddypress_scripts");
function firmasite_social_buddypress_scripts() {

	// Enqueue the global JS - Ajax will not work without it
	wp_enqueue_script( 'dtheme-ajax-js', get_template_directory_uri() . '/assets/_inc/global.js', array( 'jquery' ), bp_get_version() );

	// Add words that we need to use in JS to the end of the page so they can be translated and still used.
	$params = array(
		'my_favs'           => __( 'My Favorites', "firmasite" ),
		'accepted'          => __( 'Accepted', "firmasite" ),
		'rejected'          => __( 'Rejected', "firmasite" ),
		'show_all_comments' => __( 'Show all comments for this thread', "firmasite" ),
		'show_all'          => __( 'Show all', "firmasite" ),
		'comments'          => __( 'comments', "firmasite" ),
		'close'             => __( 'Close', "firmasite" ),
		'view'              => __( 'View', "firmasite" ),
		'mark_as_fav'	    => __( 'Favorite', "firmasite" ),
		'remove_fav'	    => __( 'Remove Favorite', "firmasite" )
	);
	wp_localize_script( 'dtheme-ajax-js', 'BP_DTheme', $params );
}


add_filter('bp_members_signup_error_message', "firmasite_bp_members_signup_error_message");
function firmasite_bp_members_signup_error_message($string){
	return '<div class="alert alert-error">' . $string . '</div>';
}