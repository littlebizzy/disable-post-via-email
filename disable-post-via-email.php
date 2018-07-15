<?php
/*
Plugin Name: Disable Post Via Email LittleBizzy
Plugin URI: https://www.littlebizzy.com/plugins/disable-post-via-email
Description: Completely disables and hides the Post Via Email feature included in WordPress core for stronger security and to simplify the backend settings page.
Version: 1.0.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DPVEML
*/

// Plugin namespace
namespace LittleBizzy\DisablePostViaEmail;

// Aliased namespaces
use LittleBizzy\DisablePostViaEmail\Notices;

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dpveml';
const VERSION = '1.0.0';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Admin Notices
//// Notices\Admin_Notices::instance(__FILE__);

/**
 * Admin Notices Multisite check
 * Uncomment "return;" to disable this plugin on Multisite installs
 */
if (false !== Notices\Admin_Notices_MS::instance(__FILE__)) { /* return; */ }

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
