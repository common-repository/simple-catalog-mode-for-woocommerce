<?php
/**
* Plugin Name: WooCommerce Catalog Mode
* Description: Disables purchases of all products except external. Activating the plugin does not turn catalog mode on. To activate Catalog Mode, go to <code>WooCommerce</code> &#x2794; <code>Settings</code> &#x2794; <code>Products</code> &#x2794; <code>Catalog Mode</code>. This feature is only available to dministrators.
* Version: 1.0.0
* Author:      snippetfactory.dev
* Author URI:  https://snippetfactory.dev
* License:     GNU General Public License v2
* License URI: https://www.gnu.org/licenses/license-list.html#GPLCompatibleLicenses
* @author      snippetfactory.dev
* @copyright   2020 snippetfactory.dev
*/
if (!defined( 'ABSPATH' )) exit;
if (in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {
add_filter( 'woocommerce_get_sections_products', 'sf_add_catalog_mode_section_to_products' );
function sf_add_catalog_mode_section_to_products( $sections ) {
$sections['catalog-mode'] = __( 'Catalog Mode', 'woocommerce' );
return $sections;
}}
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {
add_filter( 'woocommerce_get_settings_products', 'sf_catalog_mode_all_settings', 10, 2 );
function sf_catalog_mode_all_settings( $settings, $current_section ) {
if ( $current_section == 'catalog-mode' && !current_user_can('administrator')) { ?>
<p style="font-weight:bold;color:red;font-size:1rem;">This feature is only available to administrators. Only administrators can turn Catalog Mode on and off.</p>
<?php } else { if ( $current_section == 'catalog-mode' && current_user_can('administrator')) {
$settings_catalog_options = array();
$settings_catalog_options[] = array(
'name' => __( 'WooCommerce Catalog Mode', 'woocommerce' ),
'type' => 'title',
'desc' => __( '<details><summary>To learn and know more about what Catalog Mode means, click here.</summary><div style="padding:20px;border:2px solid gray;width:50%;"><b>#1:</b> Catalog mode means that no product can be purchased by a visitor or customer and thereby, no orders can be placed.<br><br><b>#2:</b> All your products can be viewed (shop, archive and product page), just not purchased.<br><br><b>#3:</b> The add to cart button text will be changed into <code>Read more</code> on the shop and archive pages for simple and variable products.<br><br><b>#4:</b> The button text for grouped products will be <code>View products</code> and for all external products, the button text stays the same.<br><br><b>This is the native behavior of WooCommerce when using the purchase filters.</b><br><br>This plugin uses two filters:<br><code>woocommerce_is_purchasable</code><br>and<br><code>woocommerce_variation_is_purchasable</code><br><br>This plugins does not do anything else, which is the point of being lightweight.<br><br>Support is given by email at <a href="mailto:hello@snippetfactory.dev" target="_blank" style="text-decoration:underline">hello@snippetfactory.dev</a></div></details>', 'woocommerce' ),
'id'   => 'wc_catalog_mode_title'
);
$settings_catalog_options[] = array(
'name' => __( 'Activate Catalog Mode:', 'woocommerce' ),
'type' => 'checkbox',
'desc' => __( '<br>Checked = Catalog Mode ON<br>Not Checked = Catalog Mode OFF'),
'id'   => 'wc_catalog_mode',
);
$settings_catalog_options[] = array(
'type' => 'sectionend',
'id'   => 'wc_catalog_mode_end'
);
return $settings_catalog_options;
}}
return $settings;
}}
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {
add_filter( 'woocommerce_is_purchasable', 'sf_catalog_mode', 10, 2 );
add_filter( 'woocommerce_variation_is_purchasable', 'sf_catalog_mode', 10, 2 );
function sf_catalog_mode( $purchasable, $product ) {
if( 'yes' === get_option('wc_catalog_mode') ) {
$purchasable = false;
}
return $purchasable;
}}
