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
	/** @var phpbb_db_driver */
	protected $db;

	/** @var phpbb_lock_db */
	protected $lock;

	/** @var String */
	protected $table_name;

	/** @var String */
	protected $item_class = 'phpbb_ext_gallery_core_nestedsets_item_album';

	/**
	* Column names in the table
	* @var array
	*/
	protected $table_columns = array(
		'item_id'	=> 'album_id',
		'left_id'	=> 'left_id',
		'right_id'	=> 'right_id',
		'parent_id'	=> 'parent_id',
		'item_parents'	=> 'album_parents',
		'user_id',
	);

	/**
	* Additional SQL restrictions
	* Allows to have multiple nestedsets in one table
	* Columns must be prefixed with %1$s
	* @var String
	*/
	protected $sql_where = '';

	/**
	* List of item properties to be cached in $item_parents
	* @var array
	*/
	protected $item_basic_data = array('album_id', 'album_name', 'album_type');

	/**
	* Construct
	*
	* @param phpbb_db_driver	$db		Database connection
	* @param phpbb_lock_db		$lock	Lock class used to lock the table when moving albums around
	* @param string				$table_name		Table name
	* @param int				$user_id	User id used to get the tree
	*/
	public function __construct(phpbb_db_driver $db, phpbb_lock_db $lock, $table_name, $user_id)
	{
		$this->db = $db;
		$this->lock = $lock;
		$this->table_name = $table_name;
		$this->sql_where = '%1$s' . 'user_id = ' . (int) $user_id;
	}

	/**
	* @inheritdoc
	*/
	public function move_children(phpbb_ext_gallery_core_nestedsets_item_interface $current_parent, phpbb_ext_gallery_core_nestedsets_item_interface $new_parent)
	{
		while (!$this->lock->acquire())
		{
			// Retry after 0.2 seconds
			usleep(200 * 1000);
		}

		try
		{
			$return = parent::move_children($current_parent, $new_parent);
		}
		catch (phpbb_ext_gallery_core_nestedsets_exception $e)
		{
			$this->lock->release();
			throw new phpbb_ext_gallery_core_exception('GALLERY_ALBUM_' . $e->getMessage());
		}
		$this->lock->release();

		return $return;
	}
}
