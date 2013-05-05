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
