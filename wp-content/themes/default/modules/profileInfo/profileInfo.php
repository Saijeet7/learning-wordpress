<?php
/**
 *
 * Render module.
 *
 * @param array  $args Override the module with custom content (ie: page builder or some other special content).
 * @param bool   $use_page_content Pull in defaults from the page ACF fields.
 * @param string $get_field_type Either get_field or get_sub_field depending on if this is coming from page builder or not.
 * @param string $field_location Either an ID of the page or 'option' if it is an archive page.
 * @param bool   $prefix Prepended to the get_field for things like archive site options.
 * @return bool
 * Usage on page template / $page_id = get_the_ID(); / e11_module_name( array(), true, 'get_field', $page_id );
 */
// function profileInfo($args = array(), $use_page_content = false, $get_field_type = 'get_field', $field_location = '', $prefix = false)
// {
//     if (empty($args) && !$use_page_content) {
//         return false;
//     }
//     $module_slug = 'profileInfo';
//     $field_prefix = 'mp_';

//     $module_fields = array(
//         'profile_description',
//         'location',
//         'friends'
//     );
//     $defaults = array();
//     foreach ($module_fields as $key) {
//         if ($use_page_content) {
//             $default[$key] = $get_field_type($prefix . $field_prefix . $key, $field_location);
//         } else {
//             $defaults[$key] = false;
//         }
//     }
//     $data = array_merge($defaults, $args);
//     $data = apply_filters('e11_filter_module_data', $data, $module_slug, $field_prefix, $get_field_type);
//     include 'tpl/' . $module_slug . '.tpl.php';
//     return true;
// }


function e11_profileInfo( $args = array(), $use_page_content = false, $get_field_type = 'get_field', $field_location = '', $prefix = false ) {
	if ( empty( $args ) && ! $use_page_content ) {
		return false;
	}

	$module_slug  = 'profileInfo';
	$field_prefix = 'mp_';

	$module_fields = array(
		'profile_description',
		'location',
        'settings'
	);

	$defaults = array();

	foreach ( $module_fields as $key ) {
		if ( $use_page_content ) {
			$defaults[ $key ] = $get_field_type( $prefix . $field_prefix . $key, $field_location );
		} else {
			$defaults[ $key ] = false;
		}
	}

	$data = array_merge( $defaults, $args );

	$data = apply_filters( 'e11_filter_module_data', $data, $module_slug, $field_prefix, $get_field_type );

	include 'tpl/' . $module_slug . '.tpl.php';

	return true;
}
