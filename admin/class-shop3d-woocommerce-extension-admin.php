<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.upwork.com/o/profiles/users/~01c8c1e4a6e1b182ae/
 * @since      1.0.0
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Shop3d_Woocommerce_Extension
 * @subpackage Shop3d_Woocommerce_Extension/admin
 * @author     Azmat Mehmood <mehmood.azmat@gmail.com>
 */
class Shop3d_Woocommerce_Extension_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/shop3d-woocommerce-extension-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/shop3d-woocommerce-extension-admin.js', array( 'jquery' ), $this->version, false );
	}

	public function display_admin_menu() {
		// add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '' )
		add_submenu_page( 'woocommerce', 'Shop3D', 'Shop3D', 'manage_options', 'shop-3d', array($this, 'shop3d_admin_menu_page_callback' ) );
	}

	public function shop3d_admin_menu_page_callback() {
		include 'shop3d_iframe.php';
	}

}
