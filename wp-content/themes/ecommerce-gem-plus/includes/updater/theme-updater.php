<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
    require dirname( __FILE__ ) . '/theme-updater-admin.php';
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://www.prodesigns.com/wordpress-themes/', // Site where EDD is hosted
		'item_name'      => 'eCommerce Gem Plus', // Name of theme
		'theme_slug'     => 'ecommerce-gem-plus', // Theme slug
		'version'        => '2.1.2', // The current version of this theme
		'author'         => 'ProDesigns', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => 'https://www.prodesigns.com/wordpress-themes/my-account/', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'ecommerce-gem-plus' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'ecommerce-gem-plus' ),
		'license-key'               => __( 'License Key', 'ecommerce-gem-plus' ),
		'license-action'            => __( 'License Action', 'ecommerce-gem-plus' ),
		'deactivate-license'        => __( 'Deactivate License', 'ecommerce-gem-plus' ),
		'activate-license'          => __( 'Activate License', 'ecommerce-gem-plus' ),
		'status-unknown'            => __( 'License status is unknown.', 'ecommerce-gem-plus' ),
		'renew'                     => __( 'Renew?', 'ecommerce-gem-plus' ),
		'unlimited'                 => __( 'unlimited', 'ecommerce-gem-plus' ),
		'license-key-is-active'     => __( 'License key is active.', 'ecommerce-gem-plus' ),
		'expires%s'                 => __( 'Expires %s.', 'ecommerce-gem-plus' ),
		'expires-never'             => __( 'Lifetime License.', 'ecommerce-gem-plus' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'ecommerce-gem-plus' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'ecommerce-gem-plus' ),
		'license-key-expired'       => __( 'License key has expired.', 'ecommerce-gem-plus' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'ecommerce-gem-plus' ),
		'license-is-inactive'       => __( 'License is inactive.', 'ecommerce-gem-plus' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'ecommerce-gem-plus' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'ecommerce-gem-plus' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'ecommerce-gem-plus' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'ecommerce-gem-plus' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'ecommerce-gem-plus' ),
	)

);
