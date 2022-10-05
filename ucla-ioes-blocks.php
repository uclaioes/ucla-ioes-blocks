<?php

/**
 * Plugin Name:       UCLA IoES Blocks
 * Plugin URI:        https://github.com/uclaioes/ucla-ioes-blocks
 * Description:       Custom plugin to manage WordPress blocks.
 * Version:           1.0.0
 * Author:            Scott Gruber
 * Author URI:        http://github.com/scottgruber
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ucla-ioes-blocks
 */


function ucla_ioes_blocks_plugin_deny_list_blocks() {
    wp_enqueue_script(
        'ucla-ioes-deny-list-blocks',
        plugins_url( 'ucla-ioes-blocks.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
    );
}
add_action( 'enqueue_block_editor_assets', 'ucla_ioes_blocks_plugin_deny_list_blocks' );

/* filter to disable blocks by custom post types 
https://developer.wordpress.org/reference/functions/use_block_editor_for_post_type/
*/
add_filter('use_block_editor_for_post_type', 'ucla_ioes_disable_gutenberg', 10, 2);
function ucla_ioes_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key
    if ($post_type === 'articles') return false;
    return $current_status;
}
