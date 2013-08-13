<?php
/*
Plugin Name: OWCP-CLI
Description: Demonstrating how to write a custom WP-CLI command
*/

// Load our class if we're running WP-CLI
if ( defined( 'WP_CLI' ) && WP_CLI ) require_once( plugin_dir_path( __FILE__ ) . '/class-wp-cli.php' );
