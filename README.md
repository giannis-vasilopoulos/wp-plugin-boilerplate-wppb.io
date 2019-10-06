# Boilerplate using wppb.io

My boilerplate for wordpress plugin development using https://github.com/DevinVinson/WordPress-Plugin-Boilerplate
[WordPress] A standardized, organized, object-oriented foundation for building high-quality WordPress Plugins. A foundation for WordPress Plugin Development that aims to provide a clear and consistent guide for building your plugins. http://wppb.io

## Installation
The Boilerplate can be installed directly into your plugins folder "as-is". You will want to rename it and the classes inside of it to fit your needs. For example, if your plugin is named 'example-me' then:

* rename files from `plugin-name` to `example-me`
* change `test_plugin` to `example_me`
* change `test-plugin` to `example-me`
* change `Test_Plugin` to `Example_Me`
* change `TEST_PLUGIN_` to `EXAMPLE_ME_`

At activation installs also a test table to the database and deletes it at deactivation. You can adjust your schema at includes/class-test-plugin-activator.php