<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
  Plugin Name: Feed to Post - Using feeds (RSS, JSON, ATOM, etc.) to Post Content for WordPress
  Plugin URI: http://www.danielewilliams.com/projects/wp-feed-to-post
  Description: Feed to Post allows users to take a feed URL and generate unique posts in WordPress. It has a beautiful admin screen to manage feeds, metadata, and posts in its own Dashboard. 
  Version: 1.0
  Author: Daniel E. Williams
  Author URI: http://danielewilliams.com
  License: ASLv2+
  Text Domain: wp-feed-to-post
*/

class WP_Feed_To_Post
{
  // Constructor
  function __construct()
  {
    add_action('admin_menu', array($this, 'wftp_add_menu'));
    register_activation_hook(__FILE__, array($this, 'wftp_install'));
    register_deactivation_hook(__FILE__,array($this, 'wftp_uninstall'));
  }

  /*
   * Action to perform at loading of admin menu
   */
  function wftp_add_menu() 
  {
    add_menu_page('Feed to Post', 'Feed to Post', 'manage_options', 'feed_to_post_dashboard', array (
      __CLASS__,
      'wftp_page_file_path'
    ), plugins_url('images/wp-feed-to-post-logo.png', __FILE__), '1.0.0');

    add_submenu_page('feed-to-post-dashboard', 'Feed to Post', 'Dashboard', 'Dashboard', 'manage_options', 'feed-to-post-dashboard', array(
      __CLASS__,
      'wftp_page_file_path'
    ));

    add_submenu_page('feed-to-post-dashboard', 'Feed to Post' . ' Settings', '<b style="color:#f9845b">Settings</b>', 'manage_options', 'feed-to-post-settings', array(
      __CLASS__,
     'wftp_page_file_path'
    ));
  }

  /*
   * Actions to perform on loading of menu pages
   */
  function wftp_page_file_path() 
  {

  }

  /*
   * Actions to perforn on activation of plugin
   */
  function wftp_install() 
  {

  }

  /*
   * Actions to perforn on de-activation of plugin
   */
  function wftp_uninstall() 
  {

  }
}

new WP_Feed_To_Post();
?>