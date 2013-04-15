<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_nestedsets_set_album_remove_test extends phpbb_ext_gallery_tests_nestedsets_set_album_base
{
	public function remove_data()
	{
		return array(
			array(1, array(1, 2, 3), array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 10, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 11, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array(2, array(2), array(
				array('album_id' => 2, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 5, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 6, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 7, 'right_id' => 8, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 11, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 15, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 21, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider remove_data
	*/
	public function test_remove($album_id, $expected_removed, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected_removed, $this->set->remove($album));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function delete_data()
	{
		return array(
			array(1, array(1, 2, 3), array(
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 10, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 11, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array(2, array(2), array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 5, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 6, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 7, 'right_id' => 8, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 11, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 15, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 21, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider delete_data
	*/
	public function test_delete($album_id, $expected_deleted, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected_deleted, $this->set->delete($album));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}
}
