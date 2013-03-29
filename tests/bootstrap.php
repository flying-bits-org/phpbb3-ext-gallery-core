<?php
/**
*
* @package phpBB Gallery Testing
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = dirname(__FILE__) . '/vendor/phpBB3/phpBB/';
$phpEx = 'php';
require_once $phpbb_root_path . 'includes/startup.php';

$table_prefix = 'phpbb_';
require_once $phpbb_root_path . 'includes/constants.php';
require_once $phpbb_root_path . 'includes/class_loader.' . $phpEx;

$phpbb_class_loader_mock = new phpbb_class_loader('phpbb_mock_', $phpbb_root_path . '../../../mock/', ".php");
$phpbb_class_loader_mock->register();
$phpbb_class_loader_ext = new phpbb_class_loader('phpbb_ext_', $phpbb_root_path . '../../../../../../', ".php");
$phpbb_class_loader_ext->register();
$phpbb_class_loader = new phpbb_class_loader('phpbb_', $phpbb_root_path . 'includes/', ".php");
$phpbb_class_loader->register();

require_once 'vendor/phpBB3/tests/test_framework/phpbb_test_case_helpers.php';
require_once 'vendor/phpBB3/tests/test_framework/phpbb_test_case.php';
require_once 'vendor/phpBB3/tests/test_framework/phpbb_database_test_case.php';
require_once 'vendor/phpBB3/tests/test_framework/phpbb_database_test_connection_manager.php';
require_once 'vendor/phpBB3/tests/test_framework/phpbb_functional_test_case.php';
require_once 'test_framework/gallery_test_case_helpers.php';
require_once 'test_framework/gallery_test_case.php';
require_once 'test_framework/gallery_database_test_case.php';
require_once 'test_framework/gallery_database_test_connection_manager.php';
require_once 'test_framework/gallery_functional_test_case.php';
