<?php
/**
 * Custom Fields Config File
 *
 * This is custom fields config file, require your custom field's "main" file here.
 *
 * @package Custom Field
 */

require_once 'uabb-gradient/uabb-gradient.php';

if ( ! class_exists( 'UABB_Custom_Field_Scripts' ) ) {
	/**
	 * Class to enqueue field scripts
	 *
	 * @package  UABB_Custom_Field_Scripts
	 */
	class UABB_Custom_Field_Scripts {
		/**
		 * Constructor that initializes custom field scripts
		 *
		 * @since x.x.x
		 */
		function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'custom_field_scripts' ) );
		}

		/**
		 * Function that enqueue styles and scripts
		 *
		 * @since x.x.x
		 */
		function custom_field_scripts() {
			if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {

				/* uabb-gradient field */
				wp_enqueue_style( 'uabb-gradient', BB_ULTIMATE_ADDON_URL . 'fields/uabb-gradient/css/uabb-gradient.css', array(), '' );
				wp_enqueue_script( 'uabb-gradient', BB_ULTIMATE_ADDON_URL . 'fields/uabb-gradient/js/uabb-gradient.js', array(), '', true );
			}
		}
	}

	$UABB_Custom_Field_Scripts = new UABB_Custom_Field_Scripts(); // @codingStandardsIgnoreLine.
}
