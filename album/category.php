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

class phpbb_ext_gallery_core_album_category extends phpbb_ext_gallery_core_album_base
{
	/**
	* @inheritdoc
	*/
	public function get_type_id()
	{
		return 'category';
	}

	/**
	* @inheritdoc
	*/
	public function get_type_name()
	{
		return 'GALLERY_ALBUM_TYPE_CATEGORY';
	}
}
