<?php
/*
Plugin Name: Yoast SEO NaN Bug Fix
Plugin URI: http://codebusters.com.au/plugins/yoast-nan-fix
Description: Fixes common Yoast SEO 3 bug.
Version: 1.0
Author: csmit195
Author URI: http://codebusters.com.au/portfolio/chris
*/

// don't load directly
if (!function_exists('is_admin')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}
add_action( 'admin_enqueue_scripts', 'cb_yoastfix', 20);
function cb_yoastfix() {	 wp_enqueue_script('cb_yoastfix', plugin_dir_url( __FILE__ ) . 'yoast-fix.js', array(), false, true);
}