<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           MBJ_Paypal_Digital_Goods_Payment_Gateway_For_WooCommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Paypal Digital Goods Payment Gateway For Woocommerce
 * Plugin URI:        http://example.com/paypal-digital-goods-payment-gateway-for-woocommerce-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       paypal-digital-goods-payment-gateway-for-woocommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-paypal-digital-goods-payment-gateway-for-woocommerce-activator.php
 */
function activate_paypal_digital_goods_payment_gateway_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paypal-digital-goods-payment-gateway-for-woocommerce-activator.php';
	MBJ_Paypal_Digital_Goods_Payment_Gateway_For_WooCommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-paypal-digital-goods-payment-gateway-for-woocommerce-deactivator.php
 */
function deactivate_paypal_digital_goods_payment_gateway_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paypal-digital-goods-payment-gateway-for-woocommerce-deactivator.php';
	MBJ_Paypal_Digital_Goods_Payment_Gateway_For_WooCommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_paypal_digital_goods_payment_gateway_for_woocommerce' );
register_deactivation_hook( __FILE__, 'deactivate_paypal_digital_goods_payment_gateway_for_woocommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-paypal-digital-goods-payment-gateway-for-woocommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_paypal_digital_goods_payment_gateway_for_woocommerce() {

	$plugin = new MBJ_Paypal_Digital_Goods_Payment_Gateway_For_WooCommerce();
	$plugin->run();

}
run_paypal_digital_goods_payment_gateway_for_woocommerce();
