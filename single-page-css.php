<?php
/**
 * Plugin Name:       Single Page Css
 * Plugin URI:        https://github.com/bestwebsite/page-css
 * Description:       This plugin adds a custom css metabox to posts, pages, and custom post types to output css only on those posts or pages.
 * Version:           1.0.0
 * Version:           1.0.0
 * Author:            bestwebsite
 * Author URI:        http://bestwebsite.com
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-single-page-css-activator.php
 */
function activate_single_page_css() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-page-css-activator.php';
	single_page_css_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-single-page-css-deactivator.php
 */
function deactivate_single_page_css() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-page-css-deactivator.php';
	single_page_css_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_single_page_css' );
register_deactivation_hook( __FILE__, 'deactivate_single_page_css' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-single-page-css.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_single_page_css() {

	$plugin = new single_page_css();
	$plugin->run();

}
run_single_page_css();
