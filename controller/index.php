<?php
/**
*
* @package phpBB Gallery Core
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class phpbb_ext_gallery_core_controller_index
{
	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_auth		$auth		Auth object
	* @param phpbb_cache_service	$cache		Cache object
	* @param phpbb_config	$config		Config object
	* @param phpbb_db_driver	$db		Database object
	* @param phpbb_request	$request	Request object
	* @param phpbb_template	$template	Template object
	* @param phpbb_user		$user		User object
	* @param phpbb_controller_helper		$helper		Controller helper object
	* @param string			$root_path	phpBB root path
	* @param string			$php_ext	phpEx
	*/
	public function __construct(phpbb_auth $auth, phpbb_cache_service $cache, phpbb_config $config, phpbb_db_driver $db, phpbb_request $request, phpbb_template $template, phpbb_user $user, phpbb_controller_helper $helper, $root_path, $php_ext)
	{
		$this->auth = $auth;
		$this->cache = $cache;
		$this->config = $config;
		$this->db = $db;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->helper = $helper;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		/*if (!class_exists('bbcode'))
		{
			include($this->root_path . 'includes/bbcode.' . $this->php_ext);
		}
		if (!function_exists('get_user_rank'))
		{
			include($this->root_path . 'includes/functions_display.' . $this->php_ext);
		}*/
	}

	/**
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function show()
	{
		/*
		* The render method takes up to three other arguments
		* @param	string		Name of the template file to display
		*						Template files are searched for two places:
		*						- phpBB/styles/<style_name>/template/
		*						- phpBB/ext/<all_active_extensions>/styles/<style_name>/template/
		* @param	string		Page title
		* @param	int			Status code of the page (200 - OK [ default ], 403 - Unauthorized, 404 - Page not found)
		*/
		return $this->helper->render('gallery/index_body.html', '$page_title', 200);
	}
}