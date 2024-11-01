<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.upwork.com/o/profiles/users/~01c8c1e4a6e1b182ae/
 * @since      1.0.0
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/includes
 * @author     Azmat Mehmood <mehmood.azmat@gmail.com>
 */
class Shop3d_Woocommerce_Extension_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		/**
		 * Check if WooCommerce is active
		 **/
		if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		    echo "Please activate woocommerce first";
		}

		

		}

}
