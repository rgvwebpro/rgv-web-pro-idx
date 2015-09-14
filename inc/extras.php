<?php
/*
 * CUSTOM SETTINGS TABLE ROWS WITH VARIABLES
 * Generates table rows template for use in the Dashboard.
 *
 * @since 0.1
 */
function rwp_usamls_admin_tr( $usamls_property_type, $usamls_property_ID, $usamls_wp_setting, $usamls_wp_shortcode ) {
	echo '<tr><th><h4>Property Type ' . $usamls_property_ID . '<br />(' . $usamls_property_type . ')</h4></th><td>';
	echo '<input type="text" id="rwp_id' . $usamls_property_ID . '_1" name="' . $usamls_wp_setting . '" value="' . get_option( $usamls_wp_setting ) . '" class="regular-text" />';
	if(  get_option( 'rwp_usamls_net_url' ) && !get_option( $usamls_wp_setting )  ) {
		echo '<p>Copy and paste the following URL ';
		echo '<input type="text" id="rwp_id' . $usamls_property_ID . '_2" value="' . get_option( 'rwp_usamls_net_url' ) . '/default.asp?content=results&this_format=' . $usamls_property_ID . '" class="regular-text" /> or ';
		echo '<a href="#" onClick="javascript:document.getElementById(\'rwp_id' . $usamls_property_ID . '_1\').value=document.getElementById(\'rwp_id' . $usamls_property_ID . '_2\').value" >click here</a> to fill it in, then click "Save".</p>';
	}
	if( get_option( $usamls_wp_setting ) ) {
		echo '<p>' . $usamls_property_type . ' Shortcode: <code>[' . $usamls_wp_shortcode . ']</code></p>';
	}
	echo '</td></tr>' . "\n";
}

/**
 *  INTEGRATION CODE
 *
 *	Adds the Search code to the textarea search widget code.
 *	All this crap needs to get cleaned up and turned into a f*ckin' widget.
 *	Yea.
 *
 *	@since 1.0
 */
function rgvwp_usamls_net_textarea_widget_code() { ?><form action="<?php echo get_option( 'rwp_usamls_net_shell_search' ); ?>" method="post"> <input type="hidden" name="do_search_results" value="true" /> <strong>MLS Number</strong> <table><tbody><tr><td><input type="text" name="item1" placeholder="MLS Number" /></td></tr></tbody></table> <strong>Area</strong> <table><tbody><tr><td><input type="text" name="item90" placeholder="City Name" /></td></tr></tbody></table> <strong>Price From</strong> <table><tbody><tr><td><input type="text" name="item2" placeholder="100" /></td><td><input type="text" name="item2_comma" placeholder="000" /></td></tr></tbody></table> <strong>Price To</strong> <table><tbody><tr><td><input type="text" name="item2a" placeholder="250" /></td><td><input type="text" name="item2a_comma" placeholder="000" /></td></tr></tbody></table> <input type="submit" value="Search MLS" /></form><?php }
