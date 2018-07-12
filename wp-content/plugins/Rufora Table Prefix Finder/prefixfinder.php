<?php 
    /*
    Plugin Name: Find Table Prefix
    Plugin URI: www.ruforaweb.com
    Description: Plugin for displaying current table prefix in this current installation
    Author: Vishnu Ajit
    Version: 1.0
    Author URI: www.ruforaweb.com
  
    */



    function rfr_AddItemToSettingsMenu()
    {
    	add_options_page("Rufora Table Prefix", "Rufora Table Prefix", 1, "Rufora Table Prefix" , 'rfr_doStuff' );
    }

    function rfr_doStuff()
    {
		
		echo '<h3>Rufora DB Details Plugin</h3>';

		global $wpdb;
		echo '<p>';
		echo '<strong>Database Name:  </strong> '.$wpdb->dbname. '</br>';
		echo '<strong>Table Prefix:  </strong> '.$wpdb->base_prefix.'</br>';




		echo '</p>';

    }

    add_action('admin_menu', 'rfr_AddItemToSettingsMenu');

?>