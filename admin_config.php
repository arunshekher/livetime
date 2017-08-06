<?php
require_once("../../class2.php");
if ( ! getperms("P")) {
	e107::redirect('admin');
	exit;
}


class livetime_admin extends e_admin_dispatcher
{
	protected $modes = [
		'main' => [
			'controller' => 'livetime_admin_ui',
			'path'       => null,
			'ui'         => 'livetime_admin_form_ui',
			'uipath'     => null,
		],
	];

	protected $adminMenu = [
		'main/prefs'  => ['caption' => 'Settings', 'perm' => '0'],
	];


	protected $menuTitle = 'LiveTime';
}


class livetime_admin_ui extends e_admin_ui
{
	protected $pluginTitle = "LiveTime";

	protected $pluginName = 'livetime';


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
		]
	];


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


new livetime_admin();

require_once(e_ADMIN . "auth.php");

e107::getAdminUI()->runPage();

require_once(e_ADMIN . "footer.php");
