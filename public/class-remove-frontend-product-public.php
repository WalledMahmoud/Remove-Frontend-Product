<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://upwork.com/freelancers/walledmahmoudsoliman
 * @since      1.0.0
 *
 * @package    Remove_Frontend_Product
 * @subpackage Remove_Frontend_Product/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Remove_Frontend_Product
 * @subpackage Remove_Frontend_Product/public
 * @author     Walled Mahmoud Soliman <contact@walledmahmoud.me>
 */
class Remove_Frontend_Product_Public {

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
		 * defined in Remove_Frontend_Product_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Remove_Frontend_Product_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if ( is_product() ) {
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/remove-frontend-product-public.css', array(), $this->version, 'all', 999 );
		}
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
		 * defined in Remove_Frontend_Product_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Remove_Frontend_Product_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if ( is_product() ) {

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/remove-frontend-product-public.js', array( 'jquery' ), $this->version, false );
			wp_localize_script( $this->plugin_name, 'remove_product_params', array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce( 'remove_product_nonce' ),
			) );
		}

	}

}
