<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_nestedsets_set_album_test extends phpbb_ext_gallery_database_test_case
{
	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/fixtures/phpbb_gallery_albums.xml');
	}

	protected $album_data = array(
		// \__/
		1	=> array('album_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
		2	=> array('album_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
		3	=> array('album_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),

		// \  /
		//  \/
		4	=> array('album_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'album_parents' => ''),
		5	=> array('album_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'album_parents' => ''),
		6	=> array('album_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'album_parents' => ''),

		// \_  _/
		//   \/
		7	=> array('album_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'album_parents' => ''),
		8	=> array('album_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'album_parents' => ''),
		9	=> array('album_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'album_parents' => ''),
		10	=> array('album_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'album_parents' => ''),
		11	=> array('album_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'album_parents' => ''),

		// \/
		12	=> array('album_id' => 12, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 23, 'right_id' => 24, 'album_parents' => ''),

		// \/
		13	=> array('album_id' => 13, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 25, 'right_id' => 26, 'album_parents' => ''),

		// \/
		14	=> array('album_id' => 14, 'parent_id' => 0, 'user_id' => 2, 'left_id' => 1, 'right_id' => 2, 'album_parents' => ''),

		// \__/
		15	=> array('album_id' => 15, 'parent_id' => 0, 'user_id' => 3, 'left_id' => 1, 'right_id' => 6, 'album_parents' => ''),
		16	=> array('album_id' => 16, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 2, 'right_id' => 3, 'album_parents' => ''),
		17	=> array('album_id' => 17, 'parent_id' => 15, 'user_id' => 3, 'left_id' => 4, 'right_id' => 5, 'album_parents' => ''),
	);

	public function album_constructor_data()
	{
		return array(
			array('phpbb_gallery_albums', 0, array(
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
		);
	}

	/**
	* @dataProvider album_constructor_data
	*/
	public function test_album_constructor($table, $user_id, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_data()
	{
		return array(
			array('Move first item up',
				'phpbb_gallery_albums', 0, 1, 1, array(
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
				'phpbb_gallery_albums', 0, 13, -1, array(
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
				'phpbb_gallery_albums', 0, 1, -1, array(
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
				'phpbb_gallery_albums', 0, 4, 1, array(
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
				'phpbb_gallery_albums', 0, 13, 1, array(
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
				'phpbb_gallery_albums', 0, 13, 2, array(
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
				'phpbb_gallery_albums', 0, 13, 100, array(
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
	public function test_move($explain, $table, $user_id, $album_id, $delta, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$set->move($album, $delta);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_down_data()
	{
		return array(
			array('Move last item down',
				'phpbb_gallery_albums', 0, 13, array(
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
				'phpbb_gallery_albums', 0, 1, array(
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
	public function test_move_down($explain, $table, $user_id, $album_id, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$set->move_down($album);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function move_up_data()
	{
		return array(
			array('Move first item up',
				'phpbb_gallery_albums', 0, 1, array(
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
				'phpbb_gallery_albums', 0, 4, array(
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
	public function test_move_up($explain, $table, $user_id, $album_id, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$set->move_up($album);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function get_branch_data()
	{
		return array(
			array('phpbb_gallery_albums', 0, 1, 'all', true, true, array(1, 2, 3)),
			array('phpbb_gallery_albums', 0, 1, 'all', true, false, array(2, 3)),
			array('phpbb_gallery_albums', 0, 1, 'all', false, true, array(3, 2, 1)),
			array('phpbb_gallery_albums', 0, 1, 'all', false, false, array(3, 2)),

			array('phpbb_gallery_albums', 0, 1, 'parents', true, true, array(1)),
			array('phpbb_gallery_albums', 0, 1, 'parents', true, false, array()),
			array('phpbb_gallery_albums', 0, 1, 'parents', false, true, array(1)),
			array('phpbb_gallery_albums', 0, 1, 'parents', false, false, array()),

			array('phpbb_gallery_albums', 0, 1, 'children', true, true, array(1, 2, 3)),
			array('phpbb_gallery_albums', 0, 1, 'children', true, false, array(2, 3)),
			array('phpbb_gallery_albums', 0, 1, 'children', false, true, array(3, 2, 1)),
			array('phpbb_gallery_albums', 0, 1, 'children', false, false, array(3, 2)),

			array('phpbb_gallery_albums', 0, 2, 'all', true, true, array(1, 2)),
			array('phpbb_gallery_albums', 0, 2, 'all', true, false, array(1)),
			array('phpbb_gallery_albums', 0, 2, 'all', false, true, array(2, 1)),
			array('phpbb_gallery_albums', 0, 2, 'all', false, false, array(1)),

			array('phpbb_gallery_albums', 0, 2, 'parents', true, true, array(1, 2)),
			array('phpbb_gallery_albums', 0, 2, 'parents', true, false, array(1)),
			array('phpbb_gallery_albums', 0, 2, 'parents', false, true, array(2, 1)),
			array('phpbb_gallery_albums', 0, 2, 'parents', false, false, array(1)),

			array('phpbb_gallery_albums', 0, 2, 'children', true, true, array(2)),
			array('phpbb_gallery_albums', 0, 2, 'children', true, false, array()),
			array('phpbb_gallery_albums', 0, 2, 'children', false, true, array(2)),
			array('phpbb_gallery_albums', 0, 2, 'children', false, false, array()),

			array('phpbb_gallery_albums', 0, 5, 'all', true, true, array(4, 5, 6)),
			array('phpbb_gallery_albums', 0, 5, 'all', true, false, array(4, 6)),
			array('phpbb_gallery_albums', 0, 5, 'all', false, true, array(6, 5, 4)),
			array('phpbb_gallery_albums', 0, 5, 'all', false, false, array(6, 4)),

			array('phpbb_gallery_albums', 0, 5, 'parents', true, true, array(4, 5)),
			array('phpbb_gallery_albums', 0, 5, 'parents', true, false, array(4)),
			array('phpbb_gallery_albums', 0, 5, 'parents', false, true, array(5, 4)),
			array('phpbb_gallery_albums', 0, 5, 'parents', false, false, array(4)),

			array('phpbb_gallery_albums', 0, 5, 'children', true, true, array(5, 6)),
			array('phpbb_gallery_albums', 0, 5, 'children', true, false, array(6)),
			array('phpbb_gallery_albums', 0, 5, 'children', false, true, array(6, 5)),
			array('phpbb_gallery_albums', 0, 5, 'children', false, false, array(6)),
		);
	}

	/**
	* @dataProvider get_branch_data
	*/
	public function test_get_branch($table, $user_id, $album_id, $type, $order_desc, $include_item, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$this->assertEquals($expected, array_keys($set->get_branch_data($album, $type, $order_desc, $include_item)));
	}

	public function remove_data()
	{
		return array(
			array('phpbb_gallery_albums', 0, 1, array(
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
			array('phpbb_gallery_albums', 0, 2, array(
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
	public function test_remove($table, $user_id, $album_id, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$set->remove($album);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function delete_data()
	{
		return array(
			array('phpbb_gallery_albums', 0, 1, array(
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
			array('phpbb_gallery_albums', 0, 2, array(
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
	public function test_delete($table, $user_id, $album_id, $expected)
	{
		$set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $table, $user_id);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($this->album_data[$album_id]);

		$set->delete($album);

		$result = $this->db->sql_query("SELECT album_id, parent_id, user_id, left_id, right_id, album_parents
			FROM $table
			ORDER BY user_id, left_id, album_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}
}