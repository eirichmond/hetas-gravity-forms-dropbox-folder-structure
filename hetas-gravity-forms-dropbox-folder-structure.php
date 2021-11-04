<?php
/**
 * Plugin Name:     Hetas Gravity Forms Dropbox Folder Structure
 * Plugin URI:      https://www.hetas.co.uk
 * Description:     Creates folder structure to segment uploads
 * Author:          Elliott Richmond
 * Author URI:      https://squareone.software
 * Text Domain:     hetas-gravity-forms-dropbox-folder-structure
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Hetas_Gravity_Forms_Dropbox_Folder_Structure
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'gform_dropbox_folder_path_8', 'form_8_change_path', 10, 5 );
function form_8_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
    return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}

add_filter( 'gform_dropbox_folder_path_15', 'form_15_change_path', 10, 5 );
function form_15_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
	return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}

add_filter( 'gform_dropbox_folder_path_27', 'form_27_change_path', 10, 5 );
function form_27_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
    return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}

add_filter( 'gform_dropbox_folder_path_43', 'form_43_change_path', 10, 5 );
function form_43_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
    return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}

add_filter( 'gform_dropbox_folder_path_44', 'form_44_change_path', 10, 5 );
function form_44_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
    return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}

add_filter( 'gform_dropbox_folder_path_45', 'form_45_change_path', 10, 5 );
function form_45_change_path( $folder_path, $form, $field_id, $entry, $feed ) {
    return $folder_path . '/' . rgar( $entry, '1' ) .' - '. rgar( $entry, 'date_created' );
}
