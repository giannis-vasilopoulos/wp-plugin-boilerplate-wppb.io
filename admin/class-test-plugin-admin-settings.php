<?php


class Test_Plugin_Settings {

	public function setup_plugin_options_menu() {

		//Add the menu to the Plugins set of menu items
		add_menu_page(                                      // add_menu_page() for move the sub-page wp-admin panel
			'Test Plugin', 					// The title to be displayed in the browser window for this page.
			'Test Plugin menu title',					// The text to be displayed for this menu item
			'manage_options',					// Which type of users can see this menu item
			'test_plugin',			// The unique ID - that is, the slug - for this menu item
			array( $this, 'render_settings_page_content'),				// The name of the function to call when rendering this menu's page
			"dashicons-admin-plugins",
			7
		);

		add_submenu_page(
			'test_plugin',
			'Submenu Page',
			'Submenu menu title',
			'manage_options',
			'submenu-test_plugin',
			array( $this, 'render_settings_subpage_content')
		);
	}

	public function render_settings_page_content(){
		require_once plugin_dir_path( __FILE__ ) . 'partials/test-plugin-admin-display.php';
	}
	public function render_settings_subpage_content(){
		require_once plugin_dir_path( __FILE__ ) . 'partials/test-plugin-admin-submenu-display.php';
	}

}