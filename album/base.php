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

abstract class phpbb_ext_gallery_core_album_base implements phpbb_ext_gallery_core_album_interface
{
	/** @var phpbb_db_driver */
	protected $db;

	/** @var phpbb_ext_gallery_core_album_nestedset */
	protected $nestedset;

	/** @var int */
	protected $id;

	/** @var int */
	protected $user_id;

	/** @var array(field => value) */
	protected $data;

	/**
	* Value changes that are not written into the database yet
	* @var array(field => value)
	*/
	protected $updated_data;

	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_db_driver	$db			Database object
	* @param phpbb_ext_gallery_core_album_nestedset	$nestedset	Nestedset to manage the album trees
	* @param string				$table_name	Database table name
	*/
	public function __construct(phpbb_db_driver $db, phpbb_ext_gallery_core_album_nestedset $nestedset, $table_name)
	{
		$this->db = $db;
		$this->nestedset = $nestedset;
		$this->table_name = $table_name;
		$this->data = $this->updated_data = array();
	}

	/**
	* @inheritdoc
	*/
	public function set_datarow(array $row)
	{
		$this->id = $row['album_id'];
		$this->user_id = $row['user_id'];
		$this->data = $row;
	}

	/**
	* @inheritdoc
	*/
	public function get($key)
	{
		if ($key === 'id')
		{
			return $this->id;
		}

		if (!isset($this->data[$key]))
		{
			return null;
		}

		return $this->data[$key];
	}

	/**
	* @inheritdoc
	*/
	public function set($key, $value)
	{
		if (in_array($key, array('album_id', 'id', 'left_id', 'right_id', 'album_parents')))
		{
			// Do not allow to set the album_id and nestedset values manually.
			throw new phpbb_ext_gallery_core_exception('GALLERY_ALBUM_CANNOT_SET_VALUE');
		}

		if (!is_null($this->id) && $key === 'user_id')
		{
			// Do not allow to set the user_id manually, if the album already exists.
			throw new phpbb_ext_gallery_core_exception('GALLERY_ALBUM_CANNOT_SET_VALUE');
		}

		$update_required = !isset($this->data[$key]) || $this->data[$key] !== (string) $value;

		if ($update_required)
		{
			$this->data[$key] = $value;
			$this->updated_data[$key] = $value;
		}

		return $update_required;
	}

	/**
	* @inheritdoc
	*/
	public function set_values($new_data)
	{
		$update_required = 0;

		foreach ($new_data as $key => $value)
		{
			$update_required |= (int) $this->set($key, $value);
		}

		return (bool) $update_required;
	}

	/**
	* @inheritdoc
	*/
	public function submit()
	{
		$updated_data = false;
		$this->nestedset->set_user_id($this->user_id);

		$parent_id = null;
		if (isset($this->updated_data['parent_id']))
		{
			$parent_id = (int) $this->updated_data['parent_id'];
			unset($this->updated_data['parent_id']);
		}

		if (!empty($this->updated_data))
		{
			if ($this->id)
			{
				$sql = 'UPDATE ' . $this->table_name . '
					SET ' . $this->db->sql_build_array('UPDATE', $this->updated_data) . '
					WHERE album_id = ' . $this->id;
				$this->db->sql_query($sql);
			}
			else
			{
				// Ensure that text columns are set, to prevent
				// "Field does not have a default value" errors in strict mode
				$album_data = array_merge(array(
					'album_parents'		=> '',
					'album_desc'		=> '',
				), $this->updated_data);

				$this->data['album_id'] = (int) $this->nestedset->insert($this->updated_data);
				$this->id = $this->data['album_id'];
			}

			$this->updated_data = array();
			$updated_data = true;
		}

		if (!is_null($parent_id))
		{
			//$this->nestedset->set_parent($this->data, $parent_id);
			$this->nestedset->set_parent(new phpbb_ext_gallery_core_album_nestedsetitem($this->data), new phpbb_ext_gallery_core_album_nestedsetitem(array(
				'album_id'	=> $parent_id,
				'parent_id'	=> 0,
				'left_id'	=> 0,
				'right_id'	=> 0,
				'user_id'	=> $this->user_id,
			)));
		}

		return $updated_data;
	}

	/**
	* Prevent fatal error:
	* Can't inherit abstract function phpbb_ext_gallery_core_album_interface::get_type_id()
	* (previously declared abstract in phpbb_ext_gallery_core_album_base) in
	* album/base.php for php < 5.3.23
	*
	abstract function get_type_id();
	abstract function get_type_name();
	*/
}
