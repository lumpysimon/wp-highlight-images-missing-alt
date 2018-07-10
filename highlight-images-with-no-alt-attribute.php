<?php
/**
 * Plugin Name:  Highlight Images With No Alt Attribute
 * Description:  Adds an impossible-to-miss bright red dashed border round images with no alt attribute (only shown to logged-in administrators)
 * Version:      1.0
 * Plugin URI:   https://github.com/lumpysimon/wp-highlight-images-missing-alt
 * Author:       Simon Blackbourn
 * Author URI:   https://simonblackbourn.net
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */



defined( 'ABSPATH' ) or die();



if ( ! defined( 'HIWNAI_PLUGIN_PATH' ) )
	define( 'HIWNAI_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'HIWNAI_PLUGIN_DIR' ) )
	define( 'HIWNAI_PLUGIN_DIR', plugin_dir_url( __FILE__ ) );



$hiwnai = new hiwnai();



class hiwnai {



	function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_css' ) );

	}



	function enqueue_css() {

		if ( ! is_user_logged_in() )
			return;

		if ( ! current_user_can( apply_filters( 'hiwnai_user_cap', 'manage_options' ) ) )
			return;

		$name     = 'hiwnai';
		$filename = 'assets/' . $name . '.css';

		wp_enqueue_style(
			$name,
			HIWNAI_PLUGIN_DIR . $filename,
			null,
			filemtime( HIWNAI_PLUGIN_PATH . $filename )
		);

	}



} // class hiwnai
