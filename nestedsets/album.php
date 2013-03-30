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

class phpbb_ext_gallery_core_nestedsets_album extends phpbb_ext_gallery_core_nestedsets_abstract
{
	/** @var phpbb_db_driver*/
	protected $db;

	/** @var String */
	protected $table;

	/**
	* Column names in the table
	* @var String
	*/
	protected $item_id		= 'album_id';
	protected $left_id		= 'left_id';
	protected $right_id		= 'right_id';
	protected $parent_id	= 'parent_id';
	protected $item_parents	= 'album_parents';

	/**
	* Additional SQL restrictions
	* Allows to have multiple nestedsets in one table
	* @var String
	*/
	protected $sql_where = '';

	/**
	* List of item properties to be cached in $item_parents
	* @var array
	*/
	protected $item_basic_data = array('album_id', 'album_name', 'album_type');

	public function __construct(phpbb_db_driver $db, $table_name, $user_id)
	{
		$this->db = $db;
		$this->table_name = $table_name;
		$this->sql_where = 'user_id = ' . (int) $user_id;
	}
}
