<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_ext_gallery_tests_album_factory_test extends phpbb_ext_gallery_database_test_case
{
	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/fixtures/albums.xml');
	}

	protected $factory;

	public function setUp()
	{
		parent::setUp();

		// Container
		$container = new phpbb_mock_container_builder();

		$type_collection = array();
		$types = array('category');
		foreach ($types as $type)
		{
			$class_name = 'phpbb_ext_gallery_core_album_' . $type;
			$type_class = new $class_name();
			$type_collection[] = $type_class;
			$container->set('gallery.album.type.' . $type, $type_class);
		}

		$this->factory = new phpbb_ext_gallery_core_album_factory(
			$this->db, $container, $type_collection, 'phpbb_gallery_albums'
		);
	}

	public function test_get_types()
	{
		$this->assertEquals(array(
			'category' => 'GALLERY_ALBUM_TYPE_CATEGORY',
		), $this->factory->get_types());
	}

	public function test_create()
	{
		$this->assertInstanceOf('phpbb_ext_gallery_core_album_category', $this->factory->create('category'));
	}

	/**
	* @expectedException			phpbb_ext_gallery_core_exception
	* @expectedExceptionMessage		GALLERY_ALBUM_TYPE_NOT_EXIST
	*/
	public function test_create_not_exist()
	{
		$this->assertInstanceOf('phpbb_ext_gallery_core_album_category', $this->factory->create('does_not_exist'));
	}

	public function test_get()
	{
		$album = $this->factory->get(1);
		$this->assertInstanceOf('phpbb_ext_gallery_core_album_category', $album);
		$this->assertEquals(1, $album->get('id'));
	}

	/**
	* @expectedException			phpbb_ext_gallery_core_exception
	* @expectedExceptionMessage		GALLERY_ALBUM_NOT_EXIST
	*/
	public function test_get_not_exist()
	{
		$album = $this->factory->get(3);
	}

	/**
	* @expectedException			phpbb_ext_gallery_core_exception
	* @expectedExceptionMessage		GALLERY_ALBUM_TYPE_NOT_EXIST
	*/
	public function test_get_type_not_exist()
	{
		$album = $this->factory->get(2);
	}
}
