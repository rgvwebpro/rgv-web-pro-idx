<?php
/*
 * RGVWEBPRO IDX SEARCH FORM
 * Used by Website UI.
 *
 * @ since 0.1
 */

include plugin_dir_path(__FILE__) . 'rwp_usamls_search_form.php';

/*
 * [usamls] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls', 'rwp_usamls_net_shortcode' );
function rwp_usamls_net_shortcode( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search' );
}

/*
 * [usamls_multi] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_multi', 'rwp_usamls_net_multiunit' );
function rwp_usamls_net_multiunit( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search_mu' );
}

/*
 * [usamls_land] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_land', 'rwp_usamls_net_land' );
function rwp_usamls_net_land( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search_land' );
}

/*
 * [usamls_com] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_com', 'rwp_usamls_net_commmercial' );
function rwp_usamls_net_commmercial( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search_commercial' );
}

/*
 * [usamls_rental] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_rental', 'rwp_usamls_net_rental' );
function rwp_usamls_net_rental( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search_rental' );
}

/*
 * [usamls_com_lease] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_com_lease', 'rwp_usamls_net_com_lease' );
function rwp_usamls_net_com_lease( $atts ) {
	return _rwp_usamls_search_form( 'rwp_usamls_net_search_com_lease' );
}

/*
 * [usamls_search] SHORTCODE
 *
 * @ since 0.1
 */

add_shortcode( 'usamls_search', 'rwp_usamls_net_search_widget' );
function rwp_usamls_net_search_widget( $atts ) {
	include plugin_dir_path(__FILE__) . 'rwp_usamls_widget_search_form.php';
	return _rwp_usamls_widget_search_form( 'rwp_usamls_net_search' );
}
