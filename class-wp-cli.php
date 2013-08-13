<?php

/**
 * Tell WP-CLI we want to add an `ocwp` command
 *
 * Store our functionality in the OCWP_CLI class
 */
WP_CLI::add_command( 'ocwp', 'OCWP_CLI' );

/**
 * My WP-CLI functionality is stored here
 */
class OCWP_CLI extends WP_CLI_Command {

	/**
	 * Creates the command `wp ocwp createpost`
	 */
	public function createpost() {
		$my_post = array(
		  'post_title'    => 'My post',
		  'post_content'  => 'This is my post.',
		  'post_status'   => 'publish',
		  'post_author'   => 1,
		  'post_category' => array(8,39)
		);
		$post_id = wp_insert_post( $my_post );

		/**
		 * Return a success message if my post was created
		 *
		 * For more available messages: https://github.com/wp-cli/wp-cli/wiki/API
		 */
		if ( $post_id )
			WP_CLI::success( 'Post created with ID ' . $post_id );
	}

}