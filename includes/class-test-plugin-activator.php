<?php

/**
 * Fired during plugin activation
 *
 * @link       giannis-vasilopoulos.com
 * @since      1.0.0
 *
 * @package    Test_Plugin
 * @subpackage Test_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Test_Plugin
 * @subpackage Test_Plugin/includes
 * @author     Giannis Vasilopoulos <contact@giannis-vasilopoulos.com>
 */
class Test_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$table_name = $wpdb->prefix . 'test_plugin_table';
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
			name tinytext NOT NULL,
			text text NOT NULL,
			bio text NOT NULL,
			url varchar(55) DEFAULT '' NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta($sql);

		add_option( "test_plugin_db_version", "1.1" );
	}

	public static function install_data(){
		global $wpdb;
		$welcome_name = 'Mr. WordPress';
		$welcome_text = 'Congratulations, you just completed the installation!';

		$table_name = $wpdb->prefix . 'test_plugin_table';

		$wpdb->insert(
			$table_name,
			array(
				'time' => current_time( 'mysql' ),
				'name' => $welcome_name,
				'text' => $welcome_text,
				'bio' => 'lorem ipsum',
				'url' => 'https://giannis-vasilopoulos.com/'
			)
		);
	}




}
