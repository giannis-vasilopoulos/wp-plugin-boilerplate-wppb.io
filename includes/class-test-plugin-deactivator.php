<?php

/**
 * Fired during plugin deactivation
 *
 * @link       giannis-vasilopoulos.com
 * @since      1.0.0
 *
 * @package    Test_Plugin
 * @subpackage Test_Plugin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Test_Plugin
 * @subpackage Test_Plugin/includes
 * @author     Giannis Vasilopoulos <contact@giannis-vasilopoulos.com>
 */
class Test_Plugin_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		global $wpdb;
		$table_name = $wpdb->prefix . 'test_plugin_table';
		$sql = "DROP TABLE IF EXISTS $table_name";
		$wpdb->query($sql);
		delete_option('test_plugin_db_version');
	}

}
