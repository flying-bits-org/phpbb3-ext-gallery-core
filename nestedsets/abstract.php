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
	protected $table_name;

	/** @var String */
	protected $item_class = 'phpbb_ext_gallery_core_nestedsets_item_abstract';

	/**
	* Column names in the table
	* @var array
	*/
	protected $table_columns = array(
		'item_id'	=> 'item_id',
		'left_id'	=> 'left_id',
		'right_id'	=> 'right_id',
		'parent_id'	=> 'parent_id',
		'item_parents'	=> 'item_parents',
	);

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
	* Delete an item from the nested set (also deletes the rows form the table)
	*
	* Also deletes all subitems from the nested set
	*
	* @param string		$operator		SQL operator that needs to be prepended to sql_where,
	*									if it is not empty.
	* @param string		$column_prefix	Prefix that needs to be prepended to column names
	* @return bool True if the item was deleted
	*/
	protected function get_sql_where($operator = 'AND', $column_prefix = '')
	{
		return !$this->sql_where ?: $operator . ' ' . sprintf($this->sql_where, $column_prefix);
	}

	/**
	* @inheritdoc
	*/
	public function move(phpbb_ext_gallery_core_nestedsets_item_interface $item, $delta)
	{
		if ($delta == 0)
		{
			return false;
		}

		$action = ($delta > 0) ? 'move_up' : 'move_down';
		$delta = abs($delta);

		/**
		* Fetch all the siblings between the item's current spot
		* and where we want to move it to. If there are less than $delta
		* siblings between the current spot and the target then the
		* item will move as far as possible
		*/
		$sql = 'SELECT ' . implode(', ', $this->table_columns) . '
			FROM ' . $this->table_name . '
			WHERE ' . $this->table_columns['parent_id'] . ' = ' . $item->get_parent_id() . '
				' . $this->get_sql_where() . '
				AND ';

		if ($action == 'move_up')
		{
			$sql .= $this->table_columns['right_id'] . ' < ' . $item->get_right_id() . ' ORDER BY ' . $this->table_columns['right_id'] . ' DESC';
		}
		else
		{
			$sql .= $this->table_columns['left_id'] . ' > ' . $item->get_left_id() . ' ORDER BY ' . $this->table_columns['left_id'] . ' ASC';
		}

		$result = $this->db->sql_query_limit($sql, $delta);

		$target = null;
		while ($row = $this->db->sql_fetchrow($result))
		{
			$target = new $this->item_class($row);
		}
		$this->db->sql_freeresult($result);

		if (is_null($target))
		{
			// The item is already on top or bottom
			return false;
		}

		/**
		* $left_id and $right_id define the scope of the items that are affected by the move.
		* $diff_up and $diff_down are the values to substract or add to each item's left_id
		* and right_id in order to move them up or down.
		* $move_up_left and $move_up_right define the scope of the items that are moving
		* up. Other items in the scope of ($left_id, $right_id) are considered to move down.
		*/
		if ($action == 'move_up')
		{
			$left_id = $target->get_left_id();
			$right_id = $item->get_right_id();

			$diff_up = $item->get_left_id() - $target->get_left_id();
			$diff_down = $item->get_right_id() + 1 - $item->get_left_id();

			$move_up_left = $item->get_left_id();
			$move_up_right = $item->get_right_id();
		}
		else
		{
			$left_id = $item->get_left_id();
			$right_id = $target->get_right_id();

			$diff_up = $item->get_right_id() + 1 - $item->get_left_id();
			$diff_down = $target->get_right_id() - $item->get_right_id();

			$move_up_left = $item->get_right_id() + 1;
			$move_up_right = $target->get_right_id();
		}

		// Now do the dirty job
		$sql = 'UPDATE ' . $this->table_name . '
			SET ' . $this->table_columns['left_id'] . ' = ' . $this->table_columns['left_id'] . ' + CASE
				WHEN ' . $this->table_columns['left_id'] . " BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			" . $this->table_columns['right_id'] . ' = ' . $this->table_columns['right_id'] . ' + CASE
				WHEN ' . $this->table_columns['right_id'] . " BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			" . $this->table_columns['item_parents'] . " = ''
			WHERE
				" . $this->table_columns['left_id'] . " BETWEEN {$left_id} AND {$right_id}
				AND " . $this->table_columns['right_id'] . " BETWEEN {$left_id} AND {$right_id}
				" . $this->get_sql_where();
		$this->db->sql_query($sql);
	}

	/**
	* @inheritdoc
	*/
	public function move_down(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
		$this->move($item, -1);
	}

	/**
	* @inheritdoc
	*/
	public function move_up(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
		$this->move($item, 1);
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
	public function remove(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
		$items = array_keys($this->get_branch_data($item, 'children'));
		$diff = sizeof($items) * 2;

		$sql_is_parent_sibling = $this->table_columns['left_id'] . ' < ' . $item->get_right_id() . '
			AND ' . $this->table_columns['right_id'] . ' > ' . $item->get_right_id();

		$sql_is_parent = $this->table_columns['left_id'] . ' > ' . $item->get_right_id();
		$sql_remove_items = $this->db->sql_in_set($this->table_columns['item_id'], $items);

		$sql = 'UPDATE ' . $this->table_name . '
			SET ' . $this->table_columns['left_id'] . ' = ' . $this->db->sql_case($sql_is_parent, $this->table_columns['left_id'] . ' - ' . $diff, $this->db->sql_case($sql_remove_items, 0, $this->table_columns['left_id'])) . ',
				' . $this->table_columns['right_id'] . ' = ' . $this->db->sql_case($sql_is_parent . ' OR ' . $sql_is_parent_sibling, $this->table_columns['right_id'] . ' - ' . $diff, $this->db->sql_case($sql_remove_items, 0, $this->table_columns['right_id'])) . ',
				' . $this->table_columns['parent_id'] . ' = ' . $this->db->sql_case($sql_remove_items, 0, $this->table_columns['parent_id']) . ',
				' . $this->table_columns['item_parents'] . " = ''
			" . $this->get_sql_where('WHERE');
		$this->db->sql_query($sql);

		return $items;
	}

	/**
	* @inheritdoc
	*/
	public function delete(phpbb_ext_gallery_core_nestedsets_item_interface $item)
	{
		$removed_items = $this->remove($item);

		$sql = 'DELETE FROM ' . $this->table_name . '
			WHERE ' . $this->db->sql_in_set($this->table_columns['item_id'], $removed_items) . '
			' . $this->get_sql_where('AND');
		$this->db->sql_query($sql);
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
		switch ($type)
		{
			case 'parents':
				$condition = 'i1.' . $this->table_columns['left_id'] . ' BETWEEN i2.' . $this->table_columns['left_id'] . ' AND i2.' . $this->table_columns['right_id'] . '';
			break;

			case 'children':
				$condition = 'i2.' . $this->table_columns['left_id'] . ' BETWEEN i1.' . $this->table_columns['left_id'] . ' AND i1.' . $this->table_columns['right_id'] . '';
			break;

			default:
				$condition = 'i2.' . $this->table_columns['left_id'] . ' BETWEEN i1.' . $this->table_columns['left_id'] . ' AND i1.' . $this->table_columns['right_id'] . '
					OR i1.' . $this->table_columns['left_id'] . ' BETWEEN i2.' . $this->table_columns['left_id'] . ' AND i2.' . $this->table_columns['right_id'];
			break;
		}

		$rows = array();

		$sql = 'SELECT i2.*
			FROM ' . $this->table_name . ' i1
			LEFT JOIN ' . $this->table_name . " i2
				ON (($condition) " . $this->get_sql_where(' AND ', 'i2.') . ')
			WHERE i1.' . $this->table_columns['item_id'] . ' = ' . $item->get_item_id() . '
				' . $this->get_sql_where(' AND ', 'i1.') . '
			ORDER BY i2.' . $this->table_columns['left_id'] . ' ' . ($order_desc ? 'ASC' : 'DESC');
		$result = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($result))
		{
			if (!$include_item && $item->get_item_id() === (int) $row[$this->table_columns['item_id']])
			{
				continue;
			}

			$rows[$row[$this->table_columns['item_id']]] = $row;
		}
		$this->db->sql_freeresult($result);

		return $rows;
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
