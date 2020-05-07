<?php
/**
 * Plugin Name: Lightweigth Pin It Button
 * Description: A lightweight pin it button to Pinterest
 * Plugin URI: 
 * Author: Matheus Martins
 * Author URI: https://matheuswd.com.br
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: lpib
 * Domain Path: domain/path
 */

/*
    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'LPIB_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */

// <a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=http://www.foodiecrush.com/2014/03/filet-mignon-with-porcini-mushroom-compound-butter/&media=https://i.pinimg.com/736x/17/34/8e/17348e163a3212c06e61c41c4b22b87a.jpg&description=So%20delicious!" data-pin-shape="round"></a>
// 

function lpib_enqueue_scripts() {
	wp_register_script( 'pinit-pinterest', 'https://assets.pinterest.com/js/pinit.js', null, null, true );
	wp_register_script( 'add-pin-it', plugin_dir_url( __FILE__ ) . 'public/js/add-pin-it.js', null, null, true );

	
	$dataToBePassed = array(
    	'home'            => get_stylesheet_directory_uri(),
	);

	wp_localize_script( 'add-pin-it', 'php_vars', $dataToBePassed );

	wp_enqueue_script( 'pinit-pinterest' );
	wp_enqueue_script( 'add-pin-it' );
}

add_action('wp_enqueue_scripts', 'lpib_enqueue_scripts');










