<?php
/*
Plugin Name: my beautiful tubes
Plugin URI: http://wordpress.org/plugins/my-beautiful-tubes/
Description: A plugin which allows blogger to embed youtube's' video within the post and page and get more views from that video.
Version: 1.9.3
Author: GadgetsChoose
Author URI: http://wordpresswebhostingnsolution.com/2016/03/10/youtube-video-plugin-for-wordpress-blog/
License: GPLv2
*/

/* Copyright 2016 http://wordpresswebhostingnsolution.com (e-mail : morning131@hotmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, please visit <http://www.gnu.org/licenses/>.

*/

/* Include various files need for this major plugin file */

include_once('my-beautiful-tubes-meta-box-setting.inc.php');
include_once('my-beautiful-tubes-side-widget.inc.php');
include_once('my-beautiful-tubes-displays-content.inc.php');
include_once('my-beautifultubes-register-tinymce-buttons.inc.php');

function load_beautiful_script() {
        wp_register_script( 'my-beautiful-tubes-script', plugins_url('js/btwu.js', __FILE__), array('jquery'), '1.0.1', true  );
        wp_enqueue_script( 'my-beautiful-tubes-script' );
        wp_register_style('myBeautyStyleSheet', plugins_url( 'my-beautiful-tubes-style.css' , __FILE__ ), array(), '37', 'all' );
        wp_enqueue_style( 'myBeautyStyleSheet');
}

add_action('init', 'load_beautiful_script');

add_filter('plugin_action_links', 'my_beautiful_tubes_plugin_settings_link', 10, 2);

function my_beautiful_tubes_plugin_settings_link($links, $file) {

    if ( $file == 'my-beautiful-tubes/my-beautiful-tubes.php' ) {
        /* Insert the setting link */
        $links['tut'] = sprintf( '<a href="%s" rel="nofollow" target="_blank">%s</a>', 'http://wordpresswebhostingnsolution.com/2016/03/10/youtube-video-plugin-for-wordpress-blog/', __( 'Tutorial', 'my_beautiful_tubes' ) );
        
    }
    return $links;

}

?>