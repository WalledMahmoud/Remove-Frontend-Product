<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://upwork.com/freelancers/walledmahmoudsoliman
 * @since      1.0.0
 *
 * @package    Remove_Frontend_Product
 * @subpackage Remove_Frontend_Product/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Remove_Frontend_Product
 * @subpackage Remove_Frontend_Product/includes
 * @author     Walled Mahmoud Soliman <contact@walledmahmoud.me>
 */
class Remove_Frontend_Product_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'remove-frontend-product',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
