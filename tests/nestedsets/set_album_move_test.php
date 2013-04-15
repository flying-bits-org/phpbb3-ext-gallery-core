<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_nestedsets_set_album_move_test extends phpbb_ext_gallery_tests_nestedsets_set_album_base
{
	public function move_data()
	{
		return array(
			array('Move first item up',
				1, 1, false, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move last item down',
				13, -1, false, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move first item down',
				1, -1, true, array(
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move second item up',
				4, 1, true, array(
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move last item up',
				13, 1, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move last item up by 2',
				13, 2, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 14, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 15, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 22, 'right_id' => 23, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move last item up by 100',
				13, 100, true, array(
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 3, 'right_id' => 8, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 6, 'right_id' => 7, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 9, 'right_id' => 14, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 10, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 11, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 15, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 22, 'right_id' => 23, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_data
	*/
	public function test_move($explain, $album_id, $delta, $expected_moved, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected_moved, $this->set->move($album, $delta));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_down_data()
	{
		return array(
			array('Move last item down',
				13, false, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move first item down',
				1, true, array(
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_down_data
	*/
	public function test_move_down($explain, $album_id, $expected_moved, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected_moved, $this->set->move_down($album));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_up_data()
	{
		return array(
			array('Move first item up',
				1, false, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move second item up',
				4, true, array(
				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 2, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 3, 'right_id' => 4, 'album_parents' => ''),
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),
				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_up_data
	*/
	public function test_move_up($explain, $album_id, $expected_moved, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected_moved, $this->set->move_up($album));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_children_data()
	{
		return array(
			array('Item has no children',
				2, 1, false, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move single child up',
				5, 1, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 8, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 6, 'right_id' => 7, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 9, 'right_id' => 12, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move nested children up',
				4, 1, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 6, 'right_id' => 9, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 7, 'right_id' => 8, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 11, 'right_id' => 12, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move single child down',
				5, 7, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 11, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 15, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 19, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move nested children down',
				4, 7, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 8, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 9, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 13, 'right_id' => 14, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 21, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move single child to parent 0',
				5, 0, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 10, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 9, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 11, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 13, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 17, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 15, 'right_id' => 16, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 18, 'right_id' => 19, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 21, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
			array('Move nested children to parent 0',
				4, 0, true, array(
				array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

				array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 8, 'album_parents' => ''),

				array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 9, 'right_id' => 18, 'album_parents' => ''),
				array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 10, 'right_id' => 11, 'album_parents' => ''),
				array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 12, 'right_id' => 15, 'album_parents' => ''),
				array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 13, 'right_id' => 14, 'album_parents' => ''),
				array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 17, 'album_parents' => ''),

				array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 19, 'right_id' => 20, 'album_parents' => ''),
				array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 21, 'right_id' => 22, 'album_parents' => ''),
				array('album_id' => 5, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 26, 'album_parents' => ''),
				array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 24, 'right_id' => 25, 'album_parents' => ''),

				array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

				array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
				array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
				array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_children_data
	*/
	public function test_move_children($explain, $album_id, $target_id, $expected_moved, $expected)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);
		$target = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$target_id]);

		$this->assertEquals($expected_moved, $this->set->move_children($album, $target));

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM phpbb_gallery_albums
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_children_throws_data()
	{
		return array(
			array('New parent is child', 4, 5),
			array('New parent is child 2', 7, 9),
			array('New parent does not exist', 1, 200),
		);
	}

	/**
	* @dataProvider move_children_throws_data
	*
	* @expectedException			phpbb_ext_gallery_core_exception
	* @expectedExceptionMessage		GALLERY_ALBUM_INVALID_PARENT
	*/
	public function test_move_children_throws($explain, $album_id, $target_id)
	{
		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);
		$target = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$target_id]);

		$this->set->move_children($album, $target);
	}
}
