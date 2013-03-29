<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_nestedsets_item_album_test extends phpbb_ext_gallery_test_case
{
	public function test_album_constructor()
	{
		$album_data = array(
			'parent_id'		=> 1,
			'album_id'		=> 5,
			'user_id'		=> 32,
			'left_id'		=> 2,
			'right_id'		=> 3,
			'album_parents'	=> '',
		);

		$album = new phpbb_ext_gallery_core_nestedsets_item_album($album_data);

		$this->assertEquals($album->get_item_id(), $album_data['album_id']);
		$this->assertEquals($album->get_left_id(), $album_data['left_id']);
		$this->assertEquals($album->get_right_id(), $album_data['right_id']);
		$this->assertEquals($album->get_parent_id(), $album_data['parent_id']);
		$this->assertEquals($album->get_user_id(), $album_data['user_id']);
		$this->assertEquals($album->get_item_parents_data(), $album_data['album_parents']);
	}
}
