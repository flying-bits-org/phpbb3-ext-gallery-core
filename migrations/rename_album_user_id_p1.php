<?php
/**
*
* @package phpBB Gallery Core
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

class phpbb_ext_gallery_core_migrations_rename_album_user_id_p1 extends phpbb_db_migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'gallery_albums', 'user_id');
	}

	static public function depends_on()
	{
		return array('phpbb_ext_gallery_core_migrations_1_1_6');
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'user_id'		=> array('UINT', 0),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'user_id',
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_user_id'))),
		);
	}

	public function update_user_id()
	{
		$sql = 'UPDATE ' . $this->table_prefix . 'gallery_albums
			SET user_id = album_user_id';
		$this->sql_query($sql);
	}
}
