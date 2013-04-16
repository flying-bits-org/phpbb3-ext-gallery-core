<?php
/**
*
* @package phpBB Gallery Core
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

class phpbb_ext_gallery_core_migrations_rename_album_user_id_p2 extends phpbb_db_migration
{
	public function effectively_installed()
	{
		return !$this->db_tools->sql_column_exists($this->table_prefix . 'gallery_albums', 'album_user_id');
	}

	static public function depends_on()
	{
		return array('phpbb_ext_gallery_core_migrations_rename_album_user_id_p1');
	}

	public function update_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'album_user_id',
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'album_user_id'		=> array('UINT', 0),
				),
			),
		);
	}
}
