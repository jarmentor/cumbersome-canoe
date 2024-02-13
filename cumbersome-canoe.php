<?php
/**
 * Cumbersome Canoe
 *
 * @package CumbersomeCanoe
 * @author Jonathan Armentor
 *
 * @wordpress-plugin
 * Plugin Name:       Cumbersome Canoe
 * Description:       Experimental developer plugin.
 * Version:           0.0.3
 * Requires at least: 5.2
 * Requires PHP:      8.0
 * Author:            Jonathan Armentor
 * Author URI:        https://jonathanarmentor.dev/
 * Text Domain:       cumbersome-canoe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require 'vendor/autoload.php';

use CumbersomeCanoe\CumbersomeCanoe;

$cumbersome_canoe = new CumbersomeCanoe();
