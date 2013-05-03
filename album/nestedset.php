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

class phpbb_ext_gallery_core_album_nestedset extends phpbb_tree_nestedset
{
	/**
	* Construct
	*
	* @param phpbb_db_driver	$db		Database connection
	* @param phpbb_lock_db		$lock	Lock class used to lock the table when moving forums around
	* @param string				$table_name		Table name
	*/
	public function __construct(phpbb_db_driver $db, phpbb_lock_db $lock, $table_name)
	{
		$this->user_id = 0;

		parent::__construct(
			$db,
			$lock,
			$table_name,
			'GALLERY_ALBUM_',
			'%1$s' . 'user_id = ' . $this->user_id,
			array(
				'album_id',
				'album_name',
				'album_type',
			),
			array(
				'item_id'		=> 'album_id',
				'item_parents'	=> 'album_parents',
			)
		);
	}

	/**
	* Set user id to select a specific album tree
	*
	* @param int				$user_id	User id used to get the tree
	*/
	public function set_user_id($user_id)
	{
		$this->user_id = (int) $user_id;
		$this->sql_where = '%1$s' . 'user_id = ' . $this->user_id;
	}

	/**
	* @inheritdoc
	*/
	public function insert(array $additional_data)
	{
		$item_data = array_merge($additional_data, array(
			'user_id'	=> $this->user_id,
		));

		return parent::insert($item_data);
	}
}
