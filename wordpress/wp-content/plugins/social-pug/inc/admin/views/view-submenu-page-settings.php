<?php dpsp_admin_header(); ?>

<div class="dpsp-page-wrapper dpsp-page-settings wrap">

	<h1><?php echo __( 'Settings', 'social-pug' ); ?></h1>

	<form method="post" action="options.php">
		
		<?php
		 	$dpsp_settings = get_option( 'dpsp_settings', 'not_set' );
			settings_fields( 'dpsp_settings' );
		?>

		<!-- General Settings Tab Content -->
		<div id="dpsp-tab-general-settings">

			<!-- Social Networks -->
			<div class="dpsp-section">
				<h3 class="dpsp-section-title"><?php _e( 'Social Networks', 'social-pug' ); ?></h3>

				<?php dpsp_settings_field( 'text', 'dpsp_settings[facebook_app_id]', ( isset($dpsp_settings['facebook_app_id']) ? $dpsp_settings['facebook_app_id'] : '' ), __( 'Facebook App ID', 'social-pug' ), '' ); ?>
				<?php dpsp_settings_field( 'text', 'dpsp_settings[facebook_app_secret]', ( isset($dpsp_settings['facebook_app_secret']) ? $dpsp_settings['facebook_app_secret'] : '' ), __( 'Facebook App Secret', 'social-pug' ), '' ); ?>
				<?php dpsp_settings_field( 'text', 'dpsp_settings[twitter_username]', ( isset($dpsp_settings['twitter_username']) ? $dpsp_settings['twitter_username'] : '' ), __( 'Twitter Username', 'social-pug' ), '' ); ?>
				<?php dpsp_settings_field( 'checkbox', 'dpsp_settings[tweets_have_username]', ( isset( $dpsp_settings['tweets_have_username']) ? $dpsp_settings['tweets_have_username'] : '' ), __( 'Add Twitter Username to all tweets', 'social-pug' ), array('yes') ); ?>

			</div>

			<!-- Misc -->
			<div class="dpsp-section">
				<h3 class="dpsp-section-title"><?php _e( 'Misc', 'social-pug' ); ?></h3>

				<?php dpsp_settings_field( 'checkbox', 'dpsp_settings[disable_meta_tags]', ( isset($dpsp_settings['disable_meta_tags']) ? $dpsp_settings['disable_meta_tags'] : '' ), __( 'Disable Open Graph Meta Tags', 'social-pug' ), array('yes') ); ?>
				<?php dpsp_settings_field( 'checkbox', 'dpsp_settings[twitter_share_counts]', ( isset($dpsp_settings['twitter_share_counts']) ? $dpsp_settings['twitter_share_counts'] : '' ), __( 'Enable Twitter Tweet Counts', 'social-pug' ), array('yes'), sprintf( __( 'You will need to register your website on %1$sTwitCount%2$s in order for Social Pug to be able to return the share counts.', 'social-pug' ), '<a href="http://twitcount.com/" target="_blank">', '</a>' ) ); ?>
				
			</div>

		</div><!-- End of General Settings Tab Content -->

		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="dpsp_settings[always_update]" value="<?php echo ( isset( $dpsp_settings['always_update'] ) && $dpsp_settings['always_update'] == 1 ? 0 : 1 ); ?>" />
		<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
	</form>
</div>

<?php do_action( 'dpsp_submenu_page_bottom' ); ?>