<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_nestedsets_set_album_base extends phpbb_ext_gallery_database_test_case
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

		// Albums that do not exist
		0	=> array('album_id' => 0, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
		200	=> array('album_id' => 200, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'album_parents' => ''),
	);

	protected $set,
		$config,
		$lock;

	public function setUp()
	{
		parent::setUp();

		global $config;

		$config = $this->config = new phpbb_config(array('phpbb_gallery_album_lock' => 0));
		set_config(null, null, null, $this->config);

		$this->lock = new phpbb_lock_db('phpbb_gallery_album_lock', $this->config, $this->db);
		$this->set = new phpbb_ext_gallery_core_nestedsets_album($this->db, $this->lock, 'phpbb_gallery_albums', 0);
	}
}
