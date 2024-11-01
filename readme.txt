=== Plugin Name ===
Contributors: snippetfactory
Donate link: https://www.buymeacoffee.com/snippetfactory
Tags: catalog, catalogue, catalogue mode, catalog mode, woocommerce catalog, woocommerce catalogue, woocommerce catalogue mode, woocommerce catalog mode
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
Stable tag: 1.0.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This plugin allows you to turn your WooCommerce store into a catalog by checking a box.

== Description ==

Go to WooCommerce, Settings, Products and Catalog Mode. To activate catalog mode, mark the checkbox and click on Save changes. Please note that this feature is only available to administrators.

#1: Catalog mode means that no product can be purchased by a visitor or customer and thereby, no orders can be placed.

#2: All your products can be viewed (shop, archive and product page), just not purchased.

#3: The add to cart button text will be changed into Read more on the shop and archive pages for simple and variable products.

#4: The button text for grouped products will be View products and for all external products, the button text stays the same.

This is the native behavior of WooCommerce when using the purchase filters.

This plugin uses two filters:
woocommerce_is_purchasable
and
woocommerce_variation_is_purchasable

This plugins does one and one thing ONLY. It allows you to toggle catalog mode ON and OFF.

== Installation ==

1. Upload the entire woocommerce-catalog-mode folder to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to WooCommerce, Settings, Products, Catalog Mode to activate Catalog Mode.
4. To de-activate Catalog Mode, uncheck the box and click on Save changes.

= Minimum Requirements =

* PHP 7.2 or greater is recommended
* MySQL 5.6 or greater is recommended

== Screenshots ==

1. How to get to the catalog page
2. How to open and read the information on the catalog settings page

== Frequently Asked Questions ==

= How do I activate catalog mode? =

Go to WooCommerce, Settings, Products, Catalog Mode. Mark / Check the checkbox and click on Save changes. You have now activated Catalog Mode.

= How do I turn catalog mode off? =

Go to WooCommerce, Settings, Products, Catalog Mode. Untick / Uncheck the checkbox and click on Save changes. You have now turned Catalog Mode off.

= Who has acccess to turn Catalog Mode on and off? =

Only the administrator can do that, no other role.

== Changelog ==

= 1.0.0 =
* The option via WooCommerce, Settings, Products, Catalog Mode to turn your WooCommerce store into a catalog.
