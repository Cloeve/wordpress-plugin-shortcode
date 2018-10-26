# wordpress-plugin-shortcode
A simple basis project for a custom WordPress plugin with a shortcode.

## Installing
1. Download the plugin into your plugins directory
2. Enable in the WordPress admin

## Add to existing project as submodule
`git submodule add https://github.com/Cloeve/wordpress-plugin-shortcode`

## icon.png
This file was added for use with SourceTree & local dev management. It has no functionality to the plugin itself, however 
it might be helpful from an organizing development standpoint.

## Key Features
- Add a simple hello world message to any pages or posts with the simple shortcode `[my_custom_plugin_shortcode_name]`

## Shortcode Options
### name
This option is used to set the name to display with the hello world message. Example: `[my_custom_plugin_shortcode_name name="Jane"]`

