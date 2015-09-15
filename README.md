# RGVWEBPRO IDX

RGVWEBPRO IDX enables Real Estate Websites (offering content from http://usamls.net) to display custom MLS search results using shortcodes and custom fields via iFrames.

## Description

<strong>RGVWEBPRO IDX</strong> is a simple plugin for Real Estate Websites that offer their visitors iFrame content from <a href="http://usamls.net">USAMLS.NET</a> by <a href="http://www.seisystems.com/">Systems Engineering, Inc.</a>.  Simply input a respective shortcode in the WYSIWYG editor and update the search values via the Custom Fields area.  The "names" and "values" must correspond with the input names and values on the USAMLS.NET search page.  Example:  To display an MLS listing, add the shortcode <code>[usamls]</code> in the editor, the add "item1" in the name field and the MLS number in the value field.

## How To

Must of the installation and setup is manual. Future updates may include automatted features.

### Installation

1. Upload plugin file directory to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Place respective shortcodes in posts and update Custom Fields with respective values.

### Setup MLS Page

Follow these instructions to get started. Setup is a bit janky since the plugin isn't utilizing Ajax, etc.

1. Navigate to <strong>WordPress Dashboard</strong>.
2. Go to page <strong>IDX Settings</strong>.
3. Update the <strong>USAMLS Username URL</strong> field with the <code>http://www.usamls.net/username</code> value, then, click on <strong>Save RGVWEBPRO IDS Settings</strong>.
4. Update <strong>Property Type</strong> fields, then, click on <strong>Save RGVWEBPRO IDS Settings</strong> to generate shortcodes.
5. Click on <strong>New/Page</strong> and title the new page "MLS."
6. In the text editor, add the shortcode <code>[usamls]</code> and click <strong>Publish</strong>.
7. Click <strong>View Page</strong> and the page will display an iFrame with MLS data.

### Setup MLS Search Page

This is assuming your MLS page is usign the following permalink structure, <code>http://www.example.com/mls</code> and your search page will be <code>http://www.example.com/mls/search</code>.

1. Navigate to <strong>WordPress Dashboard</strong>.
2. Go to page <strong>IDX Settings</strong>.
3. Update the <strong>WordPress Search Page URL</strong> field with the <code>http://www.example.com/mls/search</code> value, then, click on <strong>Save RGVWEBPRO IDX Settings</strong>.
4. Click on <strong>New/Page</strong> and title the new page "Search."
5. In the text editor, add the shortcode <code>[usamls_search]</code>, set the MLS page as Parent, then click <strong>Publish</strong>.
6. Click <strong>View Page</strong> and the page will display an iFrame with MLS data.
7. Utilize the integration code anywhere on the site you'd like an MLS search form.

<strong>Note</strong>
* Search features are limited to Residential Buyer Searches.
* Search form is not styled and missing "class" and "id" tags.
* Search input fields are limited to SEITOOLS settings.
 
### Generate Property Listings/Types/Search Links

Simply follow the instructions for <strong>Setup MLS Page</strong> and continue with the following instructions.  Assuming you want to display listings from the "Mission" area:

1. In the <strong>Custom Fields</strong> area, <strong>Add New Custom Field</strong>
2. Click on <strong>Enter new</strong> under the Name field and update the field with <code>item90</code> for <strong>Area</strong>.
3. Update the <strong>Value</strong> field with the Area name, in this example "Mission."
4. Click on <strong>Publish/Update</strong> and <strong>View Page</strong>. All listings from "Mission" will be diplayed.

#### Disclaimer

This page needs expansion. 
