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

function cb_yoastfix() {
}