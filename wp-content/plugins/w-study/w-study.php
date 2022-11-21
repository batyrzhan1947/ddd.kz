<?php
/*
Plugin Name: W Study
Plugin URI: http://wordpress.org/plugins/
Description: This is new Plugin
Author: Batyrzhan
Version: 1.0
*/


defined('ABSPATH') or die;

define('W_STUDY_DIR', plugin_dir_path(__FILE__));

require_once W_STUDY_DIR . 'w-study-functions.php';

add_action('wp_head', 'head_fun');

add_action('admin_menu','w_set_menues');


