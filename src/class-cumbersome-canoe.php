<?php
/**
 * Class CumbersomeCanoe
 *
 * This class represents the Cumbersome Canoe plugin.
 * It initializes the plugin and adds an admin notice banner.
 *
 * @package CumbersomeCanoe
 */

namespace CumbersomeCanoe;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Class CumbersomeCanoe
 *
 * This class represents the Cumbersome Canoe plugin.
 * It initializes the plugin and adds an admin notice banner.
 */
class Cumbersome_Canoe {

	/**
	 * Constructor method.
	 * Adds an action hook to display an admin notice banner.
	 */
	public function __construct() {
		add_action( 'admin_notices', array( $this, 'admin_banner' ) );
	}

	/**
	 * Displays an admin banner for Cumbersome Canoe.
	 *
	 * This function outputs an HTML div element with a success notice, thanking the user for using Cumbersome Canoe.
	 */
	public function admin_banner() {
		echo '<div class="notice notice-success"><p>Thanks for using Cumbersome Canoe!</p></div>';
	}
}
