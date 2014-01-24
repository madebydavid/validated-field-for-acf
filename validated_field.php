<?php
/*
Plugin Name: Advanced Custom Fields: Validated Field
Plugin URI: http://www.doublesharp.com/
Description: Server side validation and input masking for the Advanced Custom Fields v4+ plugin
Author: Justin Silver
Version: 1.0
Author URI: http://doublesharp.com/
*/


// Load the add-on field once the plugins have loaded, but before init (this is when ACF registers the fields)
if (!function_exists("register_acf_validated_field")):
function register_acf_validated_field(){
	// create field
	include_once 'validated_field_v4.php';
}

add_action('acf/register_fields', 'register_acf_validated_field');
endif;