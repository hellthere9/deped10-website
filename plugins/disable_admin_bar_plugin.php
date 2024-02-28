<?php
/**
 * Plugin Name
 *
 * @author            Kurt Bernstein P. Blancia
 * @copyright         2024 deped
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Admin Bar
 * Plugin URI:        N/A
 * Description:       Disable Admin Bar.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:             Kurt Bernstein P. Blancia
 * Author URI:        N/A
 * Text Domain:       
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

 // Remove the admin bar from the Front end 
add_filter( 'show_admin_bar', '__return_false');