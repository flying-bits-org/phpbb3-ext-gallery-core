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

abstract class phpbb_ext_gallery_core_nestedsets_abstract implements phpbb_ext_gallery_core_nestedsets_interface
{
	/** @var phpbb_db_driver*/
	protected $db;

	/** @var String */
	protected $table;

	/**
	* Column names in the table
	* @var String
	*/
	protected $item_id		= 'item_id';
	protected $left_id		= 'left_id';
	protected $right_id		= 'right_id';
	protected $parent_id	= 'parent_id';
	protected $item_parents	= 'item_parents';

	/**
	* Additional SQL restrictions
	* Allows to have multiple nested sets in one table
	* @var String
	*/
	protected $sql_where = '';

	/**
	* List of item properties to be cached in $item_parents
	* @var array
	*/
	protected $item_basic_data = array('*');

	/**
	* @inheritdoc
	*/
	public function move(phpbb_ext_gallery_core_nestedsets_item_interface $item, $delta)
	{
	}

	/**
	* @inheritdoc
	*/
	public function move_down(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}

	/**
	* @inheritdoc
	*/
	public function move_up(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}

	/**
	* @inheritdoc
	*/
	public function add(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}

	/**
	* @inheritdoc
	*/
	public function delete(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}

	/**
	* @inheritdoc
	*/
	public function move_children(phpbb_ext_gallery_core_nestedsets_item_interface $current_parent, phpbb_ext_gallery_core_nestedsets_item_interface $new_parent)
	{
	}

	/**
	* @inheritdoc
	*/
	public function add_child(phpbb_ext_gallery_core_nestedsets_item_interface $new_parent, phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}

	/**
	* @inheritdoc
	*/
	public function change_parent(phpbb_ext_gallery_core_nestedsets_item_interface $item, phpbb_ext_gallery_core_nestedsets_item_interface $new_parent)
	{
	}

	/**
	* @inheritdoc
	*/
	public function get_branch_data(phpbb_ext_gallery_core_nestedsets_item_interface $item, $type = 'all', $order_desc = true, $include_item = true)
	{
	}

	/**
	* Get base information of parent items
	*
	* Data is cached in the item_parents column in the item table
	*
	* @inheritdoc
	*/
	public function get_parent_data(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
	}
}
