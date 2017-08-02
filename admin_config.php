<?php
require_once("../../class2.php");
if ( ! getperms("P")) {
	e107::redirect('admin');
	exit;
}


class livetime_admin extends e_admin_dispatcher
{
	/**
	 * Format: 'MODE' => array('controller' =>'CONTROLLER_CLASS'[, 'index' =>
	 * 'list', 'path' => 'CONTROLLER SCRIPT PATH', 'ui' => 'UI CLASS NAME child
	 * of e_admin_ui', 'uipath' => 'UI SCRIPT PATH']); Note - default
	 * mode/action is autodetected in this order:
	 * - $defaultMode/$defaultAction (owned by dispatcher - see below)
	 * - $adminMenu (first key if admin menu array is not empty)
	 * - $modes (first key == mode, corresponding 'index' key == action)
	 *
	 * @var array
	 */
	protected $modes = [
		'main' => [
			'controller' => 'livetime_admin_ui',
			'path'       => null,
			'ui'         => 'livetime_admin_form_ui',
			'uipath'     => null,
		],
	];

	/* Both are optional
	protected $defaultMode = null;
	protected $defaultAction = null;
	*/

	/**
	 * Format: 'MODE/ACTION' => array('caption' => 'Menu link title'[, 'url' =>
	 * '{e_PLUGIN}blank/admin_config.php', 'perm' => '0']); Additionally, any
	 * valid e107::getNav()->admin() key-value pair could be added to the above
	 * array
	 *
	 * @var array
	 */
	protected $adminMenu = [
		'main/prefs'  => ['caption' => 'Settings', 'perm' => '0'],
	];


	/**
	 * Navigation menu title
	 *
	 * @var string
	 */
	protected $menuTitle = 'LiveTime';
}


class livetime_admin_ui extends e_admin_ui
{
	// required
	protected $pluginTitle = "LiveTime";

	/**
	 * plugin name or 'core'
	 * IMPORTANT: should be 'core' for non-plugin areas because this
	 * value defines what CONFIG will be used. However, I think this should be
	 * changed very soon (awaiting discussion with Cam) Maybe we need something
	 * like $prefs['core'], $prefs['blank'] ... multiple getConfig support?
	 *
	 * @var string
	 */
	protected $pluginName = 'livetime';


	// optional, if $pluginName == 'core', core prefs will be used, else e107::getPluginConfig($pluginName);
	protected $prefs = [
		'livetime_active'   => [
			'title'    => 'Activate',
			'type'  => 'boolean',
			'data'  => 'int'
		],
		'global_libs' => [
			'title' => 'Use global paths for libs.',
			'type'  => 'boolean',
			'data'  => 'int'
		],
		/*'pref_name'   => [
			'title'    => 'name',
			'type'     => 'text',
			'data'     => 'string',
			'validate' => 'regex',
			'rule'     => '#^[\w]+$#i',
			'help'     => 'allowed characters are a-zA-Z and underscore',
		],*/
	];


	// optional
	public function init()
	{
	}


	public function customPage()
	{
		$ns = e107::getRender();
		$text = "Hello World!";
		$ns->tablerender("Hello", $text);

	}
}


class livetime_admin_form_ui extends e_admin_form_ui
{
}


/*
 * After initialization we'll be able to call dispatcher via e107::getAdminUI()
 * so this is the first we should do on admin page.
 * Global instance variable is not needed.
 * NOTE: class is auto-loaded - see class2.php __autoload()
 */
/* $dispatcher = */

new livetime_admin();

/*
 * Uncomment the below only if you disable the auto observing above
 * Example: $dispatcher = new plugin_blank_admin(null, null, false);
 */
//$dispatcher->runObservers(true);

require_once(e_ADMIN . "auth.php");

/*
 * Send page content
 */
e107::getAdminUI()->runPage();

require_once(e_ADMIN . "footer.php");
