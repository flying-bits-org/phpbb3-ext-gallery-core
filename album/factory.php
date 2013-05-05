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

class phpbb_ext_gallery_core_album_factory
{
	/** @var phpbb_db_driver */
	protected $db;

	/** @var ContainerBuilder */
	protected $container;

	/** @var array */
	protected $types;

	/** @var string */
	protected $table_name;

	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_db_driver	$db			Database object
	* @param ContainerBuilder	$container	Container object
	* @param array				$types		Album types passed via the service container
	* @param string				$table_name	Database table name
	*/
	public function __construct(phpbb_db_driver $db, $container, $types, $table_name)
	{
		$this->db = $db;
		$this->container = $container;
		$this->types = $types;
		$this->table_name = $table_name;
	}

	/**
	* Get an album object for the given album ID
	*
	* @param	int		$album_id	ID of the album to load
	* @return	mixed		Returns an instance of
	*				phpbb_ext_gallery_core_album_interface for the given album
	*
	* @throws	phpbb_ext_gallery_core_exception	If the album does not exist or the type could not be found
	*/
	public function get($album_id)
	{
		$sql = 'SELECT *
			FROM ' . $this->table_name . '
			WHERE album_id = ' . (int) $album_id;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if ($row === false)
		{
			throw new OutOfBoundsException('GALLERY_ALBUM_INVALID_ITEM');
		}

		$album = $this->create($row['album_type']);
		$album->set_datarow($row);

		return $album;
	}

	/**
	* Create a new album object with the given type
	*
	* @param	string		$type	Type of the new instance
	* @return	mixed		Returns an instance of
	*				phpbb_ext_gallery_core_album_interface for the given type
	*
	* @throws	phpbb_ext_gallery_core_exception	If the type could not be found
	*/
	public function create($type)
	{
		if (!$this->container->has('gallery.album.type.' . $type))
		{
			throw new phpbb_ext_gallery_core_exception('GALLERY_ALBUM_TYPE_NOT_EXIST');
		}
		return $this->container->get('gallery.album.type.' . $type);
	}

	/**
	* Create a new album object with the given type
	*
	* @return	array	Returns a map with the given types and the language key for their display name
	*/
	public function get_types()
	{
		$types = array();
		foreach ($this->types as $type)
		{
			$types[$type->get_type_id()] = $type->get_type_name();
		}
		return $types;
	}
}