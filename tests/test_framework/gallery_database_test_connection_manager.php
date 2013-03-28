<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_database_test_connection_manager extends phpbb_database_test_connection_manager
{
	/**
	* Load the phpBB database schema into the database
	*/
	public function load_schema()
	{
		$this->ensure_connected(__METHOD__);

		$directory = dirname(__FILE__) . '/../../docs/schemas/';
		$this->load_schema_from_file($directory);

		// Also load the phpBB schema's
		parent::load_schema();
	}
}