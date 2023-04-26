<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Core RSS Block Opens Link in New Tab
 * Plugin URI:        https://github.com/Kntnt/kntnt-core-rss-block-opens-link-new-tab
 * Description:       Adds `target="_blank" rel="noreferrer noopener"` to all links outputted by the core RSS block.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

add_action( 'wp_enqueue_scripts', function () {
	if ( has_block( 'core/rss' ) ) {
		$script = plugin_dir_url( __FILE__ ) . 'js/kntnt-core-rss-block-opens-link-new-tab.js';
		wp_enqueue_script( 'kntnt-core-rss-block-opens-link-new-tab', $script, [ 'jquery' ], '1.0.0', true );
	}
} );

