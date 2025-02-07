<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_css')) {
    function load_css($file) {
        return base_url("assets/css/" . $file);
    }
}

if (!function_exists('load_js')) {
    function load_js($file) {
        return base_url("assets/js/" . $file);
    }
}

if (!function_exists('load_image')) {
    function load_image($file) {
        return base_url("assets/img/" . $file);
    }
}

function asset_url(){
    return base_url() . 'assets/';
}


?>