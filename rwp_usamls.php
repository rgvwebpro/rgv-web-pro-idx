<?php
/*
Plugin Name: RGV Web Pro IDX
Plugin URI: https://github.com/rgvwebpro/RGVWEBPRO-IDX
Description: <strong>RGV Web Pro IDX</strong> is a simple plugin for Real Estate Websites that offer their visitors iFrame content from <a href="http://usamls.net">USAMLS.NET</a> by <a href="http://www.seisystems.com/">Systems Engineering, Inc.</a>.  Simply input a respective shortcode in the WYSIWYG editor and update the search values via the Custom Fields area.  This plugin has been tested and works well with <a href="http://www.advancedcustomfields.com/">Advanced Custom Fields</a>.
Author: RGV Web Pro
Version: 0.1.2
Author URI: https://rgvwebpro.com/business/services/wordpress
Licence: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/*
	Copyright 2011-2012  Jorge Alberto Saldivar  (email : webmaster@rgvwebpro.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
 * WORDPRESS CUSTOM DASHBOARD MENU
 * http://codex.wordpress.org/Administration_Menus
 *
 * The following was added to enable the administrator to add custom
 * settings to the plugin via the WordPress Dashboard.  The following
 * generates a new settings page, menu, title and other respective output.
 *
 * @ since 0.1
 */

add_action('admin_menu', 'rgvwp_usamls_net_admin_menu');		// create custom plugin settings menu
function rgvwp_usamls_net_admin_menu() {
	add_menu_page( 												// create new top-level menu
		'RGV Web Pro IDX - Settings', 							// $page_title
		'IDX Settings',		 									// $menu_title
		'administrator', 										// $capability
		'rgvwebpro_idx',										// $menu_slug
		'rgvwp_usamls_net_function', 							// $function
		plugins_url('/icon.svg	', __FILE__)					// $icon_url
	);
	add_action( 'admin_init', 'register_rwp_usamls_net' ); 		//call register settings function
}

/*
 * REGISTER WORDPRESS SETTINGS
 * http://codex.wordpress.org/Function_Reference/register_setting
 *
 * Register a setting and its sanitization callback.
 * This is part of the Settings API, which lets you automatically generate wp-admin settings
 * pages by registering your settings and using a few callbacks to control the output.
 *
 * @ since 0.1
 */

function register_rwp_usamls_net() {
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_url' );					// USAMLS.NET BROKER URL
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search' );				// USAMLS.NET SEARCH URL
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search_mu' );			// USAMLS.NET MultiUnit Search
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search_land' );			// USAMLS.NET Land Search
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search_commercial' );	// USAMLS.NET Commercial Search
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search_rental' );		// USAMLS.NET Rental Search
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_search_com_lease' );	// USAMLS.NET Commercial Lease Search
	register_setting( 'rwp_usamls_sg_1','rwp_usamls_net_shell_search' );		// USAMLS.NET CUSTOM SEARCH URL
}

/*
 * WORDPRESS DASHBOARD CUSTOM SETTINGS PAGE
 * http://codex.wordpress.org/Administration_Menus
 *
 * WordPress $function administration page.
 *
 * @ since 0.1
 */

function rgvwp_usamls_net_function() {
	include plugin_dir_path(__FILE__) . 'rwp_usamls_admin.php';
}

/*
 * WORDPRESS SHORTCODE API
 * http://codex.wordpress.org/Shortcode_API
 *
 * The following are a series of shortcodes that will output the respective
 * included forms and iFrames HTML.
 *
 *
 * @ since 0.1
 */

include plugin_dir_path(__FILE__) . 'rwp_usamls_shortcodes.php';

// This hides the search form used to generate results on Search Form Results
add_action( 'wp_head','usamlssearchvalues_css' );
function usamlssearchvalues_css() { ?>
	<style type="text/css">
	#usamls-search-wrap {
		display:none;
	}
	</style>
<?php }

/*
	That's it!
*/
