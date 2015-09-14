<?php
/*
 * 	INCLUDE EXTRA CODE AND STUFF
 */
include( plugin_dir_path( __FILE__ ) . '/inc/extras.php');

/*
 * WORDPRESS DASHBOARD CUSTOM SETTINGS PAGE
 * http://codex.wordpress.org/Administration_Menus
 *
 * WordPress $function administration page.
 *
 * @ since 0.1
 */
?>
<div class="wrap">
	<h2><?php _e( 'RGVWEBPRO IDX - Settings' ); ?></h2>
	<?php
	// If the settings have been set in the /wp-admin/ area.
	if ( isset($_GET['settings-updated']) == true ) {
		echo '<div id="setting-error-settings_updated" class="updated settings-error"><p><strong>Settings saved.</strong></p></div>';
	}
	?>
	<form method="post" action="options.php">
	<?php
	/*
	 * NEED DOCUMENTATION
 	 *
 	 * @since 1.0
	 */
	settings_fields( 'rwp_usamls_sg_1' );
	do_settings_sections( 'rwp_usamls_sg_1' );
	?>
	<h3><?php _e( 'USAMLS.NET Settings' ); ?></h3>
	<table class="form-table">
		<tbody>
			<tr>
				<th><h4><?php _e( 'USAMLS Username URL' ); ?></h4></th>
				<td>
					<input type="text" name="rwp_usamls_net_url" value="<?php echo get_option( 'rwp_usamls_net_url' ); ?>" class="regular-text" />
					<?php
						if( get_option( 'rwp_usamls_net_url' ) ) {
							echo '<code>' . get_option( 'rwp_usamls_net_url' ) . '</code>';
						} else {
							echo '<strong>Example:</strong> <code>http://usamls.net/<strong>yourname</strong></code>';
							echo '<p>No backslashes <code>/</code> at the end of the URL.</p>';
						}
					?>
				</td>
			</tr>
			<?php
			/*
			 * CUSTOM SETTINGS TABLE ROWS WITH VARIABLES
			 * Generates template for use in the Dashboard. The main function is found in
			 * inc/extras.php.
			 *
			 * @function rwp_usamls_admin_tr();
			 * @since 0.1
			 */
			rwp_usamls_admin_tr( 'Residential', 1, 'rwp_usamls_net_search', 'usamls' );
			rwp_usamls_admin_tr( 'Multi-Unit', 2, 'rwp_usamls_net_search_mu', 'usamls_multi' );
			rwp_usamls_admin_tr( 'Land', 3, 'rwp_usamls_net_search_land', 'usamls_land' );
			rwp_usamls_admin_tr( 'Commercial', 4, 'rwp_usamls_net_search_commercial', 'usamls_com' );
			rwp_usamls_admin_tr( 'Rental', 5, 'rwp_usamls_net_search_rental', 'usamls_rental' );
			rwp_usamls_admin_tr( 'Commercial Lease', 6, 'rwp_usamls_net_search_com_lease', 'usamls_com_lease' );
			?>
		</tbody>
	</table>

	<h3>WordPress Settings</h3>
	<table class="form-table">
		<tbody>
			<tr>
				<th>
					<?php _e( '<h4>WordPress Search Page URL</h4>' ); ?>
					<?php _e( '<p>This is your Residential Search page for Widget use.</p>' ); ?>
				</th>
				<td>
					<input type="text" name="rwp_usamls_net_shell_search" value="<?php echo get_option( 'rwp_usamls_net_shell_search' ); ?>" class="regular-text" />
					<?php if ( get_option( 'rwp_usamls_net_shell_search' ) ) { ?>
						<?php _e( '<p>Shortcode: <code>[usamls_search]</code></p> ' ); ?>
						<div>
							<?php _e( '<h4>Integration Code</h4>' ); ?>
							<?php _e( '<p>The following form can be added to various areas of your Website for added functionality.</p>' ); ?>
							<textarea rows="10" cols="50" class="large-text code"><?php echo rgvwp_usamls_net_textarea_widget_code(); ?></textarea>
						</div>
					<?php } ?>
				</td>
			</tr>
		</tbody>
	</table>
	<div>
		<input class="button button-primary" type="submit" value="Save RGVWEBPRO IDX Settings" />
	</div>
	</form>
</div>
