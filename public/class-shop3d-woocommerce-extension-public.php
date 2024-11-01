<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.upwork.com/o/profiles/users/~01c8c1e4a6e1b182ae/
 * @since      1.0.0
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/public
 * @author     Azmat Mehmood <mehmood.azmat@gmail.com>
 */
class Shop3d_Woocommerce_Extension_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shop3d_Woocommerce_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shop3d_Woocommerce_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/shop3d-woocommerce-extension-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shop3d_Woocommerce_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shop3d_Woocommerce_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/shop3d-woocommerce-extension-public.js', array( 'jquery' ), $this->version, false );

	}

}
