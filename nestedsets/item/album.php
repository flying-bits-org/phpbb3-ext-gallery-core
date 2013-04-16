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

class phpbb_ext_gallery_core_nestedsets_item_album extends phpbb_ext_gallery_core_nestedsets_item_abstract
{
	/** @var int */
	protected $user_id;

	public function __construct(array $album_row)
	{
		$this->item_id = (int) $album_row['album_id'];
		$this->parent_id = (int) $album_row['parent_id'];
		$this->left_id = (int) $album_row['left_id'];
		$this->right_id = (int) $album_row['right_id'];
		$this->user_id = (int) $album_row['user_id'];
		$this->item_parents_data = (string) $album_row['album_parents'];
	}

	/**
	* Returns the user ID of the item owner
	*
	* @return int
	*/
	public function get_user_id()
	{
		return (int) $this->user_id;
	}
}
