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

interface phpbb_ext_gallery_core_album_interface
{
	/**
	* Set the data values for this album
	*
	* @param	array	$row	Should contain all data from the albums table
	* @return	null
	*/
	public function set_datarow(array $row);

	/**
	* Get a value of the album
	*
	* @param	string	$key	Name of the value, (album_ prefix can be ommited)
	* @return	mixed
	*/
	public function get($key);

	/**
	* Set a value of the album on the object
	*
	* This method will not update the value in the database
	* You need to call submit() for this
	*
	* @param	string	$key	Name of the value
	* @param	string	$value	New value of the data
	* @return	bool		True, if the value was changed
	*/
	public function set($key, $value);

	/**
	* Set multiple values of the album on the object
	*
	* This method will not update the value in the database
	* You need to call submit() for this
	*
	* @param	array	$new_data	Data to update (key => value)
	* @return	bool		True, if values were changed
	*/
	public function set_values($new_data);

	/**
	* Writes previously changed data values into the database
	*
	* @return	bool		True, if any values were written
	*/
	public function submit();

	/**
	* Delete an album
	*
	* Also deletes the subalbums
	*
	* @return array		Album ids that have been deleted
	*/
	public function delete();

	/**
	* Move an item by a given delta
	*
	* @param int	$delta	Number of steps to move this item, < 0 => down, > 0 => up
	* @return bool True if the item was moved
	*/
	public function move($delta);

	/**
	* Move an item down by 1
	*
	* @return bool True if the item was moved
	*/
	public function move_down();

	/**
	* Move an item up by 1
	*
	* @return bool True if the item was moved
	*/
	public function move_up();

	/**
	* Moves all children of one item to another item
	*
	* @param int	$new_parent_id		The new parent item
	* @return bool True if any items where moved
	*/
	public function move_children($new_parent_id);

	/**
	* Set the parent item
	*
	* @param int	$new_parent_id		The new parent item
	* @return bool True if the parent was set successfully
	*/
	public function change_parent($new_parent_id);

	/**
	* Get all items that are either ancestors or descendants of the album
	*
	* @param bool		$order_asc		Order the items ascendingly (most outer ancestor first)
	* @param bool		$include_album	Should the album matching the given album id be included in the list as well
	* @return array			Array of items (containing all columns from the album table)
	*							ID => album data
	*/
	public function get_path_and_subtree_data($order_asc, $include_album);

	/**
	* Get all of the album's ancestors
	*
	* @param bool		$order_asc		Order the items ascendingly (most outer ancestor first)
	* @param bool		$include_album	Should the album matching the given album id be included in the list as well
	* @return array			Array of items (containing all columns from the album table)
	*							ID => album data
	*/
	public function get_path_data($order_asc, $include_album);

	/**
	* Get all of the album's descendants
	*
	* @param bool		$order_asc		Order the items ascendingly
	* @param bool		$include_album	Should the album matching the given album id be included in the list as well
	* @return array			Array of items (containing all columns from the album table)
	*							ID => album data
	*/
	public function get_subtree_data($order_asc, $include_album);

	/**
	* Get basic data of all parent albums
	*
	* Basic data is defined in the $item_basic_data property.
	* Data is cached in the album_parents column in the album table
	*
	* @return array			Array of albums (containing basic columns from the album table)
	*							ID => album data
	*/
	public function get_path_basic_data();

	/**
	* Identifier of the album type.
	* A service with the name "gallery.album.type.<id>" must exist
	*
	* @return string
	*/
	public function get_type_id();

	/**
	* Language key for the album type's display name
	*
	* @return string
	*/
	public function get_type_name();
}
