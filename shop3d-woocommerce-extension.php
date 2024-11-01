<?php

/**
 * Plugin Name:       Shop3D - 3D Print on Demand
 * Plugin URI:        https://www.shop3d.io/
 * Description:       Instant on-demand manufacturing plugin - from 3D file into physical product
 * Version:           1.0.0
 * Requires at least: 5.1
 * Requires PHP:      7.2
 * Author:            3DC LTD
 * Author URI:        https://profiles.wordpress.org/it3dc/
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       shop3d-woocommerce-extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SHOP3D_WOOCOMMERCE_EXTENSION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-shop3d-woocommerce-extension-activator.php
 */
function activate_shop3d_woocommerce_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shop3d-woocommerce-extension-activator.php';
	Shop3d_Woocommerce_Extension_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-shop3d-woocommerce-extension-deactivator.php
 */
function deactivate_shop3d_woocommerce_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shop3d-woocommerce-extension-deactivator.php';
	Shop3d_Woocommerce_Extension_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_shop3d_woocommerce_extension' );
register_deactivation_hook( __FILE__, 'deactivate_shop3d_woocommerce_extension' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-shop3d-woocommerce-extension.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_shop3d_woocommerce_extension() {

	$plugin = new Shop3d_Woocommerce_Extension();
	$plugin->run();

}
run_shop3d_woocommerce_extension();
