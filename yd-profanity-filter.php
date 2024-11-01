<?php  
/*  
Plugin Name: YourDeveloper Profanity Filter
Plugin URI: http://www.yourdeveloper.net/wordpress/ 
Description: YourDeveloper Profanity filter will help you to filter bad words
Version: 1.0 
Author: YourDeveloper.Net 
Disclaimer: No warranty, use this in your own risk.  
*/  

if(!class_exists('YDPlugin')) :

// DEFINE PLUGIN ID
define('YDPluginOptions_ID', 'yd-profanity-filter');
// DEFINE PLUGIN NICK
define('YDPluginOptions_NICK', 'YourDeveloper Profanity Filter Options');


    class YDPlugin
    {
		 
		 
		public static function file_path($file)
		{
			return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
		}
		 
		public static function register()
		{
			register_setting(YDPluginOptions_ID.'_options', 'yd-profanity-filter_filteredwords');
			register_setting(YDPluginOptions_ID.'_options', 'yd-profanity-filter_checktitle');
			register_setting(YDPluginOptions_ID.'_options', 'yd-profanity-filter_checkpost');
			register_setting(YDPluginOptions_ID.'_options', 'yd-profanity-filter_checkcomment');
			register_setting(YDPluginOptions_ID.'_options', 'yd-profanity-filter_replacement');
			
		 
			
		}
		 
		public static function menu()
		{
			// Create menu tab
			add_options_page(YDPluginOptions_NICK.' Plugin Options', YDPluginOptions_NICK, 'manage_options', YDPluginOptions_ID.'_options', array('YDPlugin', 'options_page'));
		}
		 
		public static function options_page()
		{ 
			if (!current_user_can('manage_options')) 
			{
				wp_die( __('You do not have sufficient permissions to access this page.') );
			}
			
			$plugin_id = YDPluginOptions_ID;
			// display options page
			include(self::file_path('options.php'));
		}
    }
	
	if ( is_admin() )
	{
		add_action('admin_init', array('YDPlugin', 'register'));
		add_action('admin_menu', array('YDPlugin', 'menu'));
	}
 
	if (get_option('yd_checktitle')=='1') {
				add_filter( 'the_title', 'filter_profanity'); //the title of the post
		}

	if (get_option('yd_checkpost')=='1') {
				add_filter( 'the_content', 'filter_profanity'); //the title of the post
		}

	if (get_option('yd_checkcomment')=='1') {
				add_filter( 'comment_text', 'filter_profanity'); //the title of the post
		}

	endif;
 
   function filter_profanity( $content ) 
		{
	
			$profanities = explode(",", get_option('yd-profanity-filter_filteredwords'));
			$content = str_ireplace( $profanities, get_option('yd-profanity-filter_replacement'), $content );
			return $content;
		}	

 
?>