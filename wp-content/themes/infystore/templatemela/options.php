<?php
/** Adding TM Menu in admin panel. */
function tm_theme_setting_menu() {	
	add_theme_page( esc_html__('Theme Settings','infystore'), esc_html__('TM Theme Settings','infystore'), 'manage_options', 'tm_theme_settings', 'tm_theme_settings_page' );		
	add_theme_page( esc_html__('Hook Manager','infystore'), esc_html__('TM Hook Manager','infystore'), 'manage_options', 'tm_hook_manage', 'tm_hook_manage_page');	
}
?>