<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.upwork.com/o/profiles/users/~01c8c1e4a6e1b182ae/
 * @since      1.0.0
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/includes
 * @author     Azmat Mehmood <mehmood.azmat@gmail.com>
 */
class Shop3d_Woocommerce_Extension_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'shop3d-woocommerce-extension',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
