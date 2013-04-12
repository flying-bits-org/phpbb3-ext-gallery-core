<?php
/**
*
* @package phpBB Gallery Core
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

class phpbb_ext_gallery_core_migrations_album_type_string extends phpbb_db_migration
{
	protected $type_conversion = array(
		0	= 'category',
		1	=> 'upload',
		2	=> 'contest',
	);

	public function effectively_installed()
	{
		$sql = 'SELECT 1 as not_updated
			FROM ' . $this->table_prefix . 'gallery_albums
			WHERE ' . $this->db->sql_in_set('album_type', array_keys($this->type_conversion);
		$result = $this->db->sql_query_limit($sql, 1);
		$not_updated = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);
		return !$not_updated;
	}

	static public function depends_on()
	{
		return array('phpbb_ext_gallery_core_migrations_1_1_6');
	}

	public function update_schema()
	{
		return array(
			'change_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'album_type'		=> array('VCHAR:255', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'change_columns'	=> array(
				$this->table_prefix . 'gallery_albums'			=> array(
					'album_type'		=> array('UINT:3', 1),
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_album_types'))),
		);
	}

	public function update_album_types()
	{
		foreach ($this->type_conversion as $old_type => $new_type)
		{
			$sql = 'UPDATE ' . $this->table_prefix . "gallery_albums
				SET album_type = '" . $this->db->sql_escape($new_type) . "'
				WHERE album_type = " . $old_type;
			$this->sql_query($sql);
		}
	}
}
