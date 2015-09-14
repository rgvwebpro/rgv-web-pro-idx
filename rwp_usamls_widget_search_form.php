<?php
/*
 * CUSTOM RESULTS SEARCH LANDING
 * This is the engine room for the entire front pages for the Website.
 * Search results are a result of $_POST and get_option() WordPress hook functions.
 *
 * @ since 0.1
 */

if (!function_exists('_rwp_usamls_widget_search_form')) {

	function _rwp_usamls_widget_search_form( $_rwp_usamls_widget_property_URL ) {

	/*
	 * RGVWEBPRO IDX IFRAME SEARCH FORM FUNCTION
	 * This function generates the search for the iFrame URL.
	 * _rwp_usamls_widget_search_form( 'residential',1,'rwp_usamls_net_search','usamls' );
	 *
	 * @ since 0.1
	 */

	$_rwp_search_string = '<!-- RGVWEBPRO IDX Plugin <contact@rgvwebpro.com> -->
	<form action="' . get_option($_rwp_usamls_widget_property_URL). '" target="searchframe_' . get_the_ID() . '" name="usamlsnetform' . get_the_ID() . '" id="" method="POST">
	<input type="hidden" name="do_search_results" value="true" />';
	$_rwp_usamls_search_names_values = $_POST;
	if ( $_POST == true ) {
				$_rwp_search_string .= '<div id="usamls-search-wrap">';
				$_rwp_search_string .= '<h2 class="title">Your search:</h2><div id="usamls-search-values">';
				foreach ( $_rwp_usamls_search_names_values as $name => $value ) {
					if ( preg_match( '/item/', $name ) && $name == 'item2' && $value == true ) {
						$_rwp_search_string .= '<strong>Priced from:</strong> <input type="text" value="' . $value . '" name="' . $name . '"  /> , ';
					}
					elseif ( preg_match( '/item/', $name ) && $name == 'item2a' && $value == true ) {
						$_rwp_search_string .= '<strong>Priced to:</strong> <input type="text" value="' . $value . '" name="' . $name . '"  /> , ';
					}
					elseif ( preg_match( '/item/', $name ) && $name == 'item90' && $value == true ) {
						$_rwp_search_string .= '<strong>Area:</strong> <input type="text" value="' . $value . '" name="' . $name . '" /> ';
					}
					elseif ( preg_match( '/item/', $name ) && $value == true ) {
						$_rwp_search_string .= '<input type="text" value="' . $value . '" id="search-result-' . $value . '" name="' . $name . '"  /> ';
					}
				}
				$_rwp_search_string .= '</div><input type="submit" value="Search" /></div>';
			}
	$_rwp_search_string .= '</form>
	<iframe name="searchframe_' . get_the_ID() . '" class="" width="100%" height="1776px" frameborder="0" scrolling="auto" src="' . get_option($_rwp_usamls_widget_property_URL) . '"></iframe>
	<script language="javascript" type="text/javascript">document.usamlsnetform' . get_the_ID() . '.submit();</script>';
	return $_rwp_search_string;
	}
}
?>
