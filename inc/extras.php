<?php
/**
 *  INTEGRATION CODE
 *  
 *	Adds the Search code to the textarea search widget code.
 *	All this crap needs to get cleaned up and turned into a f*ckin' widget.
 *	Yea.
 *
 *	@since 1.0
 */
function rgvwp_usamls_net_textarea_widget_code() { ?>
<form action="<?php echo get_option( 'rwp_usamls_net_shell_search' ); ?>" method="post"> <input type="hidden" name="do_search_results" value="true" /> <strong>MLS Number</strong> <table><tbody><tr><td><input type="text" name="item1" placeholder="MLS Number" /></td></tr></tbody></table> <strong>Area</strong> <table><tbody><tr><td><input type="text" name="item90" placeholder="City Name" /></td></tr></tbody></table> <strong>Price From</strong> <table><tbody><tr><td><input type="text" name="item2" placeholder="100" /></td><td><input type="text" name="item2_comma" placeholder="000" /></td></tr></tbody></table> <strong>Price To</strong> <table><tbody><tr><td><input type="text" name="item2a" placeholder="250" /></td><td><input type="text" name="item2a_comma" placeholder="000" /></td></tr></tbody></table> <input type="submit" value="Search MLS" /> </form>
<?php }
